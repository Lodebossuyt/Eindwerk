<div>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
       @if(session('success_message'))
           <div class="alert">User Created</div>
        @endif
        <div class="form-group py-2">
            <label for="user-name">Fullname:</label>
            <input type="text" class="form-control" id="user-name" placeholder="Enter Your Full Name" name="name">
        </div>
        <div class="form-group py-2">
            <label for="user-email">Email:</label>
            <input type="email" class="form-control" id="user-email" placeholder="Email" name="email">
        </div>
        <div class="form-group py-2">
            <label for="roles">Roles: (CTRL + click for multiple selects)</label>
            <select class="form-control" name="roles[]" id="roles" multiple>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group py-2">
            <label for="passwordfield">Password:</label>
            <input type="password" class="form-control" id="passwordfield" name="password">
        </div>
        <div class="form-group py-2">
            <label for="file">Upload photo:</label>
            <input type="file" class="form-control" id="file" name="file">
        </div>
        <button type="submit" class="btn btn-success my-2">Add User</button>
    </form>
</div>
