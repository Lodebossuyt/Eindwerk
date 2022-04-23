<div>
    <h1>User Create</h1>
    <form wire:submit.prevent="create_user">
        <div class="mb-3">
            <label class="form-label" for="name">Name:</label>
            <input wire:model="name" class="form-control" type="text" id="name">
            @error('name') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email:</label>
            <input wire:model="email" class="form-control" type="text" id="email">
            @error('email') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password:</label>
            <input wire:model.lazy="password" class="form-control" type="password" id="password">
            @error('password') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="passwordConfirmation">ConfirmPassword:</label>
            <input wire:model="passwordConfirmation" class="form-control" type="password" id="passwordConfirmation">
            @error('passwordConfirmation') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="roles">Roles: (CTRL + click for multiple selects)</label>
            <select wire:model="rolesSelect" class="form-control" id="roles" multiple>
                @foreach($roles as $role)
                    <option  value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
            @error('rolesSelect') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" wire:model="avatar" class="form-control" id="inputGroupFile01">
        </div>
        @if ($avatar)
            Photo Preview: <br>
            <img class="img-thumbnail mb-3" src="{{ $avatar->temporaryUrl() }}">
        @endif
        <div>
            <input class="btn btn-success mb-3" type="submit" value="Create User">
        </div>
    </form>
</div>
