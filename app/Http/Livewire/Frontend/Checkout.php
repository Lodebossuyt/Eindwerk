<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Mollie\Laravel\Facades\Mollie;

class Checkout extends Component
{
    public function render()
    {
        return view('livewire.frontend.checkout')->extends('layouts.frontend')->section('content');
    }
}
