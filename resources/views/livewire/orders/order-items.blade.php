<div>
    <div class="row row-cols-3 g-2">
            @foreach($order->orderitems as $orderitem)
                <div>
                    <div class="card col">
                        <img src="{{$orderitem->car->photos->isnotempty() ? asset('images/' . $orderitem->car->photos->first()->file) : "http://via.placeholder.com/800x400"}}" class="card-img-top img-gluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$orderitem->car->name}}</h5>
                            <p class="card-text mb-2">Price: {{$orderitem->price}}</p>
                            <p class="card-text mb-2">Amount: {{$orderitem->amount}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>
