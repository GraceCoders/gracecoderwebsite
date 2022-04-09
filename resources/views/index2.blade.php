@extends('layout.main')
@section('main-container')

    <body>


        <section class="top-div">
            <div class="container">
                <div class="row row1">
                    <div class="col-lg-5 col-12">
                        <img class="assets/img-fluid logo-img" src="{{ asset('assets/slicing_web/logo.svg') }}" alt="...">

                    </div>

                    <div class="col-lg-1 col-12">
                        <!-- <div class="anchor" style="display:inline-flex"> -->
                        <h6 class="headings"><a class="colors" href="#">Home</a></h6>
                    </div>
                    <div class="col-lg-1 col-12">
                        <h6 class="headings"><a class="colors" href="{{ route('about') }}">About</a></h6>
                    </div>
                    <div class="col-lg-1 col-12">
                        <h6 class="headings"><a class="colors" href="{{ route('portfolio') }}">Portfolio</a>
                        </h6>
                    </div>
                    <div class="col-lg-1 col-12">
                        <h6 class="headings"><a class="colors" href="{{ route('contact') }}">Contact</a></h6>
                    </div>
                    <div class="col-lg-3 col-12">
                        <h6 class=""> <button type="button" class="btn btn  radius-btn1 btn-lg  ">Build my
                                product&nbsp;<img class="img-fluid" id="plus_image"
                                    src="{{ asset('assets/slicing_web/arrow.svg') }}" alt="..."></h6>
                    </div>


                </div>


                <div class=" heading">
                    <h1 class="top-heading">Let’s build your<span class="span-dream"> Dreams</span></h1>
                    <p class="pera"> Develop and transform your business through strategy,
                        design and app <br>development</p>

                    <button type="button" class="btn btn  radius-btn btn-lg  " data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Get a quote</button>

                </div>

            </div>
        </section>

        <section class="second">
            <!-- <img class="img-fluid second_img"  src="slicing_web/company_cover.png" class="img-fluid" alt="..."> -->

            <div class="container">
                <div class="row second-padding">
                    <div class="col-lg-8 col-12">
                        <p class="pera2">WHO WE ARE</p>
                        <h1 class="headings2">Your digital partner to create impactful design & user friendly solution
                            for Web, Mobile & Cloud.</h1>
                        <p class="pera1">No matter what is the type and size of your business, our certified and
                            skilled developers are here to help you out. We provide solutions to your business problems
                            through advanced mobile solutions. Here, we are great at offering the following solutions</p>
                        <button type="button" class="btn btn roun-btn3  radius-btn btn-lg  ">Get a quote</button>
                    </div>

                    <div class="col-lg-4 col-12">
                        <!-- <center> <h1 class="project-pera11">50+</h1> -->
                        <center>
                            <div id="shiva" style="display: inline-flex;">
                                <h1 class="project-pera11"><span class="count">50 </span></h1>
                                <h1 class="projecp">+</h1>
                            </div>
                            <p class="project-pera">Projects</p>
                        </center>


                        <center>
                            <div class="rap">
                                <div id="shiva" style="display: inline-flex;">
                                    <h1 class="project-pera11"><span class="count">30 </span></h1>
                                    <h1 class="projecp1">+</h1>
                                </div>
                                <p class="project-pera">Team Members</p>
                            </div>
                        </center>
                        <center>
                            <div id="shiva" style="display: inline-flex;">
                                <h1 class="project-pera11"><span class="count">45</span></h1>
                                <h1 class="projecp1">+</h1>
                            </div>
                            <p class="project-pera">Happy Clients</p>
                        </center>

                    </div>

                </div>
            </div>
            </div>
        </section>

        <section class="third">
            <div class="container">
                <div class="services text-center">
                    <p class="services-pera text-center">SERVICES</p>
                    <h2 class="services-head">Our range of services</h2>
                </div>
                <div class="row service-row">
                    <div class="col-lg-4 col-12 service-col col-ad">

                        <div class="square-div">
                            <div class="row ">
                                <div class="col-lg-4 "><img class="img-fluid web-image"
                                        src="{{ asset('assets/slicing_web/web.svg') }}" alt="..."></div>
                                <div class="col-lg-8 ">
                                    <h5 class="web-heading">Web Development</h5>
                                </div>
                                <p class="web-pera">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 service-col col-ad">
                        <div class="square-div service-col">
                            <div class="row ">
                                <div class="col-lg-4 "><img class="img-fluid web-image"
                                        src="{{ asset('assets/slicing_web/app.svg') }}" alt="..."></div>
                                <div class="col-lg-8 ">
                                    <h5 class="web-heading">App Developement</h5>
                                </div>
                                <p class="web-pera">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo.</p>
                            </div>

                        </div>
                    </div>



                    <div class="col-lg-4 col-12 col-ad">
                        <div class="square-div">
                            <div class="row ">
                                <div class="col-lg-4 "><img class="img-fluid web-image"
                                        src="{{ asset('assets/slicing_web/uiux.svg') }}" alt="..."></div>
                                <div class="col-lg-8 ">
                                    <h5 class="web-heading">UI/UX Design</h5>
                                </div>
                                <p class="web-pera">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo.</p>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row service-row second1">
                    <div class="col-lg-4 col-12 service-col col-ad">

                        <div class="square-div">
                            <div class="row  ">
                                <div class="col-lg-4 "><img class="img-fluid web-image"
                                        src="{{ asset('assets/slicing_web/graphic.svg') }}" alt="..."></div>
                                <div class="col-lg-8 ">
                                    <h5 class="web-heading">Web Development</h5>
                                </div>
                                <p class="web-pera">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 service-col col-ad">
                        <div class="square-div service-col">
                            <div class="row ">
                                <div class="col-lg-4 "><img class="img-fluid web-image"
                                        src="{{ asset('assets/slicing_web/digital.svg') }}" alt="..."></div>
                                <div class="col-lg-8 ">
                                    <h5 class="web-heading">App Developement</h5>
                                </div>
                                <p class="web-pera">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12 ">
                    </div>

                </div>
            </div>
        </section>
        <section class="four">

            <div class="container">
                <p class="services-pera text-center">OUR WORK</p>
                <h2 class="services-head text-center">Products we are proud of</h2>
                <div class="row service-row">
                    <div class="col-lg-4 col-12 service-col col-ad">

                        <div class="square-div1 ">
                            <img class="img-fluid " src="{{ asset('assets/slicing_web/faceme_img.png') }}" alt="...">
                            <div class="absoulute_div">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h6 class="absolute-heading"> First Face Me</h6>
                                    </div>
                                    <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                                class="img-fluid  img-size"
                                                src="{{ asset('assets/slicing_web/apple.svg') }}"
                                                style="width: 30px ;height: 30px;" alt="...">&nbsp; <img
                                                class="img-fluid " src="{{ asset('assets/slicing_web/android.svg') }}"
                                                style="width: 30px ;height: 30px;" alt="...">

                                        </span></div>


                                </div>
                                <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 col-ad ">
                        <div class="square-div1 ">
                            <img class="img-fluid " src="{{ asset('assets/slicing_web/stunii_img.png') }}" alt="...">
                            <div class="absoulute_div">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h6 class="absolute-heading"> First Face Me</h6>
                                    </div>
                                    <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                                class="img-fluid  img-size"
                                                src="{{ asset('assets/slicing_web/apple.svg') }}"
                                                style="width: 30px ;height: 30px;" alt="...">&nbsp; <img
                                                class="img-fluid " src="{{ asset('assets/slicing_web/android.svg') }}"
                                                style="width: 30px ;height: 30px;" alt="...">

                                        </span></div>


                                </div>
                                <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo.</p>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-12 col-ad">
                        <div class="square-div1">
                            <img class="img-fluid " src="{{ asset('assets/slicing_web/holafish1_img.png') }}"
                                alt="...">
                            <div class="absoulute_div">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h6 class="absolute-heading"> First Face Me</h6>
                                    </div>
                                    <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                                class="img-fluid  img-size"
                                                src="{{ asset('assets/slicing_web/apple.svg') }}"
                                                style="width: 30px ;height: 30px;" alt="...">&nbsp; <img
                                                class="img-fluid " src="{{ asset('assets/slicing_web/android.svg') }}"
                                                style="width: 30px ;height: 30px;" alt="...">

                                        </span></div>


                                </div>
                                <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo.</p>

                            </div>
                        </div>
                    </div>

                </div>
                <center> <button type="button" class="btn btn  radius-btn radius1 btn-lg  " data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">View More</button></center>

            </div>
        </section>
        <section class="five">
            <div class="container">
                <p class="services-pera text-center">WHO WE ARE</p>
                <h2 class="services-head text-center"> Technologies we are proficient in</h2>
                <div class="row">

                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/swift.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Swift</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/kotlin.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Kotlin</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/java.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Java</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/objc.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Objective C</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/flutter.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Flutter</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/Group 18548.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Angular</p>
                    </div>


                </div>
                <div class="row">

                    <div class="col-lg-2 col-12"><img class="img-fluid web-image" src="{{ asset('assets/slicing_web/php.svg') }}"
                             alt="...">
                        <p class="services-head heads1 text-center">php</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/firebase.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Firebase</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/js.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Javascript</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                        src="{{ asset('assets/slicing_web/xd.svg') }}" 
                            alt="...">
                        <p class="services-head heads1 text-center">Adobe XD</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/figma.svg') }}" alt="...">
                        <p class="services-head heads1 text-center"> Figma</p>
                    </div>
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/photoshop.svg') }}"
                            alt="...">
                        <p class="services-head heads1 text-center">Photoshop</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/illustrator.svg') }}" alt="...">
                        <p class="services-head heads1 text-center">Illustrator</p>
                    </div>
                    <div class="col-lg-10 col-12"><img class="img-fluid web-image"
                            src="{{ asset('assets/slicing_web/android-1.svg') }}" alt="..."
                            style="width: 70px ;height: 60px;">
                        <p class="services-head heads123 text-center">Android</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="six">
            <div class="container">
                <div class="row  review-row">
                    <div class="col-lg-6 col-12 ">
                        <p class="services-pera1 ">REVIEWS</p>
                        <h2 class=" services-head">Our clients love us</h2>
                    </div>
                    <div class="col-lg-6 col-12   float-end" style="display:inline-flex"> <img
                            class="img-fluid  margineimg" src="{{ asset('assets/slicing_web/Vector.svg') }}" alt="...">
                    </div>

                </div>
                <div class="review-div">
                    <div class="row review-box">
                        <div class="col-lg-2 col-12 text-center"> <img class="img-fluid dp-imag "
                                src="{{ asset('assets/slicing_web/dp.png') }}" alt="...">
                        </div>
                        <div class="col-lg-10 col-12">
                            <p class="review-head ">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla paria tur. Excep teur sint occaecat cupidatat non proident.</p>
                            <strong class="services-head1">Adam Stepherson</strong>
                        </div>

                    </div>
                </div>
                <div class="pre-next" style="display: inline-flex;">
                    <img class="img-fluid  " src="{{ asset('assets/slicing_web/next.svg') }}"
                        alt="...">&nbsp;&nbsp;&nbsp;
                    <img class="img-fluid  " src="{{ asset('assets/slicing_web/next.svg') }}" alt="...">
                </div>
            </div>
        </section>




        <section class="seven">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h5 class="services-head12"> Say</h5>
                        <h1 class="services-head13"> Hello!</h1>
                        <div class="inline-icon" style="display: inline-flex;">
                            <img class="img-fluid  " src="{{ asset('assets/slicing_web/call.svg') }}"
                                alt="...">&nbsp;&nbsp;<p class="call">+91 7018819920, +91 7876613739</p>
                        </div><br>
                        <div class="inline-icon" style="display: inline-flex;">
                            <img class="img-fluid  " src="{{ asset('assets/slicing_web/mail.svg') }}"
                                alt="...">&nbsp;&nbsp;<p class="call">info@gracecoders.com</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <h4 class="project-inquery">For projects inquiries</h4>
                        <form action="#" method="post">
                            @csrf
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" name="name" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput" class="input-float">Name</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="email" class="form-control" name="email" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput" class="input-float">Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">

                                    <div class="input-group mb-3">
                                        <button class="btn btn-color dropdown-toggle btn-contact" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"> +91</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">+41</a></li>
                                            <li><a class="dropdown-item" href="#">+91</a></li>
                                            <li><a class="dropdown-item" href="#">+56</a></li>
                                        </ul>
                                        <input type="text" class="form-control input-contact" name="phone_no"
                                            id="floatingInput" aria-label="Text input with dropdown button"
                                            placeholder="Contact-no">
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3 mt-3">

                                <input type="text" class="form-control" name="message" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput" class="input-float">Message</label>
                            </div>
                            <button type="submit" class="btn btn  radius-btn radius1 btn-lg  ">submit</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endsection
