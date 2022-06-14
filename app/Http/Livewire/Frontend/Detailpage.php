<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Car;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Detailpage extends Component
{
    protected $car;

    public function mount($slug){
        $this->car = Car::where('slug', $slug)->with('bodytype','photos')->first();
    }

    public function addToCart($id){
        $product = Car::findOrFail($id)->load('bodytype');
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);

        $this->car = $product;

        $this->emit('refreshCartIcon');
    }

    public function render()
    {
        return view('livewire.frontend.detailpage', ['car'=>$this->car])->extends('layouts.frontend')->section('content');
    }
}
