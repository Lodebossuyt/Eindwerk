<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{
   /* public function  __construct() {
        Mollie::api()->setApiKey('test_FbVACj7UbsdkHtAUWnCnmSNGFWMuuA'); // your mollie test api key
    }*/

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment()
    {
        $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR', // Type of currency you want to send
                'value' =>number_format( Session::get('cart')->totalPrice, 2, '.', ''), // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Payment By ' . Auth::user()->name,
            'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
        ]);

        /**Order wegschrijven**/
        $payment = Mollie::api()->payments()->get($payment->id);
        $order = new Order();
        $order->transactioncode = $payment->id;
        $order->user_id = Auth::user()->id;
        $order->save();

        /**Order items wegschrijven**/
        foreach(Session::get('cart')->products as $product){
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
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess() {
        //echo 'payment has been received';
        return view('home');

    }
}
