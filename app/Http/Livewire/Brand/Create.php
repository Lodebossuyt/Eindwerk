<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class Create extends Component
{
    public $name;

    protected $rules = [
        'name'=>'required|unique:brands'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function create_brand(){



        $brand = new Brand();
        $brand->name = $this->name;
        $brand->save();

        $this->emit('refreshBrands');
        $this->emit('refreshCars');

        $this->name = '';

        $this->dispatchBrowserEvent('notify', $brand->name . ' Created Successfully!');
    }

    public function render()
    {
        return view('livewire.brand.create');
    }
}
