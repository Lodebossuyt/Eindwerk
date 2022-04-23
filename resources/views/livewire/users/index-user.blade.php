<div>
    <h1>Users</h1>
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
        </tr>
        </thead>

        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <th>{{$user->photo_id}}</th>
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
                </tr>
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
</div>
