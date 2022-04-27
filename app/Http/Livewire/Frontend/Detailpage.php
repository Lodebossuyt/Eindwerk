<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Car;
use Livewire\Component;

class Detailpage extends Component
{
    protected $car;

    public function mount($slug){
        $this->car = Car::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.frontend.detailpage', ['car'=>$this->car])->extends('layouts.frontend')->section('content');
    }
}
