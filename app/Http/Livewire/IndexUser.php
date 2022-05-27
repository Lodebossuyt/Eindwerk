<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUser extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $users;

    protected $listeners = ['refreshUsers' => '$refresh'];

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $this->dispatchBrowserEvent('notify', 'User:' . $user->name . 'deleted Successfully!' );
        $user->delete();
        $this->users = User::paginate(10);
        //$this->resetPage();
    }
    public function render()
    {
        $this->users = User::with('photos', 'roles')->paginate(10);
        return view('livewire.users.index-user', ['users'=>$this->users])->extends('layouts.backend')->section('content');
    }
}
