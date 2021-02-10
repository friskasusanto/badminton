@extends('layout.index', ['active' => 'about'])
@section('title', 'About')
@section('content')


<body id="about">
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
	   	<div>More Than Just A Team</div>
	   </div>
	  </div>
	  <div class="section about">
	    <div class="row">
	      <div class="col-sm-9">
	        <h4><strong>The Team</strong></h4>
	        <p><strong>CPLUSco Badminton Inc</strong>&nbsp;is a premier social badminton club for motivated Professionals, 
	        Business persons and Students across different fields. 
	        As a progressive club, we strive to become sporting and networking environment which create stimulating, 
	        enriching atmosphere for badminton players from various backgrounds and skill levels.
	        </p>
	        <p>
	        In CPLUSco Badminton we promote and facilitate participation in badminton at all levels.
	        </p>
	      </div>
	    </div>
	  </div>
	  <div class="section gallery">
	    <div class="row">
	      <div id="gallery" class="col-xs-12" data-get="img" data-url="gallery-mode.php" 
	      data-done="galleryOn" data-fail="galleryOff">
	        <h4><strong>Gallery</strong></h4>
	        <div class="swipe-nav">
	          <span class="glyphicon glyphicon-chevron-left"></span>
	          <span class="glyphicon glyphicon-chevron-left"></span>
	          <span class="glyphicon glyphicon-chevron-left"></span>
	          &nbsp;&nbsp;<em>swipe to navigate</em>&nbsp;&nbsp;
	          <span class="glyphicon glyphicon-chevron-right"></span>
	          <span class="glyphicon glyphicon-chevron-right"></span>
	          <span class="glyphicon glyphicon-chevron-right"></span>
	        </div>
	        <div class="autoplay">
	          @include('layout.php.gallery')
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