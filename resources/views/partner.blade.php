@extends('layout.index', ['active' => 'partner'])
@section('title', 'Partner')
@section('content')


<body id="partner">
  @include('layout.php.analyticstracking')

  <aside class="side-nav">
    @include('layout.sidebar') 
  </aside>

<section > 
  <div class="logo">
    <div>
      <div>
        <a href="{{url('/home')}}">
          <img src="{{url('images/logos.png')}}" alt="CPLUSco Badminton" class="img-logo">
          <img src="{{url('images/logos-white.png')}}" alt="CPLUSco Badminton" class="img-logo-white">
        </a>
      </div>
    </div>
  </div>

  <!-- document content -->
  <div class="header">
   <div class="title-header"> 
    <div>Become A Part of Our Greatest Team</div>
   </div>
  </div>

  <div class="section sponsor-list text-center">
      <h4><strong>Our Current Partners</strong></h4>
      <p style="text-align:center;"> Swipe to navigate </p>
    <div class="sponsor-flash">
      <div>
        <div class="sponsor-box">
          <a href="http://living.cplusco.com" target="_blank"><img src="http://badminton.com.au/partners/white-sponsor/cplusco-living.png" alt="CPLUSco Living"></a> 
        </div>
      </div>
      <div>
        <div class="sponsor-box">
          <a href="http://energy.cplusco.com" target="_blank"><img src="http://badminton.com.au/partners/white-sponsor/cplusco-energy.png" alt="CPLUSco Energy"></a> 
        </div>
      </div>
      <div>
        <div class="sponsor-box">
          <a href="http://www.hillsideresidences.com.au" target="_blank"><img src="http://badminton.com.au/partners/white-sponsor/hillsideresidences.png" alt="Hillsideresidences"></a> 
        </div>
      </div>
      <div>
        <div class="sponsor-box">
          <a href="http://www.etaclocal.com.au" target="_blank"><img src="http://badminton.com.au/partners/white-sponsor/etaxlocal.png" alt="etax local"></a> 
        </div>
      </div>
      <div>
        <div class="sponsor-box">
          <a href="http://www.getasean.com" target="_blank"><img src="http://badminton.com.au/partners/white-sponsor/getasean.png" alt="Getasean.com"></a> 
        </div>
      </div>
    </div>
  </div>
    <div class="section sponsor-brief">
    <div class="row">
      <div class="col-sm-9">
        <h4><strong>Become A Part of Our Greatest Team</strong></h4>
        <p>
      If you are interested to become a part of our greatest team as sponsor, Please contact us
      </p>
      <br>
        <div class="contact">
          <div class="contact-boxes">
            <h4><strong>Brisbane, AU</strong></h4>
            <p class="contact-words">For sponsorship, advertising and general enquiries. Contact our office:</p>
            <address>
                <p>
                <span class="contact-office">CPLUSco - Badminton Division</span><br>
                CPLUSco Pty Ltd.,<br>
                Riparian Plaza - Level 36 <br> 
                71 Eagle St.<br>     
                Brisbane QLD 4000<br>   
                AUSTRALIA 
              </p>
              <p>
                P : <a href="tel:+61731213265">+61 7 3121 3265</a><br>
                F : <a href="tel:+61731213030">+61 7 3121 3030</a><br>        
                E : <a href="mailto:badminton@cplusco.com" target="_blank">badminton@cplusco.com</a>
              </p>
              <p>
                Facebook : <a href="https://www.facebook.com/badminton.cplusco/" target="_blank">CPLUSco Badminton Brisbane</a>
              </p>
            </address>
            <address>
              <p>Direct enquiries:<br>Rynaldo Wahyudi,<br>M : <a href="tel:+61413226610">+61 413 226 610</a></p>
            </address>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  @include('layout.footer')

  @include('layout.script')
  @yield('script')

</body>

@endsection

@section('script')
<script>
$(document).ready(function(){
    $('.sponsor-flash').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,   
        dots: false,
        infinite: true,
        // speed: 1000,
        // fade: true,
        cssEase: 'linear',
        pauseOnHover:false,
        responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
    slickArrows();
});
</script>
@endsection