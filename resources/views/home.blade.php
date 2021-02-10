@extends('layout.index', ['active' => 'home'])
@section('title', 'Home')
@section('content')


<body id="home">
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
  <!-- flash ads -->
    <div class="section">
      <div class="landingFlash">
        <!-- flash content -->
          <div>
            <div class="block">
              <div class="table responsive flash-1"> 
                <div class="table-cell">
                  <h4>COME AND JOIN US</h4>
                  <p>CPLUSco Badminton Inc is a premier social badminton club for motivated Professionals, Business persons and Students across different fields</p>
                  <a class="flash-button" href="{{url('/venue')}}" title="CPLUSco Badminton Brisbane Tournament">Session times</a>
                  <a class="flash-button" href="{{url('/membership')}}" title="CPLUSco Badminton Brisbane Tournament">learn more</a>
                </div>
              </div>
            </div>
          </div>
        <!-- flash content -->
          <div>
            <div class="block">
              <div class="table responsive flash-3"> 
                <div class="table-cell">
                  <h4>Fun and competitive</h4>
                  <p>In CPLUSco Badminton we promote and facilitate participation in badminton at all levels</p>
                  <a class="flash-button" href="{{url('/turnament')}}" title="CPLUSco Badminton Brisbane Tournament">Join Tournament</a>
                </div>
              </div>
            </div>
          </div>
        <!-- flash content -->
          <div>
            <div class="block">
              <div class="table responsive flash-2"> 
                <div class="table-cell">
                  <img src="{{url('images/evolve.png')}}" alt="CPLUSco Badminton Training">
                  <h4>Begin your evolution</h4>
                  <p>We provide every step you need to become a badminton hero</p>
                  <a class="flash-button" href="{{url('/training')}}" title="CPLUSco Badminton Brisbane Training">Join class</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="section facebook-news">
      <div class="facebook-news-header">
        <h4><strong>Facebook News</strong></h4>
        For more info please visit our <a href="https://www.facebook.com/badminton.cplusco/" target="_blank" title="CPLUSco Badminton Brisbane facebook page">CPLUSco Badminton Brisbane</a> facebook page
        <div class="swipe-nav">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="glyphicon glyphicon-chevron-left"></span>
          &nbsp;&nbsp;<em>swipe to navigate</em>&nbsp;&nbsp;
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="glyphicon glyphicon-chevron-right"></span>
        </div>
      </div>
      @include('layout.brisbane')
    </div>
    <!-- partners -->
    <div class="section">
      <div class="partners">
        <div class="text-center">
          <div class="partners-title center">PARTNERS</div>
            <div class="partners-img partners-living">
              <a target="_blank" href="http://living.cplusco.com" data-ads="living" class="__ads_click_">
              </a>
            </div>
            <div class="partners-img partners-energy">
              <a target="_blank" href="http://energy.cplusco.com" data-ads="energy" class="__ads_click_">
              </a>
            </div>
            <div class="partners-img partners-hillside">
              <a target="_blank" href="http://www.hillsideresidences.com.au" data-ads="hillside" class="__ads_click_">
              </a>
            </div>
            <div class="partners-img partners-etax">
              <a target="_blank" href="http://www.etaxlocal.com.au" data-ads="etax" class="__ads_click_">
              </a>
            </div>
            <div class="partners-img partners-getasean">
              <a target="_blank" href="http://www.getasean.com" data-ads="getasean" class="__ads_click_">
              </a>
            </div>
          <div class="partners-img"></div>
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
      $('.landingFlash').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 6000,
          arrows: true,   
          dots: false,
          infinite: true,
          // speed: 1000,
          fade: true,
          cssEase: 'linear',
          pauseOnHover:false,
    });
      slickArrows();
  });
</script>
@endsection


