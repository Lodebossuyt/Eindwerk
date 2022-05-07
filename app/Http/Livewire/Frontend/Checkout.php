<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Adress;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Mollie\Laravel\Facades\Mollie;

class Checkout extends Component
{
    /**Radio buttons**/
    public $addressType = 'true';

    /**Shipping address**/
    public $shippingAddress;
    public $shippingCity;
    public $shippingCountry;
    public $shippingZipcode;

    /**Billing address**/
    public $billingAddress;
    public $billingCity;
    public $billingCountry;
    public $billingZipcode;

    public function mount()
    {
        if (Auth::check()) {
            if (Auth::user()->adresses) {
                foreach (Auth::user()->adresses as $address) {
                    foreach ($address->adresstypes as $addresstype) {
                        if ($addresstype->name == 'Shipping') {
                            $this->shippingAddress = $address->adress;
                            $this->shippingCity = $address->city;
                            $this->shippingCountry = $address->country;
                            $this->shippingZipcode = $address->zipcode;
                        }
                        if ($addresstype->name == 'Billing') {
                            $this->billingAddress = $address->adress;
                            $this->billingCity = $address->city;
                            $this->billingCountry = $address->country;
                            $this->billingZipcode = $address->zipcode;
                        }
                    }
                }
            }
        }
    }

    protected function rules()
    {
        if($this->addressType == 'true'){
            return [
                'shippingAddress'=>'required',
                'shippingCity'=>'required',
                'shippingCountry'=>'required',
                'shippingZipcode'=>'required',
            ];
        }else{
            return [
                'shippingAddress'=>'required',
                'shippingCity'=>'required',
                'shippingCountry'=>'required',
                'shippingZipcode'=>'required',

                'billingAddress'=>'required',
                'billingCity'=>'required',
                'billingCountry'=>'required',
                'billingZipcode'=>'required',
            ];
        }
    }

    /**Molly stuff**/
    public function preparePayment()
    {
        $this->validate();

        if (Session::has('cart') && Session::get('cart')->totalPrice > 0) {
            if (Auth::check()) {
                $payment = Mollie::api()->payments()->create([
                    'amount' => [
                        'currency' => 'EUR', // Type of currency you want to send
                        'value' => number_format(Session::get('cart')->totalPrice, 2, '.', ''), // You must send the correct number of decimals, thus we enforce the use of strings
                    ],
                    'description' => 'Payment By ' . Auth::user()->name,
                    'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
                ]);

                /**Adressen wegschrijven**/
                if ($this->addressType == 'true') {
                    /*nieuw address*/
                    $shipping = new Adress();
                    $shipping->adress = $this->shippingAddress;
                    $shipping->city = $this->shippingCity;
                    $shipping->country = $this->shippingCountry;
                    $shipping->zipcode = $this->shippingZipcode;
                    $shipping->save();

                    /*nieuw adress type*/
                    $shipping->adresstypes()->sync([1, 2], true);

                    /*addressen aan user hangen*/
                    Auth::user()->adresses()->sync($shipping->id);
                } else {
                    $shipping = new Adress();
                    $shipping->adress = $this->shippingAddress;
                    $shipping->city = $this->shippingCity;
                    $shipping->country = $this->shippingCountry;
                    $shipping->zipcode = $this->shippingZipcode;
                    $shipping->save();

                    /*nieuw adress type*/
                    $shipping->adresstypes()->sync(1);

                    $billing = new Adress();
                    $billing->adress = $this->billingAddress;
                    $billing->city = $this->billingCity;
                    $billing->country = $this->billingCountry;
                    $billing->zipcode = $this->billingZipcode;
                    $billing->save();

                    /*nieuw adress type*/
                    $billing->adresstypes()->sync(2);

                    /*addressen aan user hangen*/
                    Auth::user()->adresses()->sync([$shipping->id, $billing->id]);
                }

                /**Order wegschrijven**/
                $payment = Mollie::api()->payments()->get($payment->id);
                $order = new Order();
                $order->transactioncode = $payment->id;
                $order->user_id = Auth::user()->id;
                if ($this->addressType == 'true') {
                    $order->shippingadress = $shipping->adress . ' ' . $shipping->city . ' ' . $shipping->zipcode . ' ' . $shipping->country;
                    $order->billingadress = $shipping->adress . ' ' . $shipping->city . ' ' . $shipping->zipcode . ' ' . $shipping->country;
                } else {
                    $order->shippingadress = $shipping->adress . ' ' . $shipping->city . ' ' . $shipping->zipcode . ' ' . $shipping->country;
                    $order->billingadress = $billing->adress . ' ' . $billing->city . ' ' . $billing->zipcode . ' ' . $billing->country;
                }

                $order->save();

                /**Order items wegschrijven**/
                foreach (Session::get('cart')->products as $product) {
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $order->id;
                    $orderItem->car_id = $product['product_id'];
                    $orderItem->price = $product['product_price'];
                    $orderItem->amount = $product['quantity'];
                    $orderItem->save();
                }

                /***Clear en redirect*/
                session()->forget('cart');
                // redirect customer to Mollie checkout page
                return redirect($payment->getCheckoutUrl(), 303);
            } else {
                session()->flash('noItems', 'Login first!');
            }
        } else {
            session()->flash('noItems', 'There is nothing in your cart!');
        }
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess()
    {
        //echo 'payment has been received';
        return redirect()->route('home');

    }

    public function render()
    {
        return view('livewire.frontend.checkout')->extends('layouts.frontend')->section('content');
    }
}
