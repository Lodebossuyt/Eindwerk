<?php

namespace App\Http\Livewire\Color;

use App\Models\Color;
use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $color_id;

    protected $rules = [
        'name'=>'required|unique:colors'
    ];

    public function mount($color)
    {
        $this->name = $color->name;
        $this->color_id = $color->id;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update_color(){
        $color = Color::findOrFail($this->color_id);
        $color->name = $this->name;
        $color->update();

        $this->emit('refreshColors');

        //$this->emit('refreshCars');

        $this->dispatchBrowserEvent('notify', $color->name . ' updated Successfully!');
    }
    public function render()
    {
        return view('livewire.color.edit');
    }
}
