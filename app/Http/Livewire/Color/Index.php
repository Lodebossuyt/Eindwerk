<?php

namespace App\Http\Livewire\Color;

use App\Models\Color;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshColors' => '$refresh'];

    protected $colors;

    public function deleteBrand($id){
        $color = Color::findOrfail($id);
       /* foreach($color->cars as $car){
            $car->brand_id = NULL;
            $car->update();
        }*/
        $this->dispatchBrowserEvent('notify', $color->name . ' Deleted Successfully!');
        $color->delete();
        $this->colors = Color::paginate(5, ['*'], 'colorpagination');
    }
    public function render()
    {
        $this->colors = Color::paginate(5, ['*'], 'colorpagination');
        return view('livewire.color.index', ['colors'=>$this->colors]);
    }
}
