<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Ordertotal extends Component
{
    protected $listeners = ['updateTotal'=>'$refresh'];
    public function render()
    {
        return view('livewire.frontend.ordertotal');
    }
}
