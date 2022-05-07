<?php

namespace App\Http\Livewire\Users;

use App\Models\Photo;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $name = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $rolesSelect = [];
    public $avatar;

    public function updatedEmail()
    {
        $this->validate(['email' => 'email|unique:users']);
    }

    public function updatedPasswordConfirmation()
    {
        $this->validate(['passwordConfirmation' => 'same:password']);
    }

    public function updatedName()
    {
        $this->validate(['name' => 'unique:users']);
    }

    public function create_user()
    {

        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'passwordConfirmation' => 'required|same:password',
            'rolesSelect' => 'required',
            'avatar'=>'image|max:5000',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->roles()->sync($data['rolesSelect'], false);

        if($file = $this->avatar){
            $name = time() . $file->getClientOriginalName();
            $file->storeAs('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $user->photos()->save($photo);
        }

        $this->emit('refreshUsers');
        $this->dispatchBrowserEvent('notify', 'User created Successfully!');

        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->passwordConfirmation = '';
        $this->rolesSelect = [];
        $this->avatar = null;
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.users.create', compact('roles'));
    }
}
