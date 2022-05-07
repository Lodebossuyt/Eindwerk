<div>
    <div class="d-flex mb-3">
        <h1>Users</h1>
        <button class="btn btn-primary ms-2" data-bs-toggle="modal"
                data-bs-target="#exampleModalUser">Create User
        </button>
    </div>

    <div class="modal fade" id="exampleModalUser" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('users.create')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>photo</th>
            <th>name</th>
            <th>email</th>
            <th>roles</th>
            <th>is_active</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr wire:key="{{$loop->index}}">
                    <th>{{$user->id}}</th>
                    <th>
                        @if($user->photos->isnotempty())
                            <img class="img-thumbnail" width="100px"
                                 src="{{$user->photos->first() ? asset('/images/' . $user->photos->first()->file) : "http://via.placeholder.com/100"}}"
                                 alt="{{$user->name}}">
                        @else
                            <img src="http://via.placeholder.com/100x50" alt="placeholderfoto">
                        @endif


                    </th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>
                        @foreach($user->roles as $role)
                            <span class="badge bg-success">{{$role->name}}</span>
                        @endforeach
                    </th>
                    <th>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</th>
                    <th>{{$user->created_at}}</th>
                    <th>{{$user->updated_at}}</th>
                    <th>
                        <button class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{$user->id}}"><i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" wire:click="deleteUser({{$user->id}})" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </th>
                </tr>

                <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit {{$user->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @livewire('users.edit-user', ['user'=>$user], key($user->id))
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <tr>
                <th colspan="8">
                    Geen Users gevonden!
                </th>
            </tr>
        @endif
        </tbody>
    </table>
    <div>
        {{ $users->links()}}
    </div>

</div>
