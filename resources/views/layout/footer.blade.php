<section class="eight">
    <div class="container">
        <div class="row row-sec">
            <div class="col-lg-5 col-12"><img class="img-fluid logo-img" src="{{asset('assets/slicing_web/logo.svg')}}" alt="...">
               <p class="pera4">Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit, sed do eiusmod tempor <br>incididunt.</p>
            </div>
            <div class="col-lg-2 col-12"><p class="pera4">Quick links</p>
           <p class="pera5">Career</p>
           <p class="pera5">Portfolio</p>
           <p class="pera5">Contact</p>


       </div>
            <div class="col-lg-5 col-12"><p class="pera4">Get in touch</p>
               <div class="inline-icon" style="display: inline-flex;">
                   <img class="img-fluid  " src="{{asset('assets/slicing_web/loc.svg')}}" alt="...">&nbsp;&nbsp;&nbsp;<p class="call">F-298, Phase 8B, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab 160055</p>
               </div>

        </div>
    </div>
    <div class="inline-icon" style="display: inline-flex;">
       <img class="img-fluid  " src="{{asset('assets/slicing_web/loc.svg')}}" alt="...">&nbsp;&nbsp;&nbsp; <img class="img-fluid  " src="{{asset('assets/slicing_web/insta.svg')}}" alt="...">&nbsp;&nbsp;&nbsp; <img class="img-fluid  " src="{{asset('assets/slicing_web/twitter.svg')}}" alt="...">&nbsp;&nbsp;&nbsp; <img class="img-fluid  " src="{{asset('assets/slicing_web/linkedin.svg')}}" alt="...">
   </div>
    </div>

</section>


<section  class="footer">
<h6 class="footer-pad"><center>Copyright © 2022 Gracecoders | Terms&conditions | Privacy Policy</center></h6>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</body>
<script>
$('.count').each(function () {
   $(this).prop('Counter',0).animate({
       Counter: $(this).text()
   }, {
       duration: 4000,
       easing: 'swing',
       step: function (now) {
           $(this).text(Math.ceil(now));
       }
   });
});</script>
</html>
