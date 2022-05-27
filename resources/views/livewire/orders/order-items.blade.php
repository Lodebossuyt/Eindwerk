<div>
    <div class="row row-cols-3 g-2">
            @foreach($order->orderitems as $orderitem)
                <div>
                    <div class="card col">
                        <img src="http://via.placeholder.com/400x200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Name: {{$orderitem->car->name}}</h5>
                            <p class="card-text mb-2">Price: {{$orderitem->price}}</p>
                            <p class="card-text mb-2">Amount: {{$orderitem->amount}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>


</div>
