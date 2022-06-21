<div>
    <main>
        <!--MODAL CONTENT-->
        @include('includes.modal')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto px-0">
                    <div class="mx-3">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-decoration-none text-white-50 NotoRe"
                                                               href="{{route('home')}}">Home</a></li>
<!--                                <li class="breadcrumb-item active text-white-50 text-decoration-none NotoRe"
                                    aria-current="page">Used cars
                                </li>-->
                                <li class="breadcrumb-item active text-white text-decoration-none NotoRe" aria-current="page">
                                    {{$car->name . ' ' . $car->brand->name}}
                                </li>
                            </ol>
                        </nav>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="text-white NotoBo fs-1">{{$car->name . ' ' . $car->brand->file}}</h2>
                            <div class="d-flex">
                                <button class="border-0 text-white circle-background social-hover rounded-circle bg-licht d-flex justify-content-center align-items-center me-2">
                                    <i class="bi bi-suit-heart"></i>
                                </button>
                                <button class="border-0 text-white circle-background social-hover rounded-circle bg-licht d-flex justify-content-center align-items-center me-2">
                                    <i class="bi bi-share"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mb-3">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @if($car->photos->isnotempty())
                                            @foreach($car->photos as $photo)
                                        <div class="carousel-item @if($loop->index == 0) active @endif ">
                                            <img src="{{asset('images/' . $photo->file)}}" class="d-block rounded-lb w-100" alt="foto auto">
                                        </div>
                                            @endforeach
                                        @else
                                            <div class="carousel-item active">
                                                <img src="http://via.placeholder.com/300x200" class="d-block rounded-lb w-100" alt="foto auto">
                                            </div>
                                        @endif
                                    </div>
                                    <div id="fotoKnoppen" class="row">
                                        <div class="col-12 py-3">
                                            <div class="row row-cols-5 g-3">
                                                @if($car->photos->isnotempty())
                                                    @foreach($car->photos as $photo)
                                                        <div role="button">
                                                            <img src="{{asset('images/' . $photo->file)}}" class=" @if($loop->index == 0) active  @endif rounded-lb img-fluid" alt="foto auto" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" aria-current="true" aria-label="Slide {{$loop->index}}">
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div>
                                                        <img src="http://via.placeholder.com/60x40" class="active rounded-lb img-fluid"
                                                             alt="foto auto"
                                                             data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                                             aria-current="true" aria-label="Slide 1">
                                                    </div>
                                                @endif


<!--                                                <div>
                                                    <div class="bg-licht d-flex flex-column align-items-center justify-content-center h-100 rounded-lb">
                                                        <i class="bi bi-play-btn text-white"></i>
                                                        <p class="d-none d-lg-block text-white-50 m-0 fs-7">Play video</p>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev d-none" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next d-none" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    <div class="row py-4">
                                        <h3 class="text-white py-3 fs-3 NotoBo">
                                            Specifications
                                        </h3>
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li><p class="NotoBo text-white mb-2">Manufacturing Year: <span
                                                            class="text-white-50 NotoRe">{{$car->buildyear}}</span></p></li>
<!--                                                <li><p class="NotoBo text-white mb-2">Mileage: <span
                                                            class="text-white-50 NotoRe">25K miles</span></p></li>-->
                                                <li><p class="NotoBo text-white mb-2">Body Type: <span
                                                            class="text-white-50 NotoRe">convertible</span></p></li>
                                                <li><p class="NotoBo text-white mb-2">Drivetrain: <span
                                                            class="text-white-50 NotoRe">{{$car->drivetrain->name}}</span></p></li>
                                                <li><p class="NotoBo text-white mb-2">Engine: <span
                                                            class="text-white-50 NotoRe">2.5L Turbo 6 Cylinder</span></p></li>
                                                <li><p class="NotoBo text-white mb-2">Transmission: <span
                                                            class="text-white-50 NotoRe">{{$car->transmission->name}}</span></p></li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li><p class="NotoBo text-white mb-2">Fuel Type: <span
                                                            class="text-white-50 NotoRe">{{$car->fueltype->name}}</span></p></li>
                                                <li><p class="NotoBo text-white mb-2">City MPG: <span
                                                            class="text-white-50 NotoRe">20</span></p></li>
                                                <li><p class="NotoBo text-white mb-2">Highway MPG: <span
                                                            class="text-white-50 NotoRe">29</span></p></li>
                                                <li><p class="NotoBo text-white mb-2">Exterior Color: <span
                                                            class="text-white-50 NotoRe">Aspen White</span></p></li>
                                                <li><p class="NotoBo text-white mb-2">Interior Color: <span
                                                            class="text-white-50 NotoRe">Charcoal</span></p></li>
<!--                                                <li><p class="NotoBo text-white mb-2">VIN: <span class="text-white-50 NotoRe">2VW821AU9JM754284</span>
                                                    </p></li>-->
                                            </ul>
                                        </div>
                                        <div class="col-6"></div>
                                    </div>
                                    <div class="bg-licht rounded-lb my-4 p-3">
                                        <div class="row row-cols-2 row-cols-md-4 g-4">
                                            <div class="d-flex flex-column justify-content-start">
                                                <img src="{{asset('images2/check.svg')}}" alt="check"
                                                     class="bg-duister p-3 rounded-lb mt-3">
                                                <p class="NotoRe text-white fs-7 text-center pt-3">Checked and Certified by
                                                    Finder</p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-start">
                                                <img src="{{asset('images2/steering-wheel.svg')}}" alt="steeringwheel"
                                                     class="bg-duister p-3 rounded-lb mt-3">
                                                <p class="NotoRe text-white fs-7 text-center pt-3">Brand new</p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-start">
                                                <img src="{{asset('images2/driving-test.svg')}}" alt="drivingtest"
                                                     class="bg-duister p-3 rounded-lb mt-3">
                                                <p class="NotoRe text-white fs-7 text-center pt-3">Well-equiped</p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-start">
                                                <img src="{{asset('images2/accident.svg')}}" alt="accident"
                                                     class="bg-duister p-3 rounded-lb mt-3">
                                                <p class="NotoRe text-white fs-7 text-center pt-3">Insurance</p>
                                            </div>
                                        </div>
                                    </div>
<!--                                    <div class="row">
                                        <h3 class="text-white py-3 fs-3 NotoBo">
                                            Features
                                        </h3>
                                        <div class="accordion bg-transparent border-lb rounded-lb mb-5" id="accordionExample">
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button bg-transparent text-white-50 NotoRe collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        Exterior
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse bg-transparent collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                                    <div class="accordion-body bg-transparent">
                                                        <ul>
                                                            <li class="text-white-50 fs-7 NotoRe">Alloy Wheels</li>
                                                            <li class="text-white-50 fs-7 NotoRe">Sunroof / Moonroof</li>
                                                            <li class="text-white-50 fs-7 NotoRe">Tinged glass</li>
                                                            <li class="text-white-50 fs-7 NotoRe">LED Headlights</li>
                                                            <li class="text-white-50 fs-7 NotoRe">Foldable Roof</li>
                                                            <li class="text-white-50 fs-7 NotoRe">Tow Hitch</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-transparent text-white-50 NotoRe">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed bg-transparent text-white-50 NotoRe"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                        Interior
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse bg-transparent"
                                                     aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <ul>
                                                                    <li class="text-white-50 NotoRe fs-7">Heated Front Seats
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Leather Seats</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Leather Steering
                                                                        Wheel
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Pass-Through Rear
                                                                        Seat
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Passenger Adjustable
                                                                        Lumbar
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Passenger Illuminated
                                                                        Visor Mirror
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <ul>
                                                                    <li class="text-white-50 NotoRe fs-7">Adjustable Steering
                                                                        Wheel
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Auto-Dimming Rearview
                                                                        Mirror
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Driver Adjustable
                                                                        Lumbar
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Driver Illuminated
                                                                        Vanity Mirror
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Universal Garage Door
                                                                        Opener
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Steering Wheel Audio
                                                                        Controls
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed bg-transparent text-white-50 NotoRe"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                        Safety
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse bg-transparent"
                                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body bg-transparent">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <ul>
                                                                    <li class="text-white-50 NotoRe fs-7">Airbag: Driver</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Airbag: Passenger</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Adaptive Cruise
                                                                        Control
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Blind Spot Monitor
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Alarm</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Antilock Brakes</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <ul>
                                                                    <li class="text-white-50 NotoRe fs-7">Brake Assist</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Lane Departure
                                                                        Warning
                                                                    </li>
                                                                    <li class="text-white-50 NotoRe fs-7">Stability Control</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Fog Lights</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Power Door Locks</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-transparent">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed bg-transparent text-white-50 NotoRe"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false"
                                                            aria-controls="collapseFour">
                                                        Technology
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse bg-transparent"
                                                     aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body bg-transparent">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <ul>
                                                                    <li class="text-white-50 NotoRe fs-7">Multi-Zone A/C</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Climate Control</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Navigation System</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Remote Start</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Bluetooth</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Remote Start</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <ul>
                                                                    <li class="text-white-50 NotoRe fs-7">Apple CarPlay</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Android Auto</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Backup Camera</li>
                                                                    <li class="text-white-50 NotoRe fs-7">HomeLink</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Keyless Start</li>
                                                                    <li class="text-white-50 NotoRe fs-7">Premium Sound System
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="row mb-4">
                                        <h3 class="text-white py-3 fs-3 NotoBo">
                                            Seller's Description
                                        </h3>

                                        <p class="text-white-50 NotoRe">
                                            {{$car->body}}</p>
<!--                                        <div class="collapse text-white-50 NotoRe" id="collapseExample">Asperiores eos
                                            molestias, aspernatur assumenda vel corporis ex, magni excepturi totam
                                            exercitationem quia inventore quod amet labore impedit quae distinctio? Officiis
                                            blanditiis consequatur alias, atque, sed est incidunt accusamus repudiandae tempora
                                            repellendus obcaecati delectus ducimus inventore tempore harum numquam autem
                                            eligendi culpa.
                                        </div>
                                        <a class="text-danger NotoRe" data-bs-toggle="collapse" href="#collapseExample"
                                           role="button" aria-expanded="false" aria-controls="collapseExample">Show more</a>-->
                                    </div>
                                    <hr class="hr-light2">
                                    <div class="row">
                                        <div class="d-flex">
                                            <p class="NotoRe text-white-50 fs-7 pe-3">Published: <span
                                                    class="NotoBo text-white-50">{{$car->created_at->diffForHumans()}}</span></p>
                                            <p class="NotoRe text-white-50 fs-7 pe-3">Ad number: <span
                                                    class="NotoBo text-white-50">{{$car->id}}</span></p>
                                            <p class="NotoRe text-white-50 fs-7 pe-3">Views: <span class="NotoBo text-white-50">75</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mb-3">
                                <div>
                                    <div class="d-flex pb-3">
<!--                                        <span class="badge bg-primary NotoRe fw-light fs-6 text-white me-2">Used</span>-->
                                        <span class="badge bg-success NotoRe fw-light fs-6 text-white">Certified</span>
                                    </div>
                                    <p class="NotoBo fs-2 text-white">&#36;{{$car->price}}</p>
                                    <div class="d-flex pb-2">
                                        <p class="text-white NotoRe border-lb-right pe-3"><i class="bi bi-speedometer pe-2"></i>0 miles</p>
                                        <p class="text-white NotoRe ps-3"><i class="bi bi-geo-alt pe-2"></i>Kortrijk</p>
                                    </div>
                                    <div class="row px-2">
                                        <button wire:click="addToCart({{$car->id}})" class="btn btn-danger rounded-lb text-center mb-3 NotoBo">Add to Cart
                                        </button>
<!--                                        <div class="bg-licht rounded-lb p-3 mb-4">
                                            <p class="NotoRe text-white">private seller</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <img class="rounded-circle" width="48" height="48" src="images/picDevonLane.jpg" alt="sellerPic">
                                                <div class="ps-2">
                                                    <p class="text-white NotoBo fs-5 m-0 lh-1">Devon Lane</p>
                                                    <div class="d-flex">
                                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                                        <i class="bi bi-star-fill text-warning pe-2"></i>
                                                        <p class="text-white-50 m-0">(5 reviews)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="" class="NotoRe text-white mb-4">Other ads by this seller</a>
                                                <button class="btn btn-outline-light NotoBo p-2 w-75 mb-2">(316) *** **** - reveal</button>
                                                <button class="btn btn-danger NotoBo p-2 mb-2 w-75">Send message</button>
                                            </div>
                                        </div>-->
                                        <div class="border-lb rounded-lb p-3">
                                            <p class="text-white NotoBo fs-5">Email me discount and promotion:</p>
                                            <div class="formfooter bg-licht mb-3">
                                                <form class="row g-0 p-2">
                                                    <div class="col-1 d-flex align-items-center">
                                                        <span><i class="bi bi-envelope text-white-50 ps-2"></i></span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input class="form-control w-100 bg-transparent fs-6 rounded-0 border-0 text-white-50 NotoRe" type="text" name="keywords" placeholder="Your email">
                                                    </div>
                                                    <div class="col-2 d-flex justify-content-end">
                                                        <button class="btn btn-danger rounded-lb text-center NotoBo">Subscribe
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input bg-transparent border-lb" type="checkbox" id="subscription-agree">
                                                <label class="form-check-label fs-7 text-white-50 NotoRe" for="subscription-agree">I agree to receive discount and promotion emails.</label>
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
    </main>
</div>
