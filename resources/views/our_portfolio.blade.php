@extends('layout.main')
@section('main-container')
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
                    <h6 class="headings"><a class="colors" href="{{ route('portfolio') }}">Portfolio</a></h6>
                </div>
                <div class="col-lg-1 col-12">
                    <h6 class="headings"><a class="colors" href="{{ route('contact') }}">Contact</a></h6>
                </div>
                <div class="col-lg-3 col-12">
                    <h6 class=""> <button type="button" class="btn btn  radius-btn1 btn-lg  ">Build my
                            product&nbsp;<img class="img-fluid" id="plus_image"
                                src="{{ asset('assets/slicing_web/arrow.svg') }}" alt="...'"></h6>
                </div>



            </div>
        </div>
        <center>
            <h1 class="heads-color">Our <span class="about_us">Portfolio</span></h1>
        </center>
    </section>
    <section class="four2">

        <div class="container">

            <div class="row service-row">
                <div class="col-lg-4 col-12 service-col">

                    <div class="square-div1 ">
                        <img class="img-fluid " src="{{ asset('assets/slicing_web/faceme_img.png') }}" alt="...">
                        <div class="absoulute_div">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h6 class="absolute-heading"> First Face Me</h6>
                                </div>
                                <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                            class="img-fluid  img-size" src="{{ asset('assets/slicing_web/apple.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">&nbsp; <img class="img-fluid "
                                            src="{{ asset('assets/slicing_web/android.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">

                                    </span></div>


                            </div>
                            <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 ">
                    <div class="square-div1 ">
                        <img class="img-fluid " src="{{ asset('assets/slicing_web/stunii_img.png') }}" alt="...">
                        <div class="absoulute_div">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h6 class="absolute-heading"> First Face Me</h6>
                                </div>
                                <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                            class="img-fluid  img-size" src="{{ asset('assets/slicing_web/apple.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">&nbsp; <img class="img-fluid "
                                            src="{{ asset('assets/slicing_web/android.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">

                                    </span></div>


                            </div>
                            <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo.</p>

                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-12">
                    <div class="square-div1">
                        <img class="img-fluid " src="{{ asset('assets/slicing_web/holafish1_img.png') }}" alt="...">
                        <div class="absoulute_div">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h6 class="absolute-heading"> First Face Me</h6>
                                </div>
                                <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                            class="img-fluid  img-size" src="{{ asset('assets/slicing_web/apple.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">&nbsp; <img class="img-fluid "
                                            src="{{ asset('assets/slicing_web/android.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">

                                    </span></div>


                            </div>
                            <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo.</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="four2">
        <div class="container">
            <div class="row service-row">
                <div class="col-lg-4 col-12 service-col">
                    <div class="square-div1 ">
                        <img class="img-fluid " src="{{ asset('assets/slicing_web/faceme_img.png') }}" alt="...">
                        <div class="absoulute_div">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h6 class="absolute-heading"> First Face Me</h6>
                                </div>
                                <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                            class="img-fluid  img-size" src="{{ asset('assets/slicing_web/apple.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">&nbsp; <img class="img-fluid "
                                            src="{{ asset('assets/slicing_web/android.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">
                                    </span>
                                </div>
                            </div>
                            <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 ">
                    <div class="square-div1 ">
                        <img class="img-fluid " src="{{ asset('assets/slicing_web/stunii_img.png') }}" alt="...">
                        <div class="absoulute_div">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h6 class="absolute-heading"> First Face Me</h6>
                                </div>
                                <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                            class="img-fluid  img-size" src="{{ asset('assets/slicing_web/apple.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">&nbsp; <img class="img-fluid "
                                            src="{{ asset('assets/slicing_web/android.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">
                                    </span></div>
                            </div>
                            <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="square-div1">
                        <img class="img-fluid " src="{{ asset('assets/slicing_web/holafish1_img.png') }}" alt="...">
                        <div class="absoulute_div">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h6 class="absolute-heading"> First Face Me</h6>
                                </div>
                                <div class="col-lg-6 col-12"><span class=" img-slicing float-end"><img
                                            class="img-fluid  img-size" src="{{ asset('assets/slicing_web/apple.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">&nbsp; <img class="img-fluid "
                                            src="{{ asset('assets/slicing_web/android.svg') }}"
                                            style="width: 30px ;height: 30px;" alt="...">
                                    </span>
                                </div>
                            </div>
                            <p class="pera-div">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
