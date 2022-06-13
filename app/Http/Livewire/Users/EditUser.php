<?php

namespace App\Http\Livewire\Users;

use App\Http\Traits\PhotoTrait;
use App\Models\Photo;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUser extends Component
{
    use WithFileUploads;
    use PhotoTrait;

    public $user_id;
    public $name = '';
    public $email = '';
    //public $password = '';
    //public $passwordConfirmation = '';
    public $rolesSelect = [];
    public $oldphoto;
    public $avatar;

    protected $rules = [
        'rolesSelect' => 'required',
    ];

    public function mount($user){
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        //$this->password = $user->password;
        //$this->passwordConfirmation = $user->password;
        foreach($user->roles as $role){
            array_push($this->rolesSelect, $role->id);
        }
        $this->oldphoto = $user->photos;
        /*$this->rolesSelect = $user->roles;*/
    }


    public function update_user()
    {

        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'rolesSelect' => 'required',
        ]);

        $user = User::findOrfail($this->user_id);

        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $user->roles()->sync($data['rolesSelect'], true);

        if($file = $this->avatar){

            if($user->photos()->exists()){
                /**delete old**/
                Storage::disk('images')->delete($user->photos()->first()->file);
                $name = time() . $file->getClientOriginalName();
                $this->resizeThumbnail($file, $name);
                $photo = Photo::create(['file'=>$name]);
                Photo::where('file', '=', $user->photos()->first()->file)->delete();
                $user->photos()->sync($photo);
            }else{
                /**make or overwright with new**/
                $name = time() . $file->getClientOriginalName();
                $this->resizeThumbnail($file, $name);
                $photo = Photo::create(['file'=>$name]);
                $user->photos()->save($photo);
            }
        }

        $this->dispatchBrowserEvent('notify', 'User: ' . $user->name . ' updated Successfully!' );

        $this->emit('refreshUsers');
    }

    public function render()
    {
        return view('livewire.users.edit-user', ['roles'=>Role::all()]);
    }
}
