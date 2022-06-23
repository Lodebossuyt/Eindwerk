<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('images2/favicon-16x16.png')}}" sizes="16x16">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>car|HOME</title>
    @livewireStyle
</head>
<body class="d-flex flex-column {{ Route::currentRouteNamed('paymentsuccess') ? 'vh-100' : '' }}">
<h1 class="d-none">Homepagina</h1>
<header id="navbarheader" class="sticky-top mb-5">
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto px-0">
                <nav class="navbar navbar-expand-lg navbar-dark py-3">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand NotoBo" href="{{route('home')}}">
                            <img src="{{'images2/logo-light.svg'}}" alt="logo" width="116" class="d-inline-block align-text-top"></a>
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item px-2 px-xl-3">
                                    <a class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }} NotoBo" aria-current="page" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item px-2 px-xl-3">
                                    <a class="nav-link {{ Route::currentRouteNamed('webshop') ? 'active' : '' }} NotoBo" href="{{route('webshop')}}">Webshop</a>
                                </li>
                                <li class="nav-item px-2 px-xl-3">
                                    <a class="nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }} NotoBo" href="{{route('contact')}}">Contact</a>
                                </li>
<!--                                <li class="nav-item px-2 px-xl-3">
                                    <a class="nav-link NotoBo" href="#">Blog</a>
                                </li>-->
                                <li class="nav-item px-2 px-xl-3">
                                    <a class="nav-link {{ Route::currentRouteNamed('mycart') ? 'active' : '' }} NotoBo d-flex" href="{{route('mycart')}}">My cart <span class="ms-1">@livewire('frontend.carticon')</span></a>
                                </li>
                                @if(Auth::check())
                                    <li class="nav-item dropdown px-2 text-white-50 NotoBo text-decoration-none d-lg-none">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white-50" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item text-white dropdownbg" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item px-2 d-lg-none px-xl-3">
                                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button" id="login" class="nav-link NotoBo"><i class="bi bi-person "></i> Sign in</a>
                                    </li>
                                @endif

<!--                                <li class="nav-item d-lg-none px-xl-3">
                                    <a class="btn btn-danger NotoBo" href="">
                                        <i class="bi bi-plus"></i>Sell Car
                                    </a>
                                </li>-->
                                @if(Auth::check())
                                    <li class="nav-item dropdown px-2 text-white-50 NotoBo text-decoration-none d-none d-lg-block">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white-50" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item text-white dropdownbg" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item d-flex align-items-center">
                                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button" id="login1" class="text-white-50 NotoBo text-decoration-none d-none d-lg-block">
                                            <i class="bi bi-person"></i> Sign in
                                        </a>
                                    </li>
                                @endif
                            </ul>

                        </div>


<!--                        <a class="btn btn-danger ms-3 NotoBo d-none d-lg-block" href="">
                            <i class="bi bi-plus"></i>Sell Car
                        </a>-->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="bg-licht NotoRe mt-auto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto pt-4">
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <img src="{{asset('images2/logo-light.svg')}}" height="34" width="116" alt="logo">
<!--                        <div class="d-flex flex-column flex-md-row">
                            <div class="col pe-3 d-flex align-items-center">
                                <i class="bi bi-globe pe-2 text-white-50"></i>
                                <select class="NotoRe text-white-50 px-2 w-100 border-0">
                                    <option>Eng</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="col d-flex align-items-center">
                                <i class="bi bi-geo-alt pe-2 text-white-50"></i>
                                <select class="NotoRe text-white-50 px-2 border-0">
                                    <option>New York</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <hr class="my-4">
        </div>
        <div class="row">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto pt-2">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <p class="NotoBo text-white fs-5">Subscribe to our newsletter</p>
                        <p class="NotoRe text-white-50">Don't miss any relevant offers!</p>
                        <div class="formfooter bg-licht">
                            <form class="row g-0 p-2">
                                <div class="col-1 d-flex align-items-center">
                                    <span><i class="bi bi-envelope text-white-50 ps-2"></i></span>
                                </div>
                                <div class="col-9">
                                    <input class="form-control w-100 bg-transparent fs-6 rounded-0 border-0 text-white-50 NotoRe" type="text" name="keywords" placeholder="Your email">
                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <button class="btn btn-danger text-center NotoBo"><i class="bi bi-send"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 pt-md-4 pt-lg-0 col-lg-2 d-flex justify-content-lg-center">
                        <div>
                            <p class="NotoBo text-white pt-4 pt-md-0 fs-6">Buying and Selling</p>
                            <div class="text-white-50 hoverfooter">
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Find a car</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Sell your car</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Car dealers</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Compare cars</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Online car appraisal</p></a>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-md-3 pt-md-4 pt-lg-0 col-lg-2 d-flex justify-content-lg-center">
                        <div>
                            <p class="NotoBo text-white pt-4 pt-md-0 fs-6">About</p>
                            <div class="text-white-50 hoverfooter">
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">About finder</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Contact us</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">FAQs & support</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Mobile app</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Blog</p></a>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-md-3 pt-md-4 pt-lg-0 col-lg-2 d-flex justify-content-lg-center">
                        <div>
                            <p class="NotoBo text-white pt-4 pt-md-0 fs-6">Profile</p>
                            <div class="text-white-50 hoverfooter">
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">My account</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Wishlist</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">My listings</p></a>
                                <a class="text-decoration-none text-white-50" href=""><p class="mb-0">Add listing</p></a>
                            </div>
                        </div>


                    </div>
                    <div id="socialbuttons" class="col-12 col-md-3 pt-4 pt-md-4 pt-lg-0 col-lg-3">
                        <div>
                            <a class="text-decoration-none" href="">
                                <div class="d-flex">
                                    <span><i class="bi bi-phone text-danger pe-2"></i></span><p class="text-white">(406) 555-0120</p>
                                </div>
                            </a>
                            <a class="text-decoration-none" href="">
                                <div class="d-flex">
                                    <span><i class="bi bi-envelope text-danger pe-2"></i></span><p class="text-white">example@email.com</p>
                                </div>
                            </a>

                            <div class="d-flex">
                                <a class="text-decoration-none" href="">
                                    <div class="text-white circle-background rounded-circle bg-licht d-flex justify-content-center align-items-center me-2">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                </a>
                                <a class="text-decoration-none" href="">
                                    <div class="text-white circle-background rounded-circle bg-licht d-flex justify-content-center align-items-center me-2">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </a>
                                <a class="text-decoration-none" href="">
                                    <div class=" text-white circle-background rounded-circle bg-licht d-flex justify-content-center align-items-center me-2">
                                        <i class="fab fa-telegram-plane"></i>
                                    </div>
                                </a>
                                <a class="text-decoration-none" href="">
                                    <div class=" text-white circle-background rounded-circle bg-licht d-flex justify-content-center align-items-center me-2">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 pb-3">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                <div class="row">
                    <div class="d-flex flex-column flex-xl-row justify-content-between hoverfooter">
                        <p class="text-white-50 d-flex flex-column flex-md-row">&copy; All rights reserved. Made by <span class="ps-1 NotoBo hover-text-white-50">Createx Studio</span></p>
                        <div class="d-flex flex-wrap justify-content-start">
                            <a class="text-decoration-none" href="">
                                <p class="text-white-50 pe-4">Terms of use</p>
                            </a>
                            <a class="text-decoration-none" href="">
                                <p class="text-white-50 pe-4">Privacy policy</p>
                            </a>
                            <a class="text-decoration-none" href="">
                                <p class="text-white-50 pe-4">Accessibility statement</p>
                            </a>
                            <a class="text-decoration-none" href="">
                                <p class="text-white-50">Interest based ads</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
