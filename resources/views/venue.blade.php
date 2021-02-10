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
        <td><a href="http://badminton.com.au/en/training.php" class="block">12:00pm - 1:00pm</a>(Beginner/Intermediate Class)</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div id="tafe" class="section venue">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <h4>Southbank TAFE</h4>
        <h6>Les Allan Sports Hall - Life Science Building (A)</h6>
        <p> 14 Glenelg St, South Brisbane QLD 4101<br>
          (Corner Merivale and Glenelg St, opposite Brisbane Convention Centre)<br>
        </p><br>
        <strong>Leaders</strong><br>
        <ul class="col-xs-6">
          <li>Amy Hung</li>
          <li>Cary Lam</li>
          <li>Claire Chen</li>
          <li>David Cai</li>
        </ul>
        <ul class="col-xs-6">
          <li>Lily Heng</li>
          <li>Rynaldo Wahyudi</li>
          <li>Sugeng Wicaksono</li>
          <li>Yanni Chin</li>
        </ul>
        <strong>Facebook Page</strong><br>
        <p>Follow our Brisbane page <a href="https://www.facebook.com/badminton.cplusco" target="_blank" class="font-italic">here</a></p>
    </div>
    <div class="col-xs-12 col-sm-6">
      <p>
        <a target="_blank" title="click to open in google maps" href="http://maps.google.com/maps?q=Southbank Institute of Technology - Les Allan Sports Hall - Life Science Building (A) ,  South Brisbane, au@-27.478643, 153.020172">
        <img alt="14 Glenelg Street  ,  South Brisbane, au - Map view" src="https://maps.googleapis.com/maps/api/staticmap?zoom=15&amp;size=300x240&amp;maptype=roadmap&amp;markers=-27.478643, 153.020172&amp;key=AIzaSyDtmnH6A3wXzeodRMsMRqsdumpIAHXRsVw&amp;sensor=false">
        </a>
      </p>
      <p style="color:red">*You can click on the map to use gmaps</p>
      <strong>Facilities</strong>
      <p>Free shower, free parking within facility during the session<br>
          <a class="font-italic" target="_blank" href="http://badminton.com.au/carpark/carpark%20-%20southbank%20institute_2.jpg">Carpark entrance click here</a>
      </p>
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