<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $brand_id;

    protected $rules = [
        'name'=>'required|unique:brands'
    ];

    public function mount($brand)
    {
        $this->name = $brand->name;
        $this->brand_id = $brand->id;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update_brand(){
        $brand = Brand::findOrFail($this->brand_id);
        $brand->name = $this->name;
        $brand->update();

        $this->emit('refreshBrands');

        $this->dispatchBrowserEvent('notify', $brand->name . ' updated Successfully!');
    }

    public function render()
    {
        return view('livewire.brand.edit');
    }
}
