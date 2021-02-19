@extends('layout.index', ['active' => 'training'])
@section('title', 'Training')
@section('content')


<body id="training">
  @include('layout.php.analyticstracking')

  <aside class="side-nav">
    @include('layout.sidebar') 
  </aside>

<section> 
<!-- document content -->
{!!$training->text!!}
  <div class="section">
    <div class="contact">
        <div class="contact-boxes">
          {!!$contact->text!!}
        </div>
      </div>
  </div>
<div class="logo">
    <div>
      <a href="{{url('/home')}}">
        <img src="{{url('images/logos.png')}}" alt="CPLUSco Badminton" class="img-logo">
        <img src="{{url('images/logos-white.png')}}" alt="CPLUSco Badminton" class="img-logo-white">
      </a>
    </div>
</div>
</section>



  @include('layout.footer')

  @include('layout.script')
  @yield('script')

</body>