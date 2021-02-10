<div class="news-swipe-place">
	<?php 
		$twoMonthEarlier = strtotime(date('Y-m')) - (60*60*24*30*2);
		$str = file_get_contents('http://dev.cplusco.com/assets/facebook/pluginFb.php?pageid=122151867803860&type=JSON&limit=10&since='.$twoMonthEarlier);
		$fbtl = json_decode($str, true);
		$i = 1;
		foreach ($fbtl['pagefeed'] as $value) { 
		if($value['status_type'] !== 'wall_post')
		{
	?>
	<div class="news-box" fbid="<?php echo $value['id'] ?>">
		<div class="news-content">
			<div class="news-top">
				<div class="news-date text-center">
					<div class="date-news"><strong><?php echo $value['date'] ?></strong></div>
					<div class="month-news"><strong><?php echo $value['short_month'] ?></strong></div>
				</div>
				<div class="news-object">
					<?php if($value['type'] == 'link'){ ?>
						<img src="<?php echo $value['content'] ?>" class="center img-responsive">
					<?php }else if($value['type'] == 'video'){ ?>
						<a href="<?php echo $value['source'] ?>" class="html5lightbox" data-toggle="tooltip" data-placement="top" title="<?php echo $value['name'] ?>">
							<img src="<?php echo $value['full_picture'] ?>" class="center img-responsive">
						</a>
					<?php }elseif ($value['type'] == 'photo') { ?>
						<a href="<?php echo $value['full_picture'] ?>" class="html5lightbox" data-toggle="tooltip" data-placement="top" title="<?php echo $value['name'] ?>">
							<img src="<?php echo $value['full_picture'] ?>" class="center img-responsive">
						</a>
					<?php } ?>
				</div>
			</div>
			<div class="news-text">
				<div class="news-title"><?php echo $value['name'] ?></div>
				<div class="news-time">
					<span class="glyphicon glyphicon-time"></span>
					<?php echo $value['created_post'] ?>
				</div>
				<div class="news-words"><?php echo $value['text'] ?><?php echo isset($value['message'])? $value['message'] : '' ?></div>
			</div>
			<div class="news-footer">
				<div class="news-footer-share">						
					<div class="fb-share-button" data-href="<?php echo $value['link_post'] ?>" data-layout="button_count"></div>
				</div>
				<div class="news-footer-read pull-right">
					<a href="<?php echo isset($value['link_post'])?$value['link_post']:'#' ?>" target="_blank">
						Continue Reading...
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php $i++;}} ?>
</div>
<fbLink id="next" value="<?php echo $fbtl['next'] ?>" until="<?php echo $fbtl['paging']['next']['until'] ?>" />

<script type="text/javascript" src="//cdn.cplusco.com/assets/dotdotdot/jquery.dotdotdot.min.js"></script>
<script type="text/javascript" src="//fgnass.github.io/spin.js/spin.min.js"></script>
<script type="text/javascript">
	function spinning(id)
	{
		var opts = {
		  lines: 13 // The number of lines to draw
		, length: 14 // The length of each line
		, width: 13 // The line thickness
		, radius: 36 // The radius of the inner circle
		, scale: 0.5 // Scales overall size of the spinner
		, corners: 1 // Corner roundness (0..1)
		, color: '#000' // #rgb or #rrggbb or array of colors
		, opacity: 0.25 // Opacity of the lines
		, rotate: 0 // The rotation offset
		, direction: 1 // 1: clockwise, -1: counterclockwise
		, speed: 1 // Rounds per second
		, trail: 60 // Afterglow percentage
		, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
		// , zIndex: 2e9 // The z-index (defaults to 2000000000)
		, className: 'spinner' // The CSS class to assign to the spinner
		, top: '50%' // Top position relative to parent
		, left: '50%' // Left position relative to parent
		, shadow: false // Whether to render a shadow
		, hwaccel: false // Whether to use hardware acceleration
		, position: 'relative' // Element positioning
		}
		var target = document.getElementById(id)
		window.spinner = new Spinner(opts).spin(target);
	}
	$(function(){
		window.feedFetch = false;
		$('.news-swipe-place').on('swipe', function(event, slick, direction){

			// var is_active_last = $('.news-swipe-place .news-box:last-child').hasClass('slick-center');
			var is_nearly_end = $('.news-swipe-place .slick-center:last').nextAll().length;
			var until = $('fblink#next').attr('until');
			if(is_nearly_end < 1 && window.feedFetch == false){
				window.feedFetch = true

				$('.news-swipe-place').slick('slickAdd', '<div class="news-box news-load"> <div id="news-load" style="height:394px;"> </div> <div style="text-align:center; font-weight:bold; font-family:sans-serif; color: black; padding: 15px;"> Loading New Feed </div></div>');
				spinning('news-load');
				var link = 'http://dev.cplusco.com/assets/facebook/pluginFb.php?pageid=122151867803860&type=JSON&until='+until+'&since=<?php echo $twoMonthEarlier ?>';
				$.get(link)
				.done(function(data){
					window.feedFetch = false
					$('.news-load').remove();
					var data = JSON.parse(data);
					$('fblink#next').attr('until', data.paging.next.until)

					$.each(data.pagefeed, function(i, val){
						if($('div[fbid="'+val.id+'"]').length == 0)
						{
							if(val.type == 'link'){ 
								var content = '<div><img src="'+val.picture+'" class="center img-responsive"></div>';
							}else if(val.type == 'video'){	
								var content = '<a href="'+val.source+'" class="html5lightbox" data-toggle-content="lightbox" data-toggle="tooltip" data-placement="top" title="'+val.name+'"><img src="'+val.full_picture+'" class="center img-responsive"></a>';
							}else if(val.type == 'photo'){
								var content = '<a href="'+val.full_picture+'" class="html5lightbox" data-toggle-content="lightbox" data-toggle="tooltip" data-placement="top" title="'+val.name+'"><img src="'+val.full_picture+'" class="center img-responsive"></a>';
							}
							content = content == undefined ?'':content;
							var createdPost = (val.created_post == null)?'' :val.created_post;
							var textPost = (val.text == null)?'' : val.text;
							var namePost = (val.name == null)?'' : val.name;
							var msgPost  = (val.message == null || val.message == 'undefined')?'' : val.message;

							var linkpost = (typeof val.link_post == 'undefined')?'#':val.link_post;
				  			$('.news-swipe-place').slick('slickAdd',
				  				'<div class="news-box" fbid="'+val.id+'">'+
									'<div class="news-content">'+
										'<div class="news-top">'+
											'<div class="news-date text-center">'+
												'<div class="date-news"><strong>'+val.date+'</strong></div>'+
												'<div class="month-news"><strong>'+val.short_month+'</strong></div>'+
											'</div>'+
											'<div class="news-object">'+content+
											'</div>'+
										'</div>'+
										'<div class="news-text">'+
											'<div class="news-title">'+namePost+'</div>'+
											'<div class="news-time">'+
												'<span class="glyphicon glyphicon-time"></span>'+createdPost+
											'</div>'+
											'<div class="news-words">'+textPost+' '+msgPost+'</div>'+
										'</div>'+
										'<div class="news-footer">'+
											'<div class="news-footer-share">'+
												'<div class="fb-share-button" data-href="'+linkpost+'" data-layout="button_count"></div>'+
											'</div>'+
											'<div class="news-footer-read pull-right">'+
												'<a href="'+linkpost+'" target="_blank">'+
													'Continue Reading...'+
												'</a>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>'
							)
						}
					});
				})
			}
		});
		
		$('.news-swipe-place').slick({

		    slidesToShow: 4,

		    slidesToScroll: 4,

		    arrows: false,

		    infinite: false,
		    // touchThreshold : 15,
			
		    responsive: [

			{

				breakpoint: 1024,

			 	settings: {

				    slidesToShow: 4,

				    slidesToScroll: 4,

					arrows: false,

				    infinite: false,

			    	dots: false

				}

			},

			{

				breakpoint: 600,

			  	settings: {

			    	slidesToShow: 2,

					arrows: false,

			    	slidesToScroll: 2

			  	}

			},

			{
				breakpoint: 480,

			  	settings: {

					arrows: false,

			    	slidesToShow: 1,

			    	slidesToScroll: 1,
			    	centerMode: false

			  	}
			},

			{
				breakpoint: 380,

			  	settings: {

					arrows: false,

			    	slidesToShow: 1,

			    	slidesToScroll: 1,
			    	centerMode: false

			  	}
			}

			]

		});	

		$(document).delegate('*[data-toggle-content="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
	})
</script>