<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Carticon extends Component
{
    public $listeners = ['refreshCartIcon'=>'$refresh'];

    public function render()
    {
        return view('livewire.frontend.carticon');
    }
}
