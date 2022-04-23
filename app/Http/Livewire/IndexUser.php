<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class IndexUser extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.users.index-user', compact('users'))->extends('layouts.backend')->section('content');
    }
}
