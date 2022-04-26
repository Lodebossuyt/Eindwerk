<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshBrands' => '$refresh'];

    protected $brands;

    public function deleteBrand($id){
        $brand = Brand::findOrfail($id);
       foreach($brand->cars as $car){
           $car->brand_id = NULL;
           $car->update();
       }
        $this->dispatchBrowserEvent('notify', $brand->name . ' Deleted Successfully!');
        $brand->delete();
        $this->brands = Brand::paginate(5, ['*'], 'brandpagination');
    }


    public function render()
    {
        $this->brands = Brand::paginate(5, ['*'], 'brandpagination');
        return view('livewire.brand.index', ['brands'=>$this->brands]);
    }
}
