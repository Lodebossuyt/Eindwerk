<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class IndexUser extends Component
{
    public $users;

    protected $listeners = ['refreshUsers' => '$refresh'];

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $this->dispatchBrowserEvent('notify', 'User:' . $user->name . 'deleted Successfully!' );
        $user->delete();
        $this->users = User::all();
    }
    public function render()
    {
        $this->users = User::all();
        return view('livewire.users.index-user', ['users'=>$this->users])->extends('layouts.backend')->section('content');
    }
}
