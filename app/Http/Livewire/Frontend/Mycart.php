<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Mycart extends Component
{
    public function removeItem($id){
        $currentCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($currentCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        $this->emit('updateTotal');
        $this->emit('refreshCartIcon');
    }

    public function render()
    {
        $currentCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($currentCart);
        $cart = $cart->products;
        return view('livewire.frontend.mycart', ['cart'=>$cart])->extends('layouts.frontend')->section('content');
    }
}
