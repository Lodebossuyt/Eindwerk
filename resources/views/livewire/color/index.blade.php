<div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>id</th>
            <th>name (click for edit)</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($colors as $color)
            <tr>
                <td>{{$color->id}}</td>
                <td>
                    <a data-bs-toggle="collapse" href="#collapseExample{{$color->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                        {{$color->name}}
                    </a>
                    <div class="collapse" id="collapseExample{{$color->id}}">
                        <div class="card card-body">
                            @livewire('color.edit', ['color'=>$color], key($color->id))
                        </div>
                    </div>
                </td>
                <td>{{$color->created_at}}</td>
                <td>{{$color->updated_at}}</td>
                <td>
                    <button type="button" wire:click="delete_color({{$color->id}})" class="btn btn-danger m-1"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$colors->links()}}
</div>
