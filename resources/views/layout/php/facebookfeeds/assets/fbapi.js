(function ( $ ) {
	function findNested(obj, key, memo) {
	  	var i,
	      proto = Object.prototype,
	      ts = proto.toString,
	      hasOwn = proto.hasOwnProperty.bind(obj);

	  	if ('[object Array]' !== ts.call(memo)) memo = [];

	  	for (i in obj) {
	    	if (hasOwn(i)) {
	     		if (i === key) {
	        		memo.push(obj[i]);
	      		} else if ('[object Array]' === ts.call(obj[i]) || '[object Object]' === ts.call(obj[i])) {
	        		findNested(obj[i], key, memo);
	      		}
    		}
  		}

	  return memo;
	}

    $.Facebook = function(options)
    {
		var deff = $.Deferred();

		options = $.extend({
			who: undefined,
			fields: ['about'], // feed,
			method: 'GET',
			success: function(res)
			{

			}
		},options)

		if(!options.who || typeof options.who !== 'number')
		{
			console.error('no who defined. or page id string given. who must an integer.');
		}

		$.when( 
			$.Facebook.API({
				who: options.who,
				fields: options.fields
			}) 
		)
		.done(function(res){
			options.success(res)
			
			deff.resolve(res);
		})

		return $.when(deff.promise());
    }
    $.Facebook._config = {}

    $.Facebook.init = function()
    {
    	var defffb = $.Deferred();
    	var fb = new FacebookREST();
    	$.when(fb)
    	.done(function(fb){
    		defffb.resolve(fb);
    	})
    	return $.when(defffb.promise());
    }

	// for fields data, you can find in facebook graphAPI -> https://developers.facebook.com/tools/explorer/

    $.Facebook.API = function(options)
	{
		var deff = $.Deferred(), paramsTxt = '';

		options = $.extend({
			who: 'me',
			access_token: '1065750993495095|176a0f6e0ce71e0b7a9b595a77cf1458',
			fields: {},
			url: undefined,
			success: function(res){},
		},options)

		var fields = {access_token: options.access_token}

		if(!options.url)
		{
			if(typeof options.fields == 'string')
			{
				paramsTxt += '?fields='+options.fields;
				options.fields = {}
			}else
			{
				fields = $.extend({fields: options.fields}, fields )
			}


			FB.api(options.who+paramsTxt, fields, function(res){
				deff.resolve(res);				
			})
		}else
		{
			FB.api(options.url, function(res){
				deff.resolve(res);
			})

		}

		// recognize paging.
		var paginglink = deff.pipe(function(res){
			var paging = findNested(res, 'paging');
			if(paging.length > 0)
			{

				paging = paging[0];
				$.Facebook.feed._next = paging.next;
				$.Facebook.feed._before = paging.before;
			}
		})

		return $.when(deff.promise());
	};

	$.Facebook.feed = function(options)
	{
		// rencana hanya mengakomodir semua hal tentang feed.
		// sementara sebagai induk feed.

	};

	// store facebook paging next;
	$.Facebook.feed._next = '';

	// store facebook paging previous
	$.Facebook.feed._before = '';

	// get data facebook paging next
	$.Facebook.feed.next = function()
	{
		return $.Facebook.API({url:$.Facebook.feed._next});
	}

	// get data facebook paging before
	$.Facebook.feed.before = function()
	{
		return $.Facebook.API({url:$.Facebook.feed._before});
	};

	/*
	* a can be url that want to share or parameters
	* for docs, you can see here https://developers.facebook.com/docs/sharing/reference/share-dialog
	* parameters
		# string
		a sebagai url

		#object
		- href
		- the others can see reference in https://developers.facebook.com/docs/sharing/reference/share-dialog

	*/
	$.Facebook.share = function(a)
	{
		if(typeof a == 'string')
		{
			a = {href: a}
		}
		a = $.extend({
			method: 'share',
			success: function(res){}
		},a)
		FB.ui(a, function(res){
			a.success(res);
		})
	}
 
}( jQuery ));

// //////////////////////////////////////////////////////////////////////////////////////////////////////

/*
	# new object
	var fb = new FacebookREST(:appid, :tokenid);
	fb.pages(:pageid).api(['feed'])
*/
var FacebookREST = function(a){
	var deff = $.Deferred();

	if(typeof a !== 'object' || !a){a = {appId: a}};
	a = $.extend({
		appId: 1065750993495095,
		version: 'v2.5',
	},a)

	$.ajaxSetup({ cache: true });
  	$.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
	    FB.init({
	      	appId: a.appId,
	      	version: a.version // or v2.0, v2.1, v2.2, v2.3
	    });
	    deff.resolve(FB);
	});

  	return deff.promise();
}
