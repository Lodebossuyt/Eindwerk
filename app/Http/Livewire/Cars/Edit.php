<?php

namespace App\Http\Livewire\Cars;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\Drivetrain;
use App\Models\Fueltype;
use App\Models\Photo;
use App\Models\Transmission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    protected $brands;
    protected $drivetrains;
    protected $transmissions;
    protected $fueltypes;
    protected $colors;

    public $car_id;
    public $name;
    public $brand_id;
    public $drivetrain_id;
    public $transmission_id;
    public $fueltype_id;
    public $buildyear;
    public $body;
    public $price;
    public $photos;
    public $oldphotos;
    public $carColors = [];

    public function mount($car)
    {
        $this->car_id = $car->id;
        $this->name = $car->name;
        $this->brand_id = $car->brand_id;
        $this->drivetrain_id = $car->drivetrain_id;
        $this->transmission_id = $car->transmission_id;
        $this->fueltype_id = $car->fueltype_id;
        $this->buildyear = $car->buildyear;
        $this->body = $car->body;
        $this->price = $car->price;
        //$this->password = $user->password;
        //$this->passwordConfirmation = $user->password;
        foreach ($car->colors as $color) {
            array_push($this->carColors, $color->id);
        }
        $this->oldphotos = $car->photos;
        /*$this->rolesSelect = $user->roles;*/
    }

    public function update_car()
    {

        $car = Car::findOrfail($this->car_id);

        $data = $this->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'drivetrain_id' => 'required',
            'transmission_id' => 'required',
            'fueltype_id' => 'required',
            'buildyear' => 'required',
            'body' => 'required',
            'price' => 'required',
            'carColors' => 'required',
            //'avatar'=>'required|image|max:5000',
        ]);

        $car->name = $data['name'];
        $car->brand_id = $data['brand_id'];
        $car->drivetrain_id = $data['drivetrain_id'];
        $car->transmission_id = $data['transmission_id'];
        $car->fueltype_id = $data['fueltype_id'];
        $car->buildyear = $data['buildyear'];
        $car->body = $data['body'];
        $car->price = $data['price'];
        $car->update();

        $car->colors()->sync($data['carColors'], true);

        if ($this->photos) {

            if ($car->photos()->exists()) {
                /**delete old**/
                foreach ($car->photos as $photo) {
                    Storage::disk('images')->delete($photo->file);
                    Photo::where('file', $photo->file)->delete();
                }
                $car->photos()->detach();
                /**make new photos**/
                foreach ($this->photos as $newphoto) {
                    $name = time() . $newphoto->getClientOriginalName();
                    $newphoto->storeAs('images', $name);
                    $photo = Photo::create(['file' => $name]);
                    $car->photos()->save($photo);
                }

            } else {
                foreach ($this->photos as $photo) {
                    $name = time() . $photo->getClientOriginalName();
                    $photo->storeAs('images', $name);
                    $photodatabase = Photo::create(['file' => $name]);
                    $car->photos()->save($photodatabase);
                }
            }
        }

        $this->dispatchBrowserEvent('notify', $car->name . ' updated Successfully!');

        $this->emit('refreshCars');
    }

    public function render()
    {
        $this->brands = Brand::all();
        $this->drivetrains = Drivetrain::all();
        $this->transmissions = transmission::all();
        $this->fueltypes = Fueltype::all();
        $this->colors = Color::all();

        return view('livewire.cars.edit', ['brands' => $this->brands, 'drivetrains' => $this->drivetrains, 'transmissions' => $this->transmissions, 'fueltypes' => $this->fueltypes, 'colors' => $this->colors]);
    }
}
