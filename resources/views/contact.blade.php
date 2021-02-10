@extends('layout.index', ['active' => 'contact'])
@section('title', 'Contact')
@section('content')


<body id="contact">
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
      <div>Get In Touch With Us</div>
    </div>
  </div>
  <div class="section">
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
</section>


  @include('layout.footer')

  @include('layout.script')
  @yield('script')

</body>

@endsection