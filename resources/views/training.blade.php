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
  <div class="header">
   <div class="title-header"> 
    <div>Discover Your Potential</div>
   </div>
  </div>
  <div class="section company">
    <div class="row">
      <div class="col-sm-9">
        <h4><strong>Badminton Training Program</strong></h4>
        <p>
        CPLUSco badminton offers a unique training program, evolved from traditional training and combined with latest sport science to suit every one regardless of age, gender and background.  The goal of this program is to develop badminton skills in a fun, safe and effective way.
        </p>
        <p>  
        This program is specially designed by our head coach Mr. Ashley Moss who has an outstanding profile as a professional player and more importantly the vast coaching experience both in Australia and overseas.  The highly engaging and interactive class ensures the best quality of training.
        </p>
        <p>
          <br>
          <strong>Pre-requisite:</strong> Keen to learn and have some fun.
        </p>
      </div>
    </div>
  </div>
  <div class="section schedule">
    <div class="row">
      <div class="col-sm-9">
        <h4><strong>Class Schedule</strong></h4>
      <p><strong>Every Thursday</strong></p>
      </p>
        <table>
          <thead>
            <tr>
              <th>Class</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Beginner/ Intermediate Class</td>
              <td>12:00pm - 1:00pm</td>
            </tr>
          </tbody>
        </table>
          <br>
          <strong>Location:</strong> Only available at <a href="../en/venue.php#tafe">Southbank TAFE</a>, centrally located to suit players from all suburbs in brisbane, complementary parking is available.
        </p>
      </div>
    </div>
  </div>
  <div class="section schedule">
    <div class="row">
      <div class="col-sm-9">
        <h4><strong>Class Price</strong>: 2 options</h4>
      </p>
        <table>
          <thead>
            <tr>
              <th>Class</th>
              <th>Price/Class</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="text-align:left;">Casual</td>
              <td style="text-align:left;">$25</td>
            </tr>
            <tr>
              <td style="text-align:left;">Block of 4 classes</td>
              <td style="text-align:left;">$20 ($80 total)<br>
              50% deposit, i.e. $40, required before the first class; the balance,i.e.$40, required on the first class.
              </td>
            </tr>
          </tbody>
        </table>
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