@extends('layout.index', ['active' => 'turnament'])
@section('title', 'Turnament')
@section('content')


<body id="tournament">
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
    <div>Be Ready To Be The Greatest of All</div>
   </div>
  </div>
  <div class="section company">
    <div class="row">
      <div class="col-sm-9">
        {!!$tour->text!!}
        <p>
          <a href="../tournament/cplusco-badminton-league-aug-3-to-sep-21-2016">CPLUSco Badminton League 2016 Detail</a><br>
          <a href="../tournament/cplusco-badminton-league-aug-3-to-sep-21-2016/schedule.php">CPLUSco Badminton League 2016 Schedule</a><br>
          <a href="../tournament/cplusco-badminton-league-aug-3-to-sep-21-2016/result.php">CPLUSco Badminton League 2016 Result</a><br>
        </p>
      </div>
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