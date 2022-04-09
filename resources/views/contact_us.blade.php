@extends('layout.main')
@section('main-container')

    <body>
        <section class="top-div1">
            <div class="container">
                <div class="row row1">
                    <div class="col-lg-5 col-12">
                        <img class="img-fluid logo-img" src="{{ asset('assets/slicing_web/logo.svg') }}" alt="...">

                    </div>
                    <div class="col-lg-1 col-12">
                        <!-- <div class="anchor" style="display:inline-flex"> -->
                        <h6 class="headings"><a class="colors" href="{{ route('home') }}">Home</a></h6>
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
            </div>
            <center>
                <h1 class="heads-color">Contact <span class="about_us">Us</span></h1>
            </center>
        </section>
        <section class="seven1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <center> <img class="img-fluid  " src="{{ asset('assets/slicing_web/contact illus.png') }}"
                                alt="..."></center>
                    </div>
                    <div class="col-lg-6 col-12">
                        <h4 class="project-inquery">Fill the form below to get in touch</h4>
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="input-float">Name</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput" class="input-float">Email</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput" class="input-float">+91</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="input-float">Message</label>
                        </div>
                        <button type="button" class="btn btn  radius-btn radius1 btn-lg  " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">submit</button>
                        <br>
                        <div class="inline-icon" style="display: inline-flex;">
                            <img class="img-fluid  " src="{{ asset('assets/slicing_web/mail.svg') }}" alt="...">&nbsp;<p
                                class="call1">info@gracecoders.com</p>&nbsp;&nbsp; <img class="img-fluid  "
                                src="{{ asset('assets/slicing_web/call.svg') }}" alt="...">&nbsp;<p class="call1">
                                +91 7018819920, +91 7876613739</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endsection
