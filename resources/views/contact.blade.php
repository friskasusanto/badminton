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
          {!!$contact->text!!}
        </div>
      </div>
  </div>
</section>


  @include('layout.footer')

  @include('layout.script')
  @yield('script')

</body>

@endsection