@extends('layouts.frontend')
@section('content')
    <main>
        <!--MODAL CONTENT-->
        @include('includes.modal')
        <div id="bg-top">
            <div id="hero" class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8 mx-auto pt-5">
                        <div class="row">
                            <div id="hero-right" class="col-12 col-md-4">
                                <div>
                                    <h2 class="text-white display-5 NotoBo">
                                        Easy way to find the right car
                                    </h2>
                                    <p class="text-white-50 fs-5 NotoRe">
                                        Finder is a leading digital marketplace for the automotive industry that
                                        connects car shoppers with sellers.
                                    </p>
                                </div>
                            </div>
                            <div id="hero-left" class="col-12 col-md-8">
                                <div>
                                    <img class="img-fluid" src="{{asset('images2/hero-img.png')}}" alt="hero image car">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-none">
                    <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                        <div class="row">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link bg-white active text-danger NotoRe ms-3" aria-current="page"
                                       href="#">New</a>
                                </li>
                                <li class="nav-item ms-3">
                                    <a class="nav-link bg-licht text-white NotoRe" href="#">Used</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="formulier" class="container-fluid pt-4">
                <div class="row mx-1">
                    <div id="formwrapper" class="col-12 col-lg-10 col-xl-8 mx-auto py-2">
                        <form class="row g-0">
                            <div class="col-12 col-lg-2">
                                <input class="form-control w-100 bg-transparent rounded-0 border-0 text-white-50 NotoRe"
                                       type="text" name="keywords" placeholder="Keywords...">
                            </div>
                            <hr class="hr-light d-lg-none my-2">
                            <div class="col-12 col-md-3 col-lg-2 d-flex justify-items-center">
                                <select class="NotoRe text-white-50 px-2 w-100">
                                    <option>Make</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <hr class="hr-light d-sm-none my-2">
                            <div class="col-12 col-md-3 col-lg-2 d-flex justify-items-center">
                                <select class="NotoRe text-white-50 px-2 w-100">
                                    <option>Model</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <hr class="hr-light d-sm-none my-2">
                            <div class="col-12 col-md-3 col-lg-2 d-flex justify-items-center">
                                <select class="NotoRe text-white-50 px-2 w-100">
                                    <option>Body type</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <hr class="hr-light d-sm-none my-2">
                            <div class="col-12 col-md-3 col-lg-2 d-flex justify-items-center">
                                <select class="NotoRe text-white-50 px-2 w-100 border-0">
                                    <option>Location</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <hr class="hr-light d-lg-none my-2">
                            <div class="col-12 col-lg-2">
                                <button class="btn btn-danger w-100 text-center NotoBo">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!--        <section id="carbodys" class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto pt-5">
                    <div class="row">
                        <div class="d-flex justify-content-between align-items-center">
                            <header><h2 class="NotoBo text-white pb-4">Popular car body types</h2></header>
                            <p class="NotoRe text-white">View all -></p>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2">
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col px-3">
                            <a href="" class="text-decoration-none">
                                <div class="card hoverbody text-white-50 bg-transparent border-0 rounded-3 text-center">
                                    <img src="{{asset('images2/sedan.svg')}}"
                                         class="card-img-top img-fluid mx-auto px-2 px-lg-3" alt="sedan">
                                    <div class="card-body p-0 m-0">
                                        <h3 class="fs-5 card-title pb-3 my-0 NotoBo">Sedan</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <section id="top-offers" class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto pt-5">
                    <div class="row">
                        <div class="d-flex justify-content-between align-items-center">
                            <header><h2 class="NotoBo text-white pb-4">Top offers</h2></header>
                            <p class="NotoRe text-white">View all offers -&gt;</p>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($cars as $car)
                            @if($loop->first)
                                <div class="col-12 col-lg-6 d-flex pb-3">
                                    <div class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
                                        <a href="{{route('detailpage', $car->slug)}}" class="img-hover"><img
                                                src="{{$car->photos->isnotempty() ? asset('images/' . $car->photos->first()->file) : "http://via.placeholder.com/800x300"}}"
                                                class="card-img-top rounded-lb-top"
                                                alt="mercedes"></a>
                                        <div class="showbadges w-100 d-flex justify-content-between align-items-center">
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
<!--                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="flexCheckDefault1">
                                                    <label class="form-check-label NotoRe" for="flexCheckDefault1">
                                                        Compare
                                                    </label>
                                                </div>-->
                                            </div>
                                            <a href="{{route('detailpage', $car->slug)}}" class="text-decoration-none"><h3
                                                    class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">
                                                    {{$car->name . ' ' . $car->brand->name}}</h3></a>
                                            <p class="card-text NotoRe text-danger">&euro; {{$car->price}}</p>
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
                            @endif
                        @endforeach
                        <div class="col-12 col-lg-6">
                            @foreach($cars as $car)
                                @if($loop->index > 0 && $loop->index < 3)
                                    <div class="row mx-1 mx-lg-0">
                                        <div class="card-hover card bg-licht rounded-lb text-white-50 mb-3 px-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <a href="{{route('detailpage', $car->slug)}}" class="img-hover"><img
                                                            src="{{$car->photos->isnotempty() ? asset('images/' . $car->photos->first()->file) : "http://via.placeholder.com/400x200"}}"
                                                            class="rounded-lb-left2 img-fluid img-cover" alt="auto"></a>
                                                </div>
                                                <div class="showbadges d-flex align-items-center">
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
                                                <div class="col-md-8">
                                                    <div class="card-body d-flex flex-column">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="NotoRe">{{$car->buildyear}}</p>
<!--                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                       id="flexCheckDefault2">
                                                                <label class="form-check-label NotoRe"
                                                                       for="flexCheckDefault2">
                                                                    Compare
                                                                </label>
                                                            </div>-->
                                                        </div>
                                                        <a href="{{route('detailpage', $car->slug)}}" class="text-decoration-none"><h3
                                                                class="fs-5 card-title NotoBo text-white-50 hover-text-white-50">
                                                                Ford Truck Lifted</h3></a>
                                                        <p class="card-text NotoRe text-danger">&euro; {{$car->price}}</p>
                                                        <hr>
                                                        <div class="infowrap mt-auto">
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
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="logos" class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto py-5">
                    <div class="row row-cols-12 g-3">
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/audi.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/honda.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/hyundai.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/infiniti.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/lexus.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/mazda.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/mercedes.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/mitsubishi.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/nissan.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/opel.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/renault.svg')}}" alt="auto"></a></div>
                        <div class="col d-flex justify-content-center opacity-50 opacity-hover"><a href=""><img
                                    src="{{asset('images2/toyota.svg')}}" alt="auto"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <section id="Finderinfo" class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                    <div class="row pb-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <header><h2 class="NotoBo text-white">What sets Finder Apart</h2></header>
                            <p class="NotoRe text-white">How to sell cars on Finder --></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <div class="d-flex text-md-end">
                                <div class="order-1 order-md-0">
                                    <p class="text-white NotoBo fs-4">Over 1 million listings</p>
                                    <p class="text-white-50 NotoRe fs-6">That’s more than you’ll find on any other major
                                        online automotive marketplace in the USA.</p>
                                </div>
                                <i class="order-0 order-md-1 bi bi-file-earmark-check text-danger fs-4 px-2"></i>
                            </div>
                            <div class="d-flex text-md-end">
                                <div class="order-1 order-md-0">
                                    <p class="text-white NotoBo fs-4">Personalized Search</p>
                                    <p class="text-white-50 NotoRe fs-6">Our powerful search makes it easy to
                                        personalize your results so you only see the cars and features you care
                                        about.</p>
                                </div>
                                <i class="order-0 order-md-1 bi bi-search text-danger fs-4 px-2"></i>
                            </div>
                            <div class="d-flex text-md-end">
                                <div class="order-1 order-md-0">
                                    <p class="text-white NotoBo fs-4">Non-Stop Innovation</p>
                                    <p class="text-white-50 NotoRe fs-6">Our team is constantly developing new features
                                        that make the process of buying and selling a car simpler.</p>
                                </div>
                                <i class="order-0 order-md-1 bi bi-gear text-danger fs-4 px-2"></i>
                            </div>
                        </div>
                        <div class="col-2 d-none d-md-flex justify-content-center align-items-center">
                            <img class="h-50" src="{{asset('images2/car.svg')}}" alt="car">
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="d-flex">
                                <i class="bi bi-info-circle text-danger fs-4 px-2"></i>
                                <div>
                                    <p class="text-white NotoBo fs-4">Valuable Insights</p>
                                    <p class="text-white-50 NotoRe fs-6">We provide free access to key info like dealer
                                        reviews, market value, price drops.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <i class="bi bi-people text-danger fs-4 px-2"></i>
                                <div>
                                    <p class="text-white NotoBo fs-4">Consumer-First Mentality</p>
                                    <p class="text-white-50 NotoRe fs-6">We focus on building the most transparent,
                                        trustworthy experience for our users, and we’ve proven that works for dealers,
                                        too.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <i class="bi bi-calculator text-danger fs-4 px-2"></i>
                                <div>
                                    <p class="text-white NotoBo fs-4">Online Car Appraisal</p>
                                    <p class="text-white-50 NotoRe fs-6">Specify the parameters of your car to form its
                                        market value on the basis of similar cars on Finder.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="latestcars" class="container-fluid py-5 mb-5">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                    <div class="row pb-5">
                        <div class="flex-row d-md-flex justify-content-between align-items-center">
                            <header class="d-flex align-items-center">
                                <h2 class="NotoBo text-white">Latest cars</h2>
                            </header>
                            <div class="d-flex align-items-center">
                                <ul class="nav nav-pills d-none">
                                    <li class="nav-item">
                                        <a class="nav-link bg-white active text-danger NotoRe" aria-current="page"
                                           href="#">New</a>
                                    </li>
                                    <li class="nav-item ms-3">
                                        <a class="nav-link bg-licht text-white NotoRe" href="#">Used</a>
                                    </li>
                                </ul>
                                <p class="NotoRe text-white ps-3 m-0 ms-auto">View all --></p>
                            </div>
                        </div>
                    </div>
                    <div id="carousel" class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex">
                                        @foreach($cars as $car)
                                            @if($loop->index < 3)
                                                <div class="col-12 col-md-6 col-lg-4 px-lg-2">
                                                    <div
                                                        class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
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
                                                            <p class="card-text NotoRe text-danger">
                                                                &euro; {{$car->price}}</p>
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
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex">
                                        @foreach($cars as $car)
                                            @if($loop->index >= 3 && $loop->index < 6)
                                                <div class="col-12 col-md-6 col-lg-4 px-lg-2">
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
                                                            <p class="card-text NotoRe text-danger">
                                                                &euro; {{$car->price}}</p>
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
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex">
                                        @foreach($cars as $car)
                                            @if($loop->index >= 6 && $loop->index < 9)
                                                <div class="col-12 col-md-6 col-lg-4 px-lg-2">
                                                    <div
                                                        class="card card-hover bg-licht rounded-lb text-white-50 d-flex">
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
                                                            <p class="card-text NotoRe text-danger">
                                                                &euro; {{$car->price}}</p>
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
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="d-none row row-cols-3 g-3">
                        <div class="col">
                            <div class="card bg-licht text-white-50 d-flex">
                                <img src="images/17.jpg" class="card-img-top" alt="mercedes">
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex justify-content-between">
                                        <p class="NotoRe">2015</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault44">
                                            <label class="form-check-label NotoRe" for="flexCheckDefault44">
                                                Compare
                                            </label>
                                        </div>
                                    </div>
                                    <h3 class="fs-5 card-title NotoBo mt-auto">Mercedes Benz convertible coupe</h3>
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
                        <div class="col">
                            <div class="card bg-licht text-white-50 d-flex">
                                <img src="images/17.jpg" class="card-img-top" alt="mercedes">
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex justify-content-between">
                                        <p class="NotoRe">2015</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault15">
                                            <label class="form-check-label NotoRe" for="flexCheckDefault15">
                                                Compare
                                            </label>
                                        </div>
                                    </div>
                                    <h3 class="fs-5 card-title NotoBo mt-auto">Mercedes Benz convertible coupe</h3>
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
                        <div class="col">
                            <div class="card bg-licht text-white-50 d-flex">
                                <img src="images/17.jpg" class="card-img-top" alt="mercedes">
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex justify-content-between">
                                        <p class="NotoRe">2015</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault16">
                                            <label class="form-check-label NotoRe" for="flexCheckDefault16">
                                                Compare
                                            </label>
                                        </div>
                                    </div>
                                    <h3 class="fs-5 card-title NotoBo mt-auto">Mercedes Benz convertible coupe</h3>
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
                    </div>
                </div>
            </div>
        </section>
        <section id="News" class="container-fluid d-none">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto py-5">
                    <div class="row">
                        <div class="d-flex justify-content-between align-items-center pb-4">
                            <header><h2 class="NotoBo text-white">Latest news</h2></header>
                            <p class="NotoRe text-white m-0">Go to blog -></p>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <div class="col">
                            <div class="card bg-transparent border-0 d-flex">
                                <a class="text-decoration-none" href="">
                                    <img src="{{asset('images2/04%20(1).jpg')}}" class="card-img-top rounded-lb"
                                         alt="mercedes">
                                </a>
                                <div class="card-body d-flex flex-column">
                                    <a class="text-decoration-none" href="">
                                        <p class="card-text NotoRe text-danger fs-6">EVENTS</p>
                                    </a>
                                    <a class="text-decoration-none" href="">
                                        <h3 class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">Top
                                            10 Classic Car Events</h3>
                                    </a>
                                    <a class="text-decoration-none" href="">
                                        <div class="row infowrap">
                                            <div class="d-flex align-items-center NotoRe">
                                                <div>
                                                    <img class="rounded-circle img-fluid pe-2" src="images/08%20(1).jpg"
                                                         alt="" width="44">
                                                </div>
                                                <div>
                                                    <p class="m-0 NotoBo text-white">Jacob Jones</p>
                                                    <div class="d-flex">
                                                        <p class="m-0 fs-6 pe-3 text-white-50"><i
                                                                class="bi bi-calendar pe-2"></i>8 may</p>
                                                        <p class="m-0 fs-6 text-white-50"><i
                                                                class="bi bi-chat pe-2"></i>No comments</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-transparent border-0 d-flex">
                                <a class="text-decoration-none" href="">
                                    <img src="{{asset('images2/04%20(1).jpg')}}" class="card-img-top rounded-lb"
                                         alt="mercedes">
                                </a>
                                <div class="card-body d-flex flex-column">
                                    <a class="text-decoration-none" href="">
                                        <p class="card-text NotoRe text-danger fs-6">EVENTS</p>
                                    </a>
                                    <a class="text-decoration-none" href="">
                                        <h3 class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">Top
                                            10 Classic Car Events</h3>
                                    </a>
                                    <a class="text-decoration-none" href="">
                                        <div class="row infowrap">
                                            <div class="d-flex align-items-center NotoRe">
                                                <div>
                                                    <img class="rounded-circle img-fluid pe-2"
                                                         src="{{asset('images2/08%20(1).jpg')}}" alt="" width="44">
                                                </div>
                                                <div>
                                                    <p class="m-0 NotoBo text-white">Jacob Jones</p>
                                                    <div class="d-flex">
                                                        <p class="m-0 fs-6 pe-3 text-white-50"><i
                                                                class="bi bi-calendar pe-2"></i>8 may</p>
                                                        <p class="m-0 fs-6 text-white-50"><i
                                                                class="bi bi-chat pe-2"></i>No comments</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-transparent border-0 d-flex">
                                <a class="text-decoration-none" href="">
                                    <img src="{{asset('images2/04%20(1).jpg')}}" class="card-img-top rounded-lb"
                                         alt="mercedes">
                                </a>
                                <div class="card-body d-flex flex-column">
                                    <a class="text-decoration-none" href="">
                                        <p class="card-text NotoRe text-danger fs-6">EVENTS</p>
                                    </a>
                                    <a class="text-decoration-none" href="">
                                        <h3 class="fs-5 card-title NotoBo text-white-50 mt-auto hover-text-white-50">Top
                                            10 Classic Car Events</h3>
                                    </a>
                                    <a class="text-decoration-none" href="">
                                        <div class="row infowrap">
                                            <div class="d-flex align-items-center NotoRe">
                                                <div>
                                                    <img class="rounded-circle img-fluid pe-2"
                                                         src="{{asset('images2/08%20(1).jpg')}}" alt="" width="44">
                                                </div>
                                                <div>
                                                    <p class="m-0 NotoBo text-white">Jacob Jones</p>
                                                    <div class="d-flex">
                                                        <p class="m-0 fs-6 pe-3 text-white-50"><i
                                                                class="bi bi-calendar pe-2"></i>8 may</p>
                                                        <p class="m-0 fs-6 text-white-50"><i
                                                                class="bi bi-chat pe-2"></i>No comments</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
