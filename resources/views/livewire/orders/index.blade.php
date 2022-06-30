<div>
    <div class="d-flex mb-3">
        <h1>Orders</h1>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>User</th>
            <th>Transactioncode</th>
            <th>shippingaddress</th>
            <th>billingaddress</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>OrderDetails</th>
        </tr>
        </thead>

        <tbody>
        @if($orders)
            @foreach($orders as $order)
                <tr wire:key="{{$loop->index}}">
                    <th>{{$order->id}}</th>
                    <th>{{$order->user ? $order->user->name : 'Gebruiker verwijdert'}}</th>
                    <th>{{$order->transactioncode}}</th>
                    <th>{{$order->shippingadress}}</th>
                    <th>{{$order->billingadress}}</th>
                    <th>{{$order->created_at}}</th>
                    <th>{{$order->updated_at}}</th>
                    <th>
                        <button class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{$order->id}}"><i class="fa-solid fa-eye"></i>
                        </button>
                    </th>
                </tr>

                <div class="modal fade" id="exampleModal{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Orderdetails</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    @livewire('orders.order-items',  ['order'=>$order], key($order->id))
                                </div>
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
        {{ $orders->links()}}
    </div>
</div>
