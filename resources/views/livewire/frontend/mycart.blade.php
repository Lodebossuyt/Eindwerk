<div>
    <main>
        <h1 class="d-none">Mycart</h1>
        <!--MODAL CONTENT-->
        @include('includes.modal')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto pt-3">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white-50 NotoRe"
                                                           href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50 text-decoration-none NotoRe"
                                aria-current="page">Account
                            </li>
                            <li class="breadcrumb-item active text-white text-decoration-none NotoRe"
                                aria-current="page">My cart
                            </li>
                        </ol>
                    </nav>
                    <h2 class="text-white NotoBo display-5">My Cart</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-white NotoBo fs-3">Cars</p>
                        <a href="{{route('webshop')}}" class="text-decoration-none">
                            <p class="text-white-50 hover-text-white-50"><u><i class="bi bi-arrow-left pe-1"></i>Continue
                                    shopping</u></p>
                        </a>
                    </div>
                    <div class="row pb-4 flex-column flex-lg-row">
                        <div id="cartProducts" class="col-lg-8 order-2 order-lg-1">
                            <div id="cartItems">
                                @if($cart)
                                    @foreach($cart as $car)
                                        <div class="card bg-licht text-white-50 mb-3 px-0 rounded-lb2">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="{{$car['product']->photos->isNotEmpty() ? asset('images/' . $car['product']->photos()->first()->file) : "http://via.placeholder.com/200"}}"
                                                         class="rounded-lb-left2 img-fluid img-cover" alt="auto">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body d-flex flex-column">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="NotoRe">{{$car['product']->buildyear}}</p>
                                                            <button wire:click="removeItem({{$car['product_id']}})" type="button" class="btn-close btn-close-white"></button>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h3 class=" fs-5 card-title NotoBo">{{$car['product']->name . ' ' . $car['product']->brand->name}}</h3>
                                                                @livewire('frontend.component.updatequantity', ['car'=>$car] , key($car['product']->id))
                                                        </div>

                                                        <p class="card-text NotoRe text-danger">{{$car['product']->price}}</p>
                                                        <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>Kortrijk
                                                        </p>
                                                        <hr class="mt-auto">
                                                        <div class="infowrap">
                                                            <div class="row row-cols-3 g-2 text-white">
                                                                <div class="col text-center">
                                                                    <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                        <i class="bi bi-speedometer"></i>
                                                                        <p>{{$car['product']->bodytype->name}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                        <i class="bi bi-bezier2"></i>
                                                                        <p>{{$car['product']->transmission->name}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col text-center">
                                                                    <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                        <i class="bi bi-droplet"></i>
                                                                        <p>{{$car['product']->fueltype->name}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            @endif
                            <!--                                <div class="card bg-licht text-white-50 mb-3 px-0 rounded-lb2">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="images/09%20(1).jpg" class="rounded-lb-left2 img-fluid img-cover" alt="auto">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <p class="NotoRe">1995</p>
                                                    <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                                                </div>
                                                <h3 class=" fs-5 card-title NotoBo">Ford Truck Lifted</h3>
                                                <p class="card-text NotoRe text-danger">$24,000</p>
                                                <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>Chicago</p>
                                                <hr class="mt-auto">
                                                <div class="infowrap">
                                                    <div class="row row-cols-3 g-2 text-white">
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                <i class="bi bi-speedometer"></i>
                                                                <p>48K mi</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                <i class="bi bi-bezier2"></i>
                                                                <p>Automatic</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                <i class="bi bi-droplet"></i>
                                                                <p>Gasoline</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-licht text-white-50 mb-3 px-0 rounded-lb2">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="images/09%20(1).jpg" class="rounded-lb-left2 img-fluid img-cover" alt="auto">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <p class="NotoRe">1995</p>
                                                    <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                                                </div>
                                                <h3 class=" fs-5 card-title NotoBo">Ford Truck Lifted</h3>
                                                <p class="card-text NotoRe text-danger">$24,000</p>
                                                <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>Chicago</p>
                                                <hr class="mt-auto">
                                                <div class="infowrap">
                                                    <div class="row row-cols-3 g-2 text-white">
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                <i class="bi bi-speedometer"></i>
                                                                <p>48K mi</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                <i class="bi bi-bezier2"></i>
                                                                <p>Automatic</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-lb pt-2 pb-1">
                                                                <i class="bi bi-droplet"></i>
                                                                <p>Gasoline</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div id="cartPrice" class="col-lg-4 order-1 order-lg-2 pb-3">
                            @livewire('frontend.ordertotal')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
