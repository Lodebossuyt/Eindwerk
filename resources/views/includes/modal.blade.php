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
                            <form method="POST" action="{{ route('login') }}" class="signinform">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text-white NotoRe">Email
                                        address</label>
                                    <input name="email" value="{{ old('email') }}" type="email" class="form-control bg-licht text-white-50 NotoRe p-2"
                                           id="exampleInputEmail2" placeholder="Enter your email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword" class="form-label text-white NotoRe">Password</label>
                                    <input name="password" type="password"
                                           class="form-control bg-licht text-white-50 NotoRe p-2"
                                           id="exampleInputPassword" placeholder="Enter password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                            <form method="POST" action="{{ route('register') }}" class="signinform">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputEmail3" class="form-label text-white NotoRe">Full
                                        name</label>
                                    <input name="name" type="text" class="form-control bg-licht text-white-50 NotoRe p-2"
                                           id="exampleInputEmail3" placeholder="Enter your full name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text-white NotoRe">Email
                                        address</label>
                                    <input name="email" type="email" class="form-control bg-licht text-white-50 NotoRe p-2"
                                           id="exampleInputEmail1" placeholder="Enter your email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-white NotoRe">Password
                                        <span class="text-white-50">min.8 char</span></label>
                                    <input name="password" type="password"
                                           class="form-control bg-licht text-white-50 NotoRe p-2"
                                           id="exampleInputPassword1">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword2" class="form-label text-white NotoRe">Password</label>
                                    <input name="password_confirmation" type="password"
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
