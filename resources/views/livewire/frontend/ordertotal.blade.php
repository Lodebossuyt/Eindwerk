<div>
    <div class="bg-licht rounded-lb2 pt-1">
        <div class="p-3">
            <p class="fs-4 text-white NotoRe">
                Order total
            </p>
            <div class="input-group mb-3">
                <input type="text"
                       class="form-control bg-transparent border-lb text-white-50 NotoRe"
                       placeholder="Promo code" aria-label="Recipient's username"
                       aria-describedby="button-addon2">
                <button class="btn bg-transparent border-lb text-white NotoRe" type="button"
                        id="button-addon2">APPLY
                </button>
            </div>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-0 text-white">
                    Items
                    <span>{{Session::has('cart') ? Session::get('cart')->totalQuantity : '0'}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-0 text-white">
                    Shipping
                    <span>&euro; 0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-red bg-transparent border-0 text-white">
                    Discount
                    <span class="text-red">- &euro; 0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold bg-transparent border-0 text-white">
                    Total to pay
                    <span>&euro; {{Session::has('cart') ? Session::get('cart')->totalPrice : '0'}}</span>
                </li>
            </ul>
            @if(!Route::currentRouteNamed('checkout'))
                <a href="{{route('checkout')}}" class="btn btn-danger w-100 NotoBo text-white">Checkout</a>
            @endif

        </div>
    </div>
</div>
