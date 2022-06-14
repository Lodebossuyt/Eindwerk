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

    public function delete_color($id){
        $color = Color::findOrfail($id);
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
