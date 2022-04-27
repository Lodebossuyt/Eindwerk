<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class Webshop extends Component
{
    use WithPagination;

    protected $cars;

    public function render()
    {
        $this->cars = Car::paginate(6);
        return view('livewire.frontend.webshop', ['cars'=>$this->cars])->extends('layouts.frontend')->section('content');
    }
}
