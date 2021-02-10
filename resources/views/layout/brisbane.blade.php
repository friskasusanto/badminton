
<script type="text/javascript" src="http://badminton.com.au/php/facebookfeeds/assets/fbapi.js"></script>

<!-- moment -->
<script type="text/javascript" src="//momentjs.com/downloads/moment.min.js"></script>

<script type="text/javascript">
		
		function parsefeed(val)
		{
			if(val.type == 'link'){ 
				var content = '<div><img src="'+val.picture+'" class="center img-responsive"></div>';
			}else if(val.type == 'video'){	
				var content = '<a href="#" class="html5lightbox" data-toggle-content="lightbox" data-toggle="tooltip" data-placement="top" title="'+val.name+'"><img src="'+val.full_picture+'" class="center img-responsive"></a>';
			}else if(val.type == 'photo'){
				var content = '<a href="#" class="" data-toggle-content="" data-toggle="tooltip" data-placement="top" title="'+val.name+'"><img src="'+val.full_picture+'" class="center img-responsive"></a>';
			}
			content = content == undefined ?'':content;
			var createdPost = moment(val.created_time).fromNow();
			var textPost 	= (val.text == null)?'' : val.text;
			var namePost 	= (val.name == null)?'' : val.name;
			var msgPost  	= (val.message == null || val.message == 'undefined')?'' : val.message;
			var month 		= moment(val.created_time).format('MMM')
			var date 		= moment(val.created_time).format('Do')

			return '<div class="news-box" fbid="'+val.id+'">'+
				'<div class="news-content">'+
					'<div class="news-top">'+
						'<div class="news-date text-center">'+
							'<div class="date-news"><strong>'+date+'</strong></div>'+
							'<div class="month-news"><strong>'+month+'</strong></div>'+
						'</div>'+
						'<div class="news-object">'+content+
						'</div>'+
					'</div>'+
					'<div class="news-text">'+
						'<div class="news-title">'+namePost+'</div>'+
						'<div class="news-time">'+
							'<span class="glyphicon glyphicon-time" style="vertical-align:middle;"></span> <span style="font-size:13px;">'+createdPost+'</span>'+
						'</div>'+
						'<div class="news-words">'+textPost+' '+msgPost+'</div>'+
					'</div>'+
					'<div class="news-footer">'+
						'<div class="news-footer-share">'+
							'<div class="fb-share-button" data-href="'+val.permalink_url+'" data-layout="button_count"></div>'+
						'</div>'+
						'<div class="news-footer-read pull-right">'+
							'<a href="'+val.permalink_url+'" target="_blank">'+
								'Continue Reading...'+
							'</a>'+
						'</div>'+
					'</div>'+
				'</div>'+
			'</div>';
		}

		$(document).ready(function(){

			// initialize slick
			$('.news-swipe-place').slick({
				slidesToShow: 4,
			    slidesToScroll: 4,
			    arrows: false,
			    infinite: false,
			  	responsive: [
			      {
			        breakpoint: 1280,
			        settings: {
			          slidesToShow: 3,
			          slidesToScroll: 3,
			        }
			      },
			      {
			        breakpoint: 600,
			        settings: {
			          slidesToShow: 2,
			          slidesToScroll: 2
			        }
			      },
			      {
			        breakpoint: 480,
			        settings: {
			          slidesToShow: 1,
			          slidesToScroll: 1
			        }
			      }
			      // You can unslick at a given breakpoint now by adding:
			      // settings: "unslick"
			      // instead of a settings object
			    ]
			});

			// facebook initialize
			$.Facebook.init().done(function(fb){

				$.Facebook({
					who: 122151867803860, // cplusco pageid
					fields: 'posts.limit(12){permalink_url,full_picture,story,status_type,type,link,name,caption,description,icon,created_time,picture,message,message_tags,source,story_tags,shares,id,properties,privacy,updated_time,targeting,actions,object_id}', // for fields data, you can find here https://developers.facebook.com/tools/explorer/
					success: function(res)
					{
						$.each(res.posts.data, function(a,b){
							var feeds = parsefeed(b);
							$('.news-swipe-place').slick('slickAdd', feeds)
						
						})
					}
				});

			});

			$('.news-swipe-place').on('afterChange', function(event, slick, currentSlide, nextSlide){
				if( (slick.slideCount - currentSlide) <= 5 )
				{

					// if you using feed.next, system will automatically give you data next feed. 
					$.Facebook.feed.next().done(function(res){
						$.each(res.data, function(a,b){
							var feeds = parsefeed(b);
							$('.news-swipe-place').slick('slickAdd', feeds );						
						})
					})	
				} 
			});
			
		})
		
	</script>
	<div id="news">
		<div class="news-swipe-place"></div>
	</div>
