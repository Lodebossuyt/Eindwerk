<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $orders;

    public function render()
    {
        $this->orders = Order::with('user', 'orderitems', 'orderitems.car')->paginate(15);
        return view('livewire.orders.index', ['orders'=>$this->orders])->extends('layouts.backend')->section('content');
    }
}
