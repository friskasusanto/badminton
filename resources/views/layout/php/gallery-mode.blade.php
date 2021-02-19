<!DOCTYPE html>

<html lang="en" style="background-color:#000;">

<head>

@include('layout.html') 
<meta name="description" content="{{$galery->name}} - Photo Album">
	

</head>

<body style="background-color:#000;">

<div id="right-window" class="col-xs-12">

	<div id="right-window-heading" class="col-xs-12">

		<div class="close-right-window back-url">Close <span class="glyphicon glyphicon-remove"></span></div>

	</div>

	<div id="right-window-body" class="col-xs-12">
		@foreach ($img as $i)
		<div class="gallery-boxes col-xs-12 col-sm-6 col-md-4">
			<div class="gallery-content">
				<div class="gallery-image">
					<img src="{{url('gallery/'.$i->img)}}" class="center img-responsive"/>
				</div>
			</div>
		</div>
		@endforeach
		<script src="{{asset('js/form.handler.js')}}"></script>
	</div>

</div>

<script>

	$('#right-window-body').css({

		'min-height': window.innerHeight - $('#right-window-heading').outerHeight(true),

	});

</script>

</body>

</html>



<!-- // $('body').height(screen.availHeight)

// alert(screen.availWidth+" x "+screen.availHeight+", "+window.innerWidth+" x "+window.innerHeight); -->