<?php

namespace App\Http\Livewire\Cars;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\Drivetrain;
use App\Models\Fueltype;
use App\Models\Transmission;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    protected $brands;
    protected $drivetrains;
    protected $transmissions;
    protected $fueltypes;
    protected $colors;

    public $name;
    public $brand_id;
    public $drivetrain_id;
    public $transmission_id;
    public $fueltype_id;
    public $buildyear;
    public $body;
    public $price;
    public $avatar;
    public $carColors = [];


    public function create_car(){
        $data = $this->validate([
            'name' => 'required',
            'brand_id'=>'required',
            'drivetrain_id'=>'required',
            'transmission_id'=>'required',
            'fueltype_id'=>'required',
            'buildyear'=>'required',
            'body'=>'required',
            'price'=>'required',
            'carColors' => 'required',
            //'avatar'=>'required|image|max:5000',
        ]);

        $car = new Car();
        $car->name = $data['name'];
        $car->brand_id = $data['brand_id'];
        $car->drivetrain_id = $data['drivetrain_id'];
        $car->transmission_id = $data['transmission_id'];
        $car->fueltype_id = $data['fueltype_id'];
        $car->buildyear = $data['buildyear'];
        $car->body = $data['body'];
        $car->price = $data['price'];
        $car->save();

        $car->colors()->sync($data['carColors'], false);
        $this->dispatchBrowserEvent('notify', 'Car created Successfully!');

        $this->name = '';
        $this->brand_id = '';
        $this->drivetrain_id = '';
        $this->transmission_id = '';
        $this->fueltype_id = '';
        $this->buildyear = '';
        $this->body = '';
        $this->price = '';
        $this->avatar = '';
        $this->carColors = [];
    }

    public function render()
    {
        $this->brands = Brand::all();
        $this->drivetrains = Drivetrain::all();
        $this->transmissions = transmission::all();
        $this->fueltypes = Fueltype::all();
        $this->colors = Color::all();
        return view('livewire.cars.create',['brands'=>$this->brands, 'drivetrains'=>$this->drivetrains, 'transmissions'=>$this->transmissions, 'fueltypes'=>$this->fueltypes, 'colors'=>$this->colors]);
    }
}
