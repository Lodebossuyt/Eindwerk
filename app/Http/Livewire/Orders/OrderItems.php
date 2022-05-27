<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;

class OrderItems extends Component
{
    protected $order;

    public function mount($order)
    {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.orders.order-items', ['order'=>$this->order]);
    }
}
