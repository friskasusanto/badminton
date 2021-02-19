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
        {!!$partner->text!!}
      <br>
        <div class="contact">
          <div class="contact-boxes">
            {!!$contact->text!!}
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