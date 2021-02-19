<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>
function slickArrows() {
	$('.slick-prev').html("<span class='glyphicon glyphicon-chevron-left'></span>");
	$('.slick-next').html("<span class='glyphicon glyphicon-chevron-right'></span>");
}
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (Session::has('flash_message'))
	    <?php $status = (Session::get('flash_status') == 200)?'success':'error';?>
	    <?php $status_type = (Session::get('flash_status') == 200)?'Success':'Failed';?>
	    <script type="text/javascript">
	        swal({   
	            type: "{{ $status }}",
	            title: "{{ $status_type }}",   
	            text: "{{ Session::get('flash_message') }}",   
	            showConfirmButton: false ,
	            showCloseButton: true,
	            footer: ''
	        });
	    </script>
	@endif

