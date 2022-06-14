<?php

namespace App\Http\Livewire\Frontend\Component;

use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Updatequantity extends Component
{
    public $car;
    public $quantity;

    public function mount($car){
        $this->car = $car;
        $this->quantity = $car['quantity'];
    }
    public function updatedQuantity(){
        if($this->quantity > 0){
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->updateQuantity($this->car['product_id'], $this->quantity);
            Session::put('cart', $cart);
            $this->emit('updateTotal');
            $this->emit('refreshCartIcon');
        }
    }

    public function render()
    {
        return view('livewire.frontend.component.updatequantity', ['car'=>$this->car]);
    }
}
