<div>
    <form wire:submit.prevent="update_car">
        <div class="mb-3">
            <label class="form-label" for="name">Name:</label>
            <input wire:model="name" class="form-control" type="text" id="name">
            <div>@error('name') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="roles">Brand:</label>
            <select wire:model="brand_id" class="form-control" id="roles">
                @foreach($brands as $brand)
                    <option wire:key="{{$loop->index}}"  value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
            <div>@error('brand_id') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="roles">Drivetrain:</label>
            <select wire:model="drivetrain_id" class="form-control" id="roles">
                @foreach($drivetrains as $drivetrain)
                    <option wire:key="{{$loop->index}}"  value="{{$drivetrain->id}}">{{$drivetrain->name}}</option>
                @endforeach
            </select>
            <div>@error('drivetrain_id') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="roles">Drivetrain:</label>
            <select wire:model="transmission_id" class="form-control" id="roles">
                @foreach($transmissions as $transmission)
                    <option wire:key="{{$loop->index}}"  value="{{$transmission->id}}">{{$transmission->name}}</option>
                @endforeach
            </select>
            <div>@error('transmission_id') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="roles">Fueltypes:</label>
            <select wire:model="fueltype_id" class="form-control" id="roles">
                @foreach($fueltypes as $fueltype)
                    <option wire:key="{{$loop->index}}"  value="{{$fueltype->id}}">{{$fueltype->name}}</option>
                @endforeach
            </select>
            <div>@error('fueltype_id') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="buildyear">Buildyear:</label>
            <input wire:model="buildyear" class="form-control" type="number" min="1900" max="2022" id="buildyear">
            <div>@error('buildyear') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="">Description:</label>
            <textarea class="form-control" wire:model="body" id="" cols="30" rows="10"></textarea>
            <div>@error('body') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Price:</label>
            <input wire:model="price" class="form-control" type="number" id="price">
            <div>@error('price') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="colors">Colors: (CTRL + click for multiple selects)</label>
            <select wire:model="carColors" class="form-control" id="colors" multiple>
                @foreach($colors as $color)
                    <option wire:key="{{$loop->index}}"  value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
            </select>
            <div>@error('carColors') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload multiple photos:</label>
            <input type="file" wire:model="photos" class="form-control" id="inputGroupFile01" multiple>
        </div>
        @if ($photos)
            Photo Previews: <br>
            @foreach($photos as $photo)
                <img class="img-thumbnail mb-3" src="{{ $photo->temporaryUrl() }}">
            @endforeach
        @endif
        <div>
            <input class="btn btn-success mb-3" type="submit" value="Update Car" data-bs-dismiss="modal">
        </div>
    </form>
</div>
