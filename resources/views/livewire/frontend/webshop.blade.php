<div>
    <main>
        <!--MODAL CONTENT-->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggle"
             tabindex="-1">
            <div class="modal-dialog modal-fullscreen-md-down modal-lg p-2 modal-dialog-centered"
                 style="max-width: 950px">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-end">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"
                                        data-bs-dismiss="modal"></button>
                            </div>

                            <div class="row">
                                <div class="col-md-6 border-modal-rechts p-5">
                                    <header><h2 class="text-white fs-3 mb-4 mb-sm-5">Hey there! <br> Welcome back.</h2>
                                    </header>
                                    <img src="{{asset('images2/signin-dark.svg')}}" class="img-fluid" alt="sign in pic">
                                    <div class="d-flex flex-wrap mt-4 mt-sm-5">
                                        <p class="text-white-50 pe-2">Don't have an account?</p>
                                        <a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                           class="text-white" href="#">Sign up here</a>
                                    </div>
                                </div>
                                <div class="col-md-6 p-5">
                                    <a class="btn btn-outline-primary w-100 NotoBo p-2 mb-3" href="#"><i
                                            class="bi bi-google pe-2"></i>Sign in with Google</a>
                                    <a class="btn btn-outline-primary w-100 NotoBo p-2 mb-3" href="#"><i
                                            class="bi bi-facebook pe-2"></i>Sign in with Facebook</a>
                                    <div class="d-flex align-items-center py-3 mb-3">
                                        <hr class="w-100 hr-light2">
                                        <p class="NotoRe text-white-50 px-3 m-0">Or</p>
                                        <hr class="w-100 hr-light2">
                                    </div>
                                    <form class="signinform">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label text-white NotoRe">Email
                                                address</label>
                                            <input type="email" class="form-control bg-licht text-white-50 NotoRe p-2"
                                                   id="exampleInputEmail2" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword" class="form-label text-white NotoRe">Password</label>
                                            <input type="password"
                                                   class="form-control bg-licht text-white-50 NotoRe p-2"
                                                   id="exampleInputPassword" placeholder="Enter password">
                                        </div>
                                        <button type="submit" class="btn btn-danger NotoBo rounded-3 w-100 py-2">Sign
                                            in
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggle2"
             tabindex="-1">
            <div class="modal-dialog modal-fullscreen-md-down modal-lg p-2 modal-dialog-centered"
                 style="max-width: 950px">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-end">
                                <button type="button" class="btn-close btn-close-white" aria-label="Close"
                                        data-bs-dismiss="modal"></button>
                            </div>

                            <div class="row">
                                <div class="col-md-6 border-modal-rechts p-5">
                                    <header><h2 class="text-white fs-3 mb-4 mb-sm-5">Join Finder. <br> Get premium
                                            benefits:</h2></header>
                                    <p class="text-white NotoRe"><i class="bi bi-check-circle text-danger pe-2"></i>Add
                                        and promote your listings</p>
                                    <p class="text-white NotoRe"><i class="bi bi-check-circle text-danger pe-2"></i>Easily
                                        manage your wishlist</p>
                                    <p class="text-white NotoRe"><i class="bi bi-check-circle text-danger pe-2"></i>Leave
                                        reviews</p>
                                    <img src="{{asset('images2/signup-dark.svg')}}" class="img-fluid" alt="sign in pic">
                                    <div class="d-flex flex-wrap mt-4 mt-sm-5">
                                        <p class="text-white-50 pe-2">Already have an account?</p>
                                        <a class="text-white" data-bs-target="#exampleModalToggle"
                                           data-bs-toggle="modal" href="#">Sign in</a>
                                    </div>
                                </div>
                                <div class="col-md-6 p-5">
                                    <a class="btn btn-outline-primary w-100 NotoBo p-2 mb-3" href="#"><i
                                            class="bi bi-google pe-2"></i>Sign in with Google</a>
                                    <a class="btn btn-outline-primary w-100 NotoBo p-2 mb-3" href="#"><i
                                            class="bi bi-facebook pe-2"></i>Sign in with Facebook</a>
                                    <div class="d-flex align-items-center py-3 mb-3">
                                        <hr class="w-100 hr-light2">
                                        <p class="NotoRe text-white-50 px-3 m-0">Or</p>
                                        <hr class="w-100 hr-light2">
                                    </div>
                                    <form class="signinform">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail3" class="form-label text-white NotoRe">Full
                                                name</label>
                                            <input type="email" class="form-control bg-licht text-white-50 NotoRe p-2"
                                                   id="exampleInputEmail3" placeholder="Enter your full name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label text-white NotoRe">Email
                                                address</label>
                                            <input type="email" class="form-control bg-licht text-white-50 NotoRe p-2"
                                                   id="exampleInputEmail1" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label text-white NotoRe">Password
                                                <span class="text-white-50">min.8 char</span></label>
                                            <input type="password"
                                                   class="form-control bg-licht text-white-50 NotoRe p-2"
                                                   id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword2" class="form-label text-white NotoRe">Password</label>
                                            <input type="password"
                                                   class="form-control bg-licht text-white-50 NotoRe p-2"
                                                   id="exampleInputPassword2">
                                        </div>
                                        <div class="form-check mb-4 NotoRe">
                                            <input class="form-check-input bg-transparent" type="checkbox" value=""
                                                   id="flexCheckDefault">
                                            <label class="form-check-label text-white-50" for="flexCheckDefault">
                                                By joining, I agree to the <a class="text-white" href="">Terms of
                                                    use</a> and
                                                <a class="text-white" href="">Privacy policy.</a>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-danger NotoBo rounded-3 w-100 py-2">Sign
                                            in
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--catalogus-->
        <div id="catalogus" class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                    <div class="row">
                        <div id="catalogusFilters" class="d-none d-lg-flex flex-lg-column col-lg-3">
                            <!--                            <div id="catalogusNewused">
                                                            <ul class="nav nav-pills pb-4">
                                                                <li class="nav-item me-3">
                                                                    <a class="nav-link bg-licht text-white NotoRe" href="#">Search New</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link bg-white active text-danger NotoRe" aria-current="page"
                                                                       href="#">Search Used</a>
                                                                </li>
                                                            </ul>
                                                        </div>-->
                            <div id="catalogusSelection" class="py-4">
                                <h2 class="text-white NotoBo fs-5">Selection</h2>
                                @foreach($brandFilters as $brand)
                                    <button class="btn NotoRe text-white bg-licht rounded-pill me-1 my-1">{{$brand}}<i
                                            class="bi bi-x-lg ps-2"></i></button>
                                @endforeach
                                @foreach($bodytypeFilters as $bodytype)
                                    <button class="btn NotoRe text-white bg-licht rounded-pill me-1 my-1">{{$bodytype}}<i
                                            class="bi bi-x-lg ps-2"></i></button>
                                @endforeach
                                @foreach($drivetrainFilters as $drivetrain)
                                    <button class="btn NotoRe text-white bg-licht rounded-pill me-1 my-1">{{$drivetrain}}<i
                                            class="bi bi-x-lg ps-2"></i></button>
                                @endforeach
                                @foreach($fueltypeFilters as $fueltype)
                                    <button class="btn NotoRe text-white bg-licht rounded-pill me-1 my-1">{{$fueltype}}<i
                                            class="bi bi-x-lg ps-2"></i></button>
                                @endforeach
                                @foreach($transmissionFilters as $transmission)
                                    <button class="btn NotoRe text-white bg-licht rounded-pill me-1 my-1">{{$transmission}}<i
                                            class="bi bi-x-lg ps-2"></i></button>
                                @endforeach
                                @foreach($colorFilters as $color)
                                    <button class="btn NotoRe text-white bg-licht rounded-pill me-1 my-1">{{$color}}<i
                                            class="bi bi-x-lg ps-2"></i></button>
                                @endforeach
                            </div>
                            <!--                            <div id="catalogusLocation" class="py-4">
                                                            <h2 class="text-white NotoBo fs-5">Location</h2>
                                                            <select class="NotoRe bg-licht text-white-50 rounded-3 p-2 w-100">
                                                                <option>Select location</option>
                                                                <option>Chicago</option>
                                                                <option>Dallas</option>
                                                                <option>Los Angeles</option>
                                                            </select>
                                                        </div>-->
                            <div id="catalogusBrand" class="py-4">
                                <h2 class="text-white NotoBo fs-5">Brands</h2>
                                <div id="checkboxBodys" class="d-flex flex-column">
                                    @foreach($brands as $brand)
                                        <div>
                                            <input class="form-check-input bg-transparent" wire:model="brandFilters"
                                                   value="{{$brand->name}}" type="checkbox">
                                            <label class="form-check-label text-white NotoRe">{{$brand->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="catalogusBodyType" class="py-4">
                                <h2 class="text-white NotoBo fs-5">Body Type</h2>
                                <div id="checkboxBodys" class="d-flex flex-column">
                                    @foreach($bodytypes as $body)
                                        <div>
                                            <input class="form-check-input bg-transparent" wire:model="bodytypeFilters"
                                                   value="{{$body->name}}" type="checkbox">
                                            <label class="form-check-label text-white NotoRe">{{$body->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="catalogusYear" class="pb-4">
                                <h2 class="text-white NotoBo fs-5">Year</h2>
                                <div class="d-flex align-items-center">
                                    <select class="NotoRe bg-licht text-white-50 rounded-3 w-100">
                                        <option>From</option>
                                        <option>2022</option>
                                        <option>2021</option>
                                        <option>2020</option>
                                    </select>
                                    <div class="mx-2 px-2 border-bottom-lb"></div>
                                    <select class="NotoRe bg-licht text-white-50 rounded-3 w-100">
                                        <option>2022</option>
                                        <option>2021</option>
                                        <option>2020</option>
                                        <option>2019</option>
                                    </select>
                                </div>
                            </div>
                            <!--                            <div id="catalogusMake" class="pb-4">
                                                            <h2 class="text-white NotoBo fs-5">Make & Model</h2>
                                                            <select class="NotoRe bg-licht text-white-50 rounded-3 p-2 w-100 border-lb mb-2">
                                                                <option>Any make</option>
                                                                <option>2022</option>
                                                                <option>2021</option>
                                                                <option>2020</option>
                                                            </select>
                                                            <select class="NotoRe bg-licht text-white-50 rounded-3 p-2 w-100 border-lb">
                                                                <option>Any model</option>
                                                                <option>2021</option>
                                                                <option>2020</option>
                                                                <option>2019</option>
                                                            </select>
                                                        </div>-->
                            <div id="catalogusPrice" class="pb-4">
                                <h2 class="text-white NotoBo fs-5">Price</h2>
                                <div class="d-flex align-items-center">
                                    <input type="text"
                                           class="NotoRe bg-licht text-white-50 rounded-3 p-1 w-100 border-lb"
                                           placeholder="21000">
                                    <div class="mx-2 px-2 border-bottom-lb"></div>
                                    <input type="text"
                                           class="NotoRe bg-licht text-white-50 rounded-3 p-1 w-100 border-lb"
                                           placeholder="73000">
                                </div>
                            </div>
                            <div id="catalogusDrivetrain" class="py-4">
                                <h2 class="text-white NotoBo fs-5">Drivetrain</h2>
                                <div id="checkboxDrivetrain" class="d-flex flex-column">
                                    @foreach($drivetrains as $drivetrain)
                                        <div>
                                            <input wire:model="drivetrainFilters"
                                                   class="form-check-input bg-transparent border-lb"
                                                   value="{{$drivetrain->name}}" type="checkbox">
                                            <label class="text-white NotoRe">{{$drivetrain->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="catalogusFueltype" class="py-4">
                                <h2 class="text-white NotoBo fs-5">Fuel Type</h2>
                                <div id="checkboxFueltype" class="d-flex flex-column">
                                    @foreach($fueltypes as $fueltype)
                                        <div>
                                            <input wire:model="fueltypeFilters"
                                                   class="form-check-input bg-transparent border-lb" type="checkbox"
                                                   value="{{$fueltype->name}}">
                                            <label class="text-white NotoRe">{{$fueltype->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="catalogusTransmission" class="py-4">
                                <h2 class="text-white NotoBo fs-5">Transmission</h2>
                                <div id="checkboxTransmission" class="d-flex flex-column">
                                    @foreach($transmissions as $transmission)
                                        <div>
                                            <input wire:model="transmissionFilters"
                                                   class="form-check-input bg-transparent border-lb" type="checkbox"
                                                   value="{{$transmission->name}}">
                                            <label class="text-white NotoRe">{{$transmission->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--                            <div id="catalogusMileage" class="pb-4">
                                                            <h2 class="text-white NotoBo fs-5">Mileage</h2>
                                                            <div class="d-flex align-items-center">
                                                                <input type="text"
                                                                       class="NotoRe bg-licht text-white-50 rounded-3 p-1 w-100 border-lb"
                                                                       placeholder="From">
                                                                <div class="mx-2 px-2 border-bottom-lb"></div>
                                                                <input type="text"
                                                                       class="NotoRe bg-licht text-white-50 rounded-3 p-1 w-100 border-lb"
                                                                       placeholder="To">
                                                            </div>
                                                        </div>-->
                            <div id="catalogusColor" class="py-4">
                                <h2 class="text-white NotoBo fs-5">Color</h2>
                                <div id="checkboxColor" class="d-flex flex-column">
                                    @foreach($colors as $color)
                                        <div>
                                            <input wire:model="colorFilters"
                                                   class="form-check-input bg-transparent border-lb" type="checkbox"
                                                   value="{{$color->name}}">
                                            <label class="text-white NotoRe">{{$color->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <!--                                <div id="catalogusSellers" class="py-4">
                                                                    <h2 class="text-white NotoBo fs-5">Sellers</h2>
                                                                    <div id="checkboxSellers" class="d-flex flex-column">
                                                                        <div>
                                                                            <input class="form-check-input bg-transparent border-lb" type="checkbox"
                                                                                   id="DealersOnly">
                                                                            <label class="text-white NotoRe" for="DealersOnly">Dealers Only</label>
                                                                        </div>
                                                                        <div>
                                                                            <input class="form-check-input bg-transparent border-lb" type="checkbox"
                                                                                   id="PrivateSellersOnly">
                                                                            <label class="text-white NotoRe" for="PrivateSellersOnly">Private Sellers
                                                                                Only</label>
                                                                        </div>
                                                                    </div>
                                                                </div>-->
                            </div>
                        </div>
                        <div id="catalogusMain" class="col-12 col-lg-9 ps-4">
                            <div class="row">
                                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a class="text-decoration-none text-white-50 NotoRe"
                                                                       href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active text-white text-decoration-none NotoRe"
                                            aria-current="page">Cars
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="row pb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="text-white NotoBo display-5">Cars</h2>
                                    <p class="text-white NotoRe m-0"><i class="fas fa-car pe-2"></i> {{$cars->total()}}
                                        offers</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="text-white NotoRe pe-3 m-0"><i class="bi bi-arrow-down-up pe-2"></i> Sort
                                        by:</p>
                                    <select class="NotoRe bg-licht text-white-50 rounded-3 p-2 border-lb">
                                        <option>Newest</option>
                                        <option>Popular</option>
                                        <option>Price: Low - High</option>
                                        <option>Price: High - Low</option>
                                    </select>
                                    <!--                                    <div class="border-lb-right py-3 px-2 me-2"></div>
                                                                        <p class="text-white-50 NotoBo pe-3 m-0 fs-5"><i
                                                                                class="bi bi-arrow-left-right pe-2"></i> Compare (0)</p>-->
                                </div>
                            </div>
                            <div id="catalogusCarCards" class="row">
                                <div class="d-flex row row-cols-1 row-cols-md-2 g-3">
                                    @foreach($cars as $car)

                                        <div>
                                            <div class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
                                                <a href="{{route('detailpage', $car->slug)}}" class="img-hover"><img
                                                        src="{{$car->photos->isnotempty() ? asset('images/' . $car->photos->first()->file) : "http://via.placeholder.com/400x200"}}"
                                                        class="card-img-top rounded-lb-top"
                                                        alt="mercedes"></a>
                                                <div
                                                    class="showbadges w-100 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column p-2">
                                                        <span
                                                            class="badge bg-primary text-white fs-7 NotoRe fw-light rounded-3 w-75 mb-1">New</span>
                                                        <span
                                                            class="badge bg-success text-white fs-7 NotoRe fw-light rounded-3">Certified</span>
                                                    </div>
                                                    <button
                                                        class="showheart border-0 text-white circle-background rounded-circle bg-light d-flex justify-content-center align-items-center me-2">
                                                        <i class="bi bi-suit-heart text-danger"></i>
                                                    </button>
                                                </div>
                                                <div class="card-body d-flex flex-column">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="NotoRe">{{$car->buildyear}}</p>
                                                        <!--                                                        <div class="form-check">
                                                                                                                    <input class="form-check-input" type="checkbox" value=""
                                                                                                                           id="flexCheckDefault1">
                                                                                                                    <label class="form-check-label NotoRe"
                                                                                                                           for="flexCheckDefault1">
                                                                                                                        Compare
                                                                                                                    </label>
                                                                                                                </div>-->
                                                    </div>
                                                    <a href="{{route('detailpage', $car->slug)}}"
                                                       class="text-decoration-none"><h3
                                                            class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">
                                                            {{($car->brand ? $car->brand->name : '') . ' ' . $car->name}}</h3>
                                                    </a>
                                                    <p class="card-text NotoRe text-danger">&euro; {{$car->price}}</p>
                                                    <!--                                                    <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>New York
                                                                                                        </p>-->
                                                    <hr>
                                                    <div class="infowrap">
                                                        <div class="row row-cols-3 g-2 text-white">
                                                            <div class="col text-center">
                                                                <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                    <i class="bi bi-speedometer"></i>
                                                                    <p>{{$car->bodytype->name}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col text-center">
                                                                <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                    <i class="bi bi-bezier2"></i>
                                                                    <p>{{$car->transmission->name}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col text-center">
                                                                <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                    <i class="bi bi-droplet"></i>
                                                                    <p>{{$car->fueltype->name}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                <!--                                    <div>
                                        <div class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
                                            <a href="detaillpagina.html" class="img-hover"><img src="images/17.jpg" class="card-img-top rounded-lb-top" alt="mercedes"></a>
                                            <div class="showbadges w-100 d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-column p-2">
                                                    <span class="badge bg-primary text-white fs-7 NotoRe fw-light rounded-3 w-75 mb-1">New</span>
                                                    <span class="badge bg-success text-white fs-7 NotoRe fw-light rounded-3">Certified</span>
                                                </div>
                                                <button class="showheart border-0 text-white circle-background rounded-circle bg-light d-flex justify-content-center align-items-center me-2">
                                                    <i class="bi bi-suit-heart text-danger"></i>
                                                </button>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <p class="NotoRe">2015</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                        <label class="form-check-label NotoRe" for="flexCheckDefault2">
                                                            Compare
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="detaillpagina.html" class="text-decoration-none"><h3 class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">Mercedes Benz convertible coupe</h3></a>
                                                <p class="card-text NotoRe text-danger">$25,800</p>
                                                <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>New York</p>
                                                <hr>
                                                <div class="infowrap">
                                                    <div class="row row-cols-3 g-2 text-white">
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-speedometer"></i>
                                                                <p>48K mi</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-bezier2"></i>
                                                                <p>Automatic</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-droplet"></i>
                                                                <p>Gasoline</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
                                            <a href="detaillpagina.html" class="img-hover"><img src="images/17.jpg" class="card-img-top rounded-lb-top" alt="mercedes"></a>
                                            <div class="showbadges w-100 d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-column p-2">
                                                    <span class="badge bg-primary text-white fs-7 NotoRe fw-light rounded-3 w-75 mb-1">New</span>
                                                    <span class="badge bg-success text-white fs-7 NotoRe fw-light rounded-3">Certified</span>
                                                </div>
                                                <button class="showheart border-0 text-white circle-background rounded-circle bg-light d-flex justify-content-center align-items-center me-2">
                                                    <i class="bi bi-suit-heart text-danger"></i>
                                                </button>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <p class="NotoRe">2015</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                        <label class="form-check-label NotoRe" for="flexCheckDefault3">
                                                            Compare
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="detaillpagina.html" class="text-decoration-none"><h3 class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">Mercedes Benz convertible coupe</h3></a>
                                                <p class="card-text NotoRe text-danger">$25,800</p>
                                                <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>New York</p>
                                                <hr>
                                                <div class="infowrap">
                                                    <div class="row row-cols-3 g-2 text-white">
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-speedometer"></i>
                                                                <p>48K mi</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-bezier2"></i>
                                                                <p>Automatic</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-droplet"></i>
                                                                <p>Gasoline</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
                                            <a href="detaillpagina.html" class="img-hover"><img src="images/17.jpg" class="card-img-top rounded-lb-top" alt="mercedes"></a>
                                            <div class="showbadges w-100 d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-column p-2">
                                                    <span class="badge bg-primary text-white fs-7 NotoRe fw-light rounded-3 w-75 mb-1">New</span>
                                                    <span class="badge bg-success text-white fs-7 NotoRe fw-light rounded-3">Certified</span>
                                                </div>
                                                <button class="showheart border-0 text-white circle-background rounded-circle bg-light d-flex justify-content-center align-items-center me-2">
                                                    <i class="bi bi-suit-heart text-danger"></i>
                                                </button>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <p class="NotoRe">2015</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                        <label class="form-check-label NotoRe" for="flexCheckDefault4">
                                                            Compare
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="detaillpagina.html" class="text-decoration-none"><h3 class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">Mercedes Benz convertible coupe</h3></a>
                                                <p class="card-text NotoRe text-danger">$25,800</p>
                                                <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>New York</p>
                                                <hr>
                                                <div class="infowrap">
                                                    <div class="row row-cols-3 g-2 text-white">
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-speedometer"></i>
                                                                <p>48K mi</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-bezier2"></i>
                                                                <p>Automatic</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-droplet"></i>
                                                                <p>Gasoline</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
                                            <a href="detaillpagina.html" class="img-hover"><img src="images/17.jpg" class="card-img-top rounded-lb-top" alt="mercedes"></a>
                                            <div class="showbadges w-100 d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-column p-2">
                                                    <span class="badge bg-primary text-white fs-7 NotoRe fw-light rounded-3 w-75 mb-1">New</span>
                                                    <span class="badge bg-success text-white fs-7 NotoRe fw-light rounded-3">Certified</span>
                                                </div>
                                                <button class="showheart border-0 text-white circle-background rounded-circle bg-light d-flex justify-content-center align-items-center me-2">
                                                    <i class="bi bi-suit-heart text-danger"></i>
                                                </button>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <p class="NotoRe">2015</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                        <label class="form-check-label NotoRe" for="flexCheckDefault5">
                                                            Compare
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="detaillpagina.html" class="text-decoration-none"><h3 class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">Mercedes Benz convertible coupe</h3></a>
                                                <p class="card-text NotoRe text-danger">$25,800</p>
                                                <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>New York</p>
                                                <hr>
                                                <div class="infowrap">
                                                    <div class="row row-cols-3 g-2 text-white">
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-speedometer"></i>
                                                                <p>48K mi</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-bezier2"></i>
                                                                <p>Automatic</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-droplet"></i>
                                                                <p>Gasoline</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
                                            <a href="detaillpagina.html" class="img-hover"><img src="images/17.jpg" class="card-img-top rounded-lb-top" alt="mercedes"></a>
                                            <div class="showbadges w-100 d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-column p-2">
                                                    <span class="badge bg-primary text-white fs-7 NotoRe fw-light rounded-3 w-75 mb-1">New</span>
                                                    <span class="badge bg-success text-white fs-7 NotoRe fw-light rounded-3">Certified</span>
                                                </div>
                                                <button class="showheart border-0 text-white circle-background rounded-circle bg-light d-flex justify-content-center align-items-center me-2">
                                                    <i class="bi bi-suit-heart text-danger"></i>
                                                </button>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between">
                                                    <p class="NotoRe">2015</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                                        <label class="form-check-label NotoRe" for="flexCheckDefault6">
                                                            Compare
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="detaillpagina.html" class="text-decoration-none"><h3 class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">Mercedes Benz convertible coupe</h3></a>
                                                <p class="card-text NotoRe text-danger">$25,800</p>
                                                <p class="card-text NotoRe"><i class="bi bi-geo-alt"></i>New York</p>
                                                <hr>
                                                <div class="infowrap">
                                                    <div class="row row-cols-3 g-2 text-white">
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-speedometer"></i>
                                                                <p>48K mi</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-bezier2"></i>
                                                                <p>Automatic</p>
                                                            </div>
                                                        </div>
                                                        <div class="col text-center">
                                                            <div class="bg-dark rounded-3 pt-2 pb-1">
                                                                <i class="bi bi-droplet"></i>
                                                                <p>Gasoline</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                            <div class="row pt-4 pe-3 pb-4">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <!--                                    <p class="text-white NotoRe pe-3 m-0"><i class="bi bi-arrow-down-up pe-2"></i> Sort
                                                                            by:</p>
                                                                        <select class="NotoRe bg-licht text-white-50 rounded-3 p-2 border-lb">
                                                                            <option>Newest</option>
                                                                            <option>Popular</option>
                                                                            <option>Price: Low - High</option>
                                                                            <option>Price: High - Low</option>
                                                                        </select>
                                                                        <div class="border-lb-right py-3 px-2 me-2"></div>
                                                                        <p class="text-white-50 NotoBo pe-3 m-0 fs-5"><i
                                                                                class="bi bi-arrow-left-right pe-2"></i> Compare (0)</p>
                                                                        <p class="text-white NotoRe m-0 ms-auto d-md-none"><i class="bi bi-caret-left"></i>1/5<i
                                                                                class="bi bi-caret-right"></i></p>-->
                                {{ $cars->links('layouts.custom-pagination') }}
                                <!--                                    <nav aria-label="Page navigation example"
                                         class="d-none d-md-inline-flex ms-md-auto">
                                        <ul class="pagination justify-content-end m-0">
                                            <li class="page-item disabled">
                                                <a class="page-link border-lb bg-licht text-white">Previous</a>
                                            </li>
                                            <li class="page-item bg-licht"><a
                                                    class="page-link border-lb bg-transparent text-white" href="#">1</a>
                                            </li>
                                            <li class="page-item bg-licht"><a
                                                    class="page-link border-lb bg-transparent text-white" href="#">2</a>
                                            </li>
                                            <li class="page-item bg-licht"><a
                                                    class="page-link border-lb bg-transparent text-white" href="#">3</a>
                                            </li>
                                            <li class="page-item bg-licht">
                                                <a class="page-link border-lb bg-licht text-white" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
