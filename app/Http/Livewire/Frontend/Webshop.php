<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Bodytype;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\Drivetrain;
use App\Models\Fueltype;
use App\Models\Transmission;
use Livewire\Component;
use Livewire\WithPagination;

class Webshop extends Component
{
    use WithPagination;

    protected $brands;
    protected $drivetrains;
    protected $transmissions;
    protected $fueltypes;
    protected $colors;
    protected $bodytypes;
    protected $cars;

    public $brandFilters = [];
    public $drivetrainFilters = [];
    public $transmissionFilters = [];
    public $fueltypeFilters = [];
    public $bodytypeFilters = [];
    public $colorFilters = [];

    public function updatedBrandFilters(){
        $this->resetPage();
    }
    public function updatedDrivetrainFilters(){
        $this->resetPage();
    }
    public function updatedTransmissionFilters(){
        $this->resetPage();
    }
    public function updatedFueltypeFilters(){
        $this->resetPage();
    }
    public function updatedBodytypeFilters(){
        $this->resetPage();
    }
    public function updatedColorFilters(){
        $this->resetPage();
    }

    public function render()
    {
        $this->brands = Brand::all();
        $this->drivetrains = Drivetrain::all();
        $this->transmissions = transmission::all();
        $this->fueltypes = Fueltype::all();
        $this->colors = Color::all();
        $this->bodytypes = Bodytype::all();

        /**Filters maybe extract later**/
        $this->cars = Car::query()
            ->when($this->bodytypeFilters, function ($query){
                $query ->whereHas('bodytype', function($query){
                    $query->whereIn('name', $this->bodytypeFilters);
                });
            })
            ->when($this->brandFilters, function ($query){
                $query ->whereHas('brand', function($query){
                    $query->whereIn('name', $this->brandFilters);
                });
            })
            ->when($this->drivetrainFilters, function ($query){
                $query ->whereHas('drivetrain', function($query){
                    $query->whereIn('name', $this->drivetrainFilters);
                });
            })
            ->when($this->transmissionFilters, function ($query){
                $query ->whereHas('transmission', function($query){
                    $query->whereIn('name', $this->transmissionFilters);
                });
            })
            ->when($this->fueltypeFilters, function ($query){
                $query ->whereHas('fueltype', function($query){
                    $query->whereIn('name', $this->fueltypeFilters);
                });
            })
            ->when($this->colorFilters, function ($query){
                $query ->whereHas('colors', function($query){
                    $query->whereIn('name', $this->colorFilters);
                });
            })
            ->paginate(6);


        return view('livewire.frontend.webshop', ['cars' => $this->cars, 'brands' => $this->brands, 'drivetrains' => $this->drivetrains, 'transmissions' => $this->transmissions, 'fueltypes' => $this->fueltypes, 'colors' => $this->colors, 'bodytypes' => $this->bodytypes])->extends('layouts.frontend')->section('content');
    }
}
