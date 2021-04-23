@extends('layout.index', ['active' => 'venue'])
@section('title', 'Venue')
@section('content')


<body id="venue">
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
  <div class="section schedule">
    <h3>Brisbane, AU </h3>
    <table>
    <thead>
      <tr>
        <th rowspan="2">Day</th>
        <th colspan="2">Southbank (TAFE)</th>
      </tr>
      <tr>
        <th>Social Session</th>
        <th>Training Session</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Wednesday</td>
        <td rowspan="2"><a href="#tafe" class="block">6:30pm - 9:30pm</a></td>
        <td>-</td>
      </tr>
      <tr>
        <td>Thursday</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Saturday</td>
        <td><a href="#tafe" class="block">1:30pm - 4:30pm</a></td>
        <td><!-- <a href="http://badminton.com.au/en/training.php" class="block">12:00pm - 1:00pm</a>(Beginner/Intermediate Class) --></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="tafe" class="section venue">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        {!!$venue->text!!}
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