<div>
    <main>
        <!--MODAL CONTENT-->
        @include('includes.modal')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto pt-3">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white-50 NotoRe" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-white text-decoration-none NotoRe" aria-current="page">
                                Contact
                            </li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-lg-5">
                            <section id="communication">
                                <h2 class="text-white NotoBo display-5">Contact</h2>
                                <p class="text-white-50 NotoRe fs-5 pb-3">Fill out the form and out team will try to get
                                    back to you within 24 hours.</p>
                                <div id="generalcommunication" class="d-flex pb-4">
                                    <img src="{{asset('images2/envelope.svg')}}" class="me-3" alt="envelope" width="32" height="32">
                                    <div>
                                        <h3 class="text-white fs-4">General communication</h3>
                                        <p><span class="NotoRe text-white-50">For general queries, including partnership opportunities, please email </span><a href="mailto:example@email.com" class="text-danger">example@email.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div id="generalcommunication1" class="d-flex pb-4">
                                    <img src="{{asset('images2/chat.svg')}}" class="me-3" alt="envelope" width="32" height="32">
                                    <div>
                                        <h3 class="text-white fs-4">General communication</h3>
                                        <p><span class="NotoRe text-white-50">We’re here to help! If you have technical issues </span><a href="" class="text-danger">contact support</a></p>
                                    </div>
                                </div>
                                <div id="headquarters" class="d-flex pb-4">
                                    <img src="{{asset('images2/map-pin.svg')}}" class="me-3" alt="envelope" width="32" height="32">
                                    <div>
                                        <h3 class="text-white fs-4">Our headquarters</h3>
                                        <p><span class="NotoRe text-white-50">8502 Preston Rd. Inglewood, Maine 98380 </span><a href="" class="text-danger">get directions</a></p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-6 ms-auto mb-5">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white NotoRe fs-5">Full
                                    name</label>
                                <input type="email" class="form-control NotoRe text-white bg-licht border-lb rounded-lb p-3" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label text-white NotoRe fs-5">Your
                                    email</label>
                                <input type="email" class="form-control NotoRe text-white bg-licht border-lb rounded-lb p-3" id="exampleFormControlInput2">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput3" class="form-label text-white NotoRe fs-5">Subject</label>
                                <select class="NotoRe bg-licht border-lb rounded-lb p-3 text-white w-100" id="exampleFormControlInput3">
                                    <option>Choose subject</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput4" class="text-white NotoRe mb-2 fs-5">Message</label>
                                <textarea class="NotoRe bg-licht border-lb rounded-lb p-3 text-white w-100" id="exampleFormControlInput4" placeholder="Leave your message"></textarea>
                            </div>
                            <button class="btn btn-danger text-white NotoBo rounded-3 px-3" type="submit">Submit form</button>
                        </div>
                    </div>
                    <div class="row mb-5 mx-1">
                        <iframe style="border-radius: 15px" class="p-0" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
