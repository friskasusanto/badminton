<div class="menu-button">
    <span class="open-menu glyphicon glyphicon-menu-hamburger" onclick="$('#ul-menu,.menu-button,.menu-close').toggle();$('body').css('overflow', 'hidden')"></span>
</div>
<div class="menu-close">
    <span class="open-menu glyphicon glyphicon-remove" onclick="$('#ul-menu,.menu-button,.menu-close').toggle();$('body').css('overflow', 'auto')"></span>
</div>
<ul id="ul-menu">
	<li>
		<a href="{{url('/home')}}" title="home">Home</a>
	</li>
	<li>
		<a href="{{url('/venue')}}" title="CPLUSco Badminton Brisbane Schedule &amp; Venue">Schedule &amp; Venue</a>
	</li>
	<li>
		<a href="{{url('/turnament')}}" title="CPLUSco Badminton Brisbane Tournament">Tournament</a>
	</li>
	<li>
		<a href="{{url('/membership')}}" title="Join CPLUSco Badminton Brisbane">Membership</a>
	</li>
	<li>
		<a href="{{url('/partner')}}" title="CPLUSco Badminton Brisbane Partners">Partners</a>
	</li>
	<li>
		<a href="{{url('/about')}}" title="About CPLUSco Badminton Brisbane">About Us</a>
	</li>
	<li>
		<a href="{{url('/contact')}}" title="Contact CPLUSco Badminton Brisbane">Contact</a>
	</li>
</ul>