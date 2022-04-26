<div>
    <form wire:submit.prevent="update_color">
        <div class="input-group mb-3">
            <input wire:model="name" type="text" class="form-control" placeholder="Brand name..." aria-describedby="button-addon2">
            <button class="btn btn-outline-primary" type="submit" id="button-addon2">Edit Color</button>
        </div>
        <div>@error('name') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
    </form>
</div>
