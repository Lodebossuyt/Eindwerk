<div>
    <main>
        <!--MODAL CONTENT-->
        @include('includes.modal')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto pt-3">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white-50 NotoRe"
                                                           href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50 text-decoration-none NotoRe"
                                aria-current="page">Account
                            </li>
                            <li class="breadcrumb-item active text-white-50 text-decoration-none NotoRe"
                                aria-current="page"><a class="text-decoration-none text-white-50 NotoRe"
                                                       href="mycart.html">My cart</a>
                            </li>
                            <li class="breadcrumb-item active text-white text-decoration-none NotoRe" aria-current="page">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                    <h2 class="text-white NotoBo display-5">Checkout</h2>
                    <div class="row pb-4">
                        <div id="Checkout" class="col-md-8 order-2 order-md-1">
                            <div id="CheckoutForm" class="bg-licht rounded-lb2 p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-white NotoBo fs-3">Delivery Address</p>
                                    <a href="webshop.html" class="text-decoration-none">
                                        <p class="text-white-50 hover-text-white-50"><u><i
                                                    class="bi bi-house-door pe-1"></i>Saved addresses</u></p>
                                    </a>
                                </div>
                                <form class="row p-2">
<!--                                    <input class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                           type="text" name="first_name" placeholder="firstname">
                                    <input class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                           type="text" name="last_name" placeholder="lastname">-->
                                    <input wire:model="shippingAddress" class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                           type="text" name="address" placeholder="Address">
                                    <div>@error('shippingAddress') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
<!--                                    <input class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                           type="text" name="aptsuite" placeholder="Apt, suite, etc. (optional)">-->
                                    <input wire:model="shippingCity" class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                           type="text" name="city" placeholder="city">
                                    <div>@error('shippingCity') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>

                                    <div class="d-flex p-0 mb-2">
                                        <div class="w-100">
                                            <input wire:model="shippingCountry" class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                                   type="text" name="country" placeholder="country">
                                            <div>@error('shippingCountry') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
                                        </div>
                                       <div class="w-100">
                                           <input wire:model="shippingZipcode" class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                                  type="text" name="zip" placeholder="zip">
                                           <div>@error('shippingZipcode') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
                                       </div>
                                    </div>
<!--                                    <select class="NotoRe text-white-50 px-2 border-lb rounded-3 w-100 py-2">
                                        <option>Year</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>-->
                                </form>
                            </div>
                            <div id="checkoutDeliveryOptions" class="bg-licht rounded-lb2 p-3 my-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-white NotoBo fs-3">Billing Address</p>
                                    <a href="webshop.html" class="text-decoration-none">
<!--                                        <p class="text-white-50 hover-text-white-50"><u><i
                                                    class="bi bi-house-door pe-1"></i>Saved addresses</u></p>-->
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <p class="NotoRe text-white m-0">Standard</p>
                                        <p class="NotoRe text-white-50 m-0">Billing address same as Shipping address</p>
                                    </div>
                                    <div class="form-check">
                                        <input wire:model="addressType" value="true" class="form-check-input" type="radio" name="flexRadioDefault"
                                               id="flexRadioDefault1">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="NotoRe text-white m-0">Express</p>
                                        <p class="NotoRe text-white-50 m-0">Different Billing address</p>
                                    </div>
                                    <div class="form-check">
                                        <input wire:model="addressType" value="false" class="form-check-input" type="radio" name="flexRadioDefault"
                                               id="flexRadioDefault2">
                                    </div>
                                </div>
                                @if($addressType == 'false')
                                    <form class="row p-2">
                                        <!--                                    <input class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                                                                   type="text" name="first_name" placeholder="firstname">
                                                                            <input class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                                                                   type="text" name="last_name" placeholder="lastname">-->
                                        <input wire:model="billingAddress" class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                               type="text" name="address" placeholder="Address">
                                        <div>@error('billingAddress') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
                                        <!--                                    <input class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                                                                   type="text" name="aptsuite" placeholder="Apt, suite, etc. (optional)">-->
                                        <input wire:model="billingCity" class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                               type="text" name="city" placeholder="city">
                                        <div>@error('billingCity') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
                                        <div class="d-flex p-0 mb-2">
                                            <div class="w-100">
                                                <input wire:model="billingCountry" class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                                       type="text" name="country" placeholder="country">
                                                <div>@error('billingCountry') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
                                            </div>
                                            <div class="w-100">
                                                <input wire:model="billingZipcode" class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                                       type="text" name="zip" placeholder="zip">
                                                <div>@error('billingZipcode') <div class="alert alert-danger p-2 my-2">{{$message}}</div> @enderror</div>
                                            </div>
                                        </div>
                                        <!--                                    <select class="NotoRe text-white-50 px-2 border-lb rounded-3 w-100 py-2">
                                                                                <option>Year</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                            </select>-->
                                    </form>
                                @endif
                            </div>
<!--                            <div id="checkoutPayment" class="bg-licht rounded-lb2 p-3 my-3">
                                <p class="text-white NotoBo fs-3">Payment</p>
                                <form class="row p-2">
                                    <select class="NotoRe text-white-50 px-2 border-lb rounded-3 w-100 py-2 mb-2">
                                        <option>Credit/Debit card</option>
                                        <option>paypal</option>
                                    </select>
                                    <input class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-2"
                                           type="text" name="cardnumber" placeholder="Card Number">
                                    <div class="d-flex p-0 mb-2">
                                        <input class="form-control bg-transparent rounded-3 border-lb text-white-50 NotoRe"
                                               type="text" name="expirydate" placeholder="Expiry date (MM/YY)">
                                        <input class="form-control bg-transparent rounded-3 border-lb text-white-50 NotoRe"
                                               type="text" name="cvv" placeholder="CVV">
                                    </div>
                                    <input class="form-control w-100 bg-transparent rounded-3 border-lb text-white-50 NotoRe mb-3"
                                           type="text" name="cardname" placeholder="Name on card">
                                    <p class="text-white NotoRe ps-0 m-0">We accept</p>
                                    <ul class="d-flex text-white list-unstyled ps-0">
                                        <li><img src="{{asset('images2/visa-1.svg')}}" class="me-2" alt="Image"></li>
                                        <li><img src="{{asset('images2/master-card-1.svg')}}" class="me-2" alt="Image"></li>
                                        <li><img src="{{asset('images2/amex-1.svg')}}" alt="Image"></li>
                                    </ul>
                                </form>
                            </div>-->
                            <div id="checkoutbutton" class="bg-licht rounded-lb2 p-3 my-3">
                                <button wire:click="preparePayment" class="btn btn-danger text-white NotoBo w-100 mb-3">Place Order</button>
                                @if(Session::has('noItems'))
                                    <div class="alert alert-danger p-2 my-2">{{session('noItems')}}</div>
                                @endif
                                <p class="NotoRe fs-7 text-white-50">By placing your order you agree to our Terms & Conditions, privacy and returns policies. You also consent to some of your data being stored by SHOPY, which may be used to make future shopping experiences better for you.</p>
                            </div>
                        </div>
                        <div id="cartPrice" class="col-md-4 order-1 order-md-2 pb-3">
                           @livewire('frontend.ordertotal')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
