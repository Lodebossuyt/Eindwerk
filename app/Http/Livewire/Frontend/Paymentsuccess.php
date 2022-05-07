<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Paymentsuccess extends Component
{
    public function render()
    {
        return view('livewire.frontend.paymentsuccess')->extends('layouts.frontend')->section('content');
    }
}
