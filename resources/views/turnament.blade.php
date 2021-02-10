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
        <h4><strong>CPLUSco Mixed Team Event 2017</strong></h4>
        <p><strong>September 23rd, 2017 | Brisbane, AU</strong></p>
        <p>Half day competition involving 8 teams of 6 players to contend against other teams.</p>
        <p>A team consist of 4 men &amp; 2 woman, devide in 2 groups AB and BC team.
          <br>AB team (max. 2 men with grade A and min. 3 players of grade B,<br>BC team (max. 2 men with grade B and min. 3 players of grade C</p></p>
        <p>The winner will be presented with trophies at the end of the event. <br>This event starts from 12pm to 5pm at Southbank TAFE sport hall</p>
        <p>
          <strong>Entry fee:</strong> $150/Team (6 Players, i.e. $25 per player)<br>
          <strong>Entry close:</strong> Sept 16th, 2017 at 12:00pm Brisbane Time
        </p>
        <p>
          <!-- <a href="../tournament/cplusco-mixed-team-event-sept-23rd-2017">CPLUSco Mixed Team Event 2017 Detail</a><br> -->
          <!-- <a href="../tournament/cplusco-mixed-team-event-sept-23rd-2017/schedule.php">CPLUSco Mixed Team Event 2017 Schedule</a><br> -->
          <!-- <a href="../tournament/cplusco-mixed-team-event-sept-23rd-2017/result.php">CPLUSco Mixed Team Event 2017 Result</a><br> -->
        </p>
      </div>
    </div>
    <br/><br/>
    <div class="row">
      <div class="col-sm-9">
        <h4><strong>CPLUSco Badminton League 2016</strong></h4>
        <p><strong>August 3rd ~ September 21st, 2016 | Brisbane, AU</strong></p>
        <p>Weekly competition involving team of 4 players to contend against other teams.<br> Points will be awarded and accumulated each week to contribute to the final score of the season.</p>
        <p>The winner will be presented with trophies at the end of the season. <br>This season starts on August 3rd, held every Wednesday for 7 weeks.</p>
        <p>
          <strong>Entry fee:</strong> $280/Team (4 Players)<br>
          <strong>Entry close:</strong> July 22nd, 2016 at 12:00pm Brisbane Time
        </p>
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