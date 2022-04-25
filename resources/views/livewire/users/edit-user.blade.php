<div>
    <form wire:submit.prevent="update_user">
        <div class="mb-3">
            <label class="form-label" for="name">Name:</label>
            <input wire:model="name" class="form-control" type="text" id="name">
           <div>@error('name') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email:</label>
            <input wire:model="email" class="form-control" type="text" id="email">
           <div>@error('email') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="roles">Roles: (CTRL + click for multiple selects)</label>
            <select wire:model="rolesSelect" class="form-control" id="roles" multiple>
                @foreach($roles as $role)
                    <option  value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
           <div>@error('rolesSelect') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" wire:model="avatar" class="form-control" id="inputGroupFile01">
        </div>
        @if ($avatar)
            Photo Preview: <br>
            <img class="img-thumbnail mb-3" src="{{ $avatar->temporaryUrl() }}">
        @else
            @if($oldphoto)
                @foreach($oldphoto as $photo)
                    <img class="img-thumbnail" src="{{$photo ? asset('/images/' . $photo->file) : "http://via.placeholder.com/100"}}" alt="">
                @endforeach
            @else
                <img src="http://via.placeholder.com/100x50" alt="placeholderfoto">
            @endif
        @endif
        <div>@error('avatar') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        <div>
            <input class="btn btn-success mb-3" type="submit" data-bs-dismiss="modal" value="Update User">
        </div>
    </form>
</div>
