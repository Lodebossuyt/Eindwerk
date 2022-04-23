<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;

class CreateUser extends Component
{
    public function render()
    {
        $roles = Role::all();
        return view('livewire.users.create-user', compact('roles'))->extends('layouts.backend')->section('content');
    }
}
