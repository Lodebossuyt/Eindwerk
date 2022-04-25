<div>
    <div class="d-flex mb-2">
        <h1>Cars</h1>
        <button class="btn btn-primary ms-2" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Create Car
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Car</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @livewire('cars.create')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>photo's</th>
            <th>name</th>
            <th>brand</th>
            <th>drivetrain</th>
            <th>transmission</th>
            <th>fueltype</th>
            <th>buildyear</th>
            <th>body</th>
            <th>price</th>
            <th>colors</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        @if($cars)
            @foreach($cars as $car)
                <tr wire:key="{{$loop->index}}">
                    <th>{{$car->id}}</th>
                    <th>
                        @if($car->photos->isnotempty())
                            <img class="img-thumbnail" width="100px"
                                 src="{{$car->photos->first() ? asset('/images/' . $car->photos->first()->file) : "http://via.placeholder.com/100"}}"
                                 alt="{{$car->name}}">
                        @else
                            <img src="http://via.placeholder.com/100x50" alt="placeholderfoto">
                        @endif


                    </th>
                    <th>{{$car->name}}</th>
                    <th>{{$car->brand->name}}</th>
                    <th>{{$car->drivetrain->name}}</th>
                    <th>{{$car->transmission->name}}</th>
                    <th>{{$car->fueltype->name}}</th>
                    <th>{{$car->buildyear}}</th>
                    <th>{{$car->body}}</th>
                    <th>&euro; {{$car->price}}</th>
                    <th>
                        @foreach($car->colors as $color)
                            <span class="badge bg-success">{{$color->name}}</span>
                        @endforeach
                    </th>
                    <th>{{$car->created_at}}</th>
                    <th>{{$car->updated_at}}</th>
                    <th>
                        <button class="btn btn-warning m-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{$car->id}}"><i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" wire:click="deleteCar({{$car->id}})" class="btn btn-danger m-1"><i class="fa-solid fa-trash-can"></i></button>
                    </th>
                </tr>

                <div class="modal fade" id="exampleModal{{$car->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit {{$car->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                EDIT FORM HIER
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
        {{ $cars->links() }}
    </div>

</div>
