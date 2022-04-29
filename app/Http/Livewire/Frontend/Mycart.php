<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Mycart extends Component
{
    public function render()
    {
        return view('livewire.frontend.mycart')->extends('layouts.frontend')->section('content');
    }
}
