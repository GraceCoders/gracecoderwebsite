@extends('layout.main')
@section('main-container')

<body>
    <section class="top-div2">
        <div class="container">
            <div class="row row1">
                <div class="col-lg-5 col-12" >
                    <img class="img-fluid logo-img" src="{{asset('assets/slicing_web/logo.svg')}}" alt="...">

                </div>
                <div class="col-lg-1 col-12" >
                    <!-- <div class="anchor" style="display:inline-flex"> -->
                     <h6 class="headings"><a  class="colors" href="{{route('home')}}">Home</a></h6></div>
                     <div class="col-lg-1 col-12" >
                         <h6 class="headings"><a class="colors" href="{{route('about')}}">About</a></h6></div>
                         <div class="col-lg-1 col-12" >
                             <h6 class="headings" ><a  class="colors" href="{{route('portfolio')}}">Portfolio</a></h6></div>
                             <div class="col-lg-1 col-12" >
                                 <h6 class="headings"><a class="colors" href="{{route('contact')}}">Contact</a></h6></div>
                                 <div class="col-lg-3 col-12" >
                                     <h6 class=""> <button type="button" class="btn btn  radius-btn1 btn-lg  " >Build my product&nbsp;<img  class="img-fluid" id="plus_image"  src="slicing_web/arrow.svg" alt="..."></h6>
                     </div>



                </div>
            </div>
        <center> <h1 class="heads-color">About <span class="about_us">Us</span></h1></center></section>
    <section class="second_sec">
        <div class="container">
        <div class="row margin-row">
            <div class="col-lg-6 col-12 cols"><img class="img-fluid logo-img" src="{{asset('assets/slicing_web/company_img.png')}}" alt="..."></div>
            <div class="col-lg-6 col-12 cols"><h6 class="headinds_about">WHO WE ARE</h6>
                <h1 class="trusted_head">A trusted mobile & web
                   <br> development company</h1>
                   <p class="trusted_head heads1">Mobile app development is rapidly growing. From retail, telecommunications and e-commerce to insurance, healthcare and government, organizations across industries must meet user expectations for real-time, convenient ways to conduct transactions and access information. Today, mobile devices—and the mobile applications that unlock their value—are the most popular way for people and businesses to connect to the internet. To stay relevant, responsive and successful, organizations need to develop the mobile applications that their customers, partners and employees demand.</p>
            </div>

            </div>
            </div>


    </section>



  <section class="fourth">
        <div class="container ">
          <center><h2 class="trusted_headss">Great things in business are never done alone.
            They’re done by a team of people.</h2></center>
        </div>
        </section>
        <section class="fivth-sec">
            <div class="container ">
              <center><h6 class="trusted_headingss">lead by the best </h6>
                <h2 class="trusted_headsss">Meet our leadership </h2></center>
                <div class="row center-div">
                    <div class="col-lg-6 col-12"><div class=" float-end"><img class="img-fluid " src="{{asset('assets/slicing_web/nishant.png')}}" alt="..."><center><h2 class="heading-margin1">Nishant Bhardwaj</h2><p class="heading-margin1">(Mobile App Developer)</p>></center></div></div>
                    <div class="col-lg-6 col-12"><div class=""><img class="img-fluid logo-img" src="{{asset('assets/slicing_web/ajay.png')}}" alt="..."><h2 class="heading-margin2" style="font-family:Billy Ohio"> Ajay Kumar</h2><p class="heading-margin21">(Business Development Executive)</p></div></div>
                </div>
            </div>
            </section>


            <section class="fivth-sec">
                <div class="container ">
                  <center><h6 class="trusted_headingss">Our process </h6>
                    <h2 class="trusted_headsss">Journey from ideation to launch </h2></center>
                    <div class="row">

                        <div class="col-lg-3 col-12"><img class="img-fluid web-image discover" src="{{asset('assets/slicing_web/discover.svg')}}" alt="..."></div>
                        <div class="col-lg-2 col-12"><img class="img-fluid web-image" src="{{asset('assets/slicing_web/design.svg')}}" alt="..."></div>
                        <div class="col-lg-3 col-12"><img class="img-fluid web-image discover1" src="{{asset('assets/slicing_web/develop.svg')}}" alt="..."></div>
                        <div class="col-lg-2 col-12"><img class="img-fluid web-image" src="{{asset('assets/slicing_web/test.svg')}}" alt="..."></div>
                        <div class="col-lg-2 col-12"><img class="img-fluid web-image" src="{{asset('assets/slicing_web/launch.svg')}}" alt="..."></div>


                            </div>
                           <br>
<div class="">
<ul class="base-timeline">
  <li class="base-timeline__item">
    <span class="base-timeline__summary-text">Discover</span></li>
  <li class="base-timeline__item
             base-timeline__item--active">
    <span class="base-timeline__summary-text design">Design</span></li>
  <li class="base-timeline__item">
    <span class="base-timeline__summary-text">Develop</span></li>
    <li class="base-timeline__item">
        <span class="base-timeline__summary-text">Test</span></li>

  <li class="base-timeline__item">
    <span class="base-timeline__summary-text">Launch</span></li>
</ul>
</div>

                </div>
                </section>


                <section class="fivth-sec">
                    <div class="container ">
                      <center><h6 class=" trusted_headingss">GRACECODERS </h6>
                        <h2 class="trusted_headsss">Life & Culture </h2></center>
                        <div class="row">
                            <div class="col-lg-4 col-12"><img class="img-fluid  " src="{{asset('assets/slicing_web/img1.png')}}" alt="..."></div>
                            <div class="col-lg-4 col-12"><img class="img-fluid " src="{{asset('assets/slicing_web/img2.png')}}" alt="..."  style=" height: 280px; width:400px;"></div>
                            <div class="col-lg-4 col-12"><img class="img-fluid " src="{{asset('assets/slicing_web/img3.png')}}" alt="..."></div>

                    </div>
                    </section>


@endsection
