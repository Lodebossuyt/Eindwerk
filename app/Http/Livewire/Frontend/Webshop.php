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

    public $buildyearMin;
    public $buildyearMax;
    public $priceMin;
    public $priceMax;
    public $sort;

    public function removeBrand($brand){
        $key = array_search($brand, $this->brandFilters);
        unset($this->brandFilters[$key]);
        $this->brandFilters = array_values($this->brandFilters);
    }
    public function removeDrivetrain($drivetrain){
        $key = array_search($drivetrain, $this->drivetrainFilters);
        unset($this->drivetrainFilters[$key]);
        $this->drivetrainFilters = array_values($this->drivetrainFilters);
    }
    public function removeTransmission($transmission){
        $key = array_search($transmission, $this->transmissionFilters);
        unset($this->transmissionFilters[$key]);
        $this->transmissionFilters = array_values($this->transmissionFilters);
    }
    public function removeFueltype($fueltype){
        $key = array_search($fueltype, $this->fueltypeFilters);
        unset($this->fueltypeFilters[$key]);
        $this->fueltypeFilters = array_values($this->fueltypeFilters);
    }
    public function removeBodytype($bodytype){
        $key = array_search($bodytype, $this->bodytypeFilters);
        unset($this->bodytypeFilters[$key]);
        $this->bodytypeFilters = array_values($this->bodytypeFilters);
    }
    public function removeColor($color){
        $key = array_search($color, $this->colorFilters);
        unset($this->colorFilters[$key]);
        $this->colorFilters = array_values($this->colorFilters);
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
            ->when($this->buildyearMin, function ($query){
                $query ->where('buildyear', '>', $this->buildyearMin);
            })
            ->when($this->buildyearMax, function ($query){
                $query ->where('buildyear', '<', $this->buildyearMax);
            })
            ->when($this->priceMin, function ($query){
                $query ->where('price', '>', $this->priceMin);
            })
            ->when($this->priceMax, function ($query){
                $query ->where('price', '<', $this->priceMax);
            })->when($this->sort, function($query){
                $query->orderBy('price', $this->sort);
            })
            ->paginate(6);


        return view('livewire.frontend.webshop', ['cars' => $this->cars, 'brands' => $this->brands, 'drivetrains' => $this->drivetrains, 'transmissions' => $this->transmissions, 'fueltypes' => $this->fueltypes, 'colors' => $this->colors, 'bodytypes' => $this->bodytypes])->extends('layouts.frontend')->section('content');
    }
}
