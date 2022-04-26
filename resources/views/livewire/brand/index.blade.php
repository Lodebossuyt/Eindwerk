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
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>
                <a data-bs-toggle="collapse" href="#collapseExample{{$brand->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    {{$brand->name}}
                </a>
                <div class="collapse" id="collapseExample{{$brand->id}}">
                    <div class="card card-body">
                       @livewire('brand.edit', ['brand'=>$brand], key($brand->id))
                    </div>
                </div>
            </td>
            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
            <td>
                <button type="button" wire:click="deleteBrand({{$brand->id}})" class="btn btn-danger m-1"><i class="fa-solid fa-trash-can"></i></button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$brands->links()}}
</div>
