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
        <h4><strong>Become A Member</strong></h4>
      <p>
      <strong>Membership:</strong><br>
      Annual Membership for $60
    </p>
    <strong>Benefit:</strong>
    <ol>
      <li>Pay $10 per session</li>
      <li>Promote and facilitate participation in badminton at all levels</li>
    </ol>
    <p>
      <strong>What it take to become a member:</strong><br>
      CPLUSco Badminton is for everyone, just come and join us
    </p>
    </div>
    </div>
  </div>
  <div class="section company">
    <div class="row">
      <div class="col-sm-9">
    <h4><strong>Play as A Non-member</strong></h4>
      <p>
      <strong>Casual Player are welcome </strong><br>
      1 casual session for $14<br>
    </p>
    <p>
      <strong>Play with CB's Passes:</strong><br>
      8 Passes for $90
    </p>
    <strong>CB's Passes Benefit:</strong>
    <ol>
      <li>Play as casual player at discounted price</li>
      <li>Passes could be bought as giftcard, lets your family or friend to join you in the game without become a member</li>
      <li>The best choice before you decide to become our member</li>
    </ol>   
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