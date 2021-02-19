@extends('layout.index', ['active' => 'membership'])
@section('title', 'Membership')
@section('content')


<body id="membership">
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
    <div>Lets Feel The Game</div>
   </div>
  </div>
  <div class="section company">
    <div class="row">
      <div class="col-sm-9">
        {!!$membership->text!!}
      </div>
    </div>
  </div>
  <!--<div class="section">
    ?php include $root."/php/contact.php"; ?
  </div>-->
</section>



  @include('layout.footer')

  @include('layout.script')
  @yield('script')

</body>

@endsection