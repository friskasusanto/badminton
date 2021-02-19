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
	        {!!$about->text!!}
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
	        @foreach($galery as $g)
	          	<div class="gallery-boxes">
					<div class="gallery-content">
						<a href="{{url('/try', $g->id)}}" class="open-right-window" target="blank">
							<div class="gallery-image">
								<img src="{{url('gallery/'.$g->img)}}" class="center img-responsive"/>	
							</div>

							<div class="gallery-caption">
								<p style="color: #fff">{{$g->name}}</p>
							</div>
						</a>
					</div>
				</div>
			@endforeach
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