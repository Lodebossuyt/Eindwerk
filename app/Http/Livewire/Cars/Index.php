<?php

namespace App\Http\Livewire\Cars;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Drivetrain;
use App\Models\Transmission;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $cars;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshCars' => '$refresh'];


    public function deleteCar($id){
        $car = Car::findOrFail($id);
        $this->dispatchBrowserEvent('notify', $car->name . ' ' . $car->brand->name . ' deleted Successfully!' );
        $car->delete();
        $this->cars = Car::paginate(5);
    }

    public function render()
    {

        $this->cars = Car::paginate(5);


        return view('livewire.cars.index', ['cars'=>$this->cars])->extends('layouts.backend')->section('content');
    }
}
