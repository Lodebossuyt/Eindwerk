<?php

namespace App\Http\Livewire\Color;

use App\Models\Color;
use Livewire\Component;

class Create extends Component
{
    public $name;

    protected $rules = [
        'name'=>'required|unique:colors'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function create_color(){



        $color = new Color();
        $color->name = $this->name;
        $color->save();

        $this->emit('refreshColors');

        $this->name = '';

        $this->dispatchBrowserEvent('notify', $color->name . ' Created Successfully!');
    }
    public function render()
    {
        return view('livewire.color.create');
    }
}
