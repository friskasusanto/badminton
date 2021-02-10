$(function () {
/* replace all textarea with ckeditor */
	function ckeBasic (name) {
		CKEDITOR.replace(name, {
		  toolbar: [
		    [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],
		    { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
		  ]
		});
	}
	$('body').find('textarea[data-cke=advance]').each(function () {
		var name=$(this).attr('name');CKEDITOR.replace(name);
	});
	$('body').find('textarea[data-cke=basic]').each(function () {
		var name=$(this).attr('name');
		ckeBasic(name);
	});
/* call function after an AJAX process complete */
	function fPost(u,d,s,f) {
	  var ajax = $.ajax({
	    url:u,type:"POST",data:d,processData:false,contentType:false
	  });
	  afterAJAX(ajax,s,f)
	}
	function cPost(u,d,s,f) {
	  var ajax = $.ajax({
	    url:u,type:"POST",data:d
	  });
	  afterAJAX(ajax,s,f)
	}
	function afterAJAX (ajax,s,f) {
	  ajax.done(function(data){if(s!==undefined){return window[s](data);}console.log("parent(s) [data-done] not found");
	    }).fail(function(data){if(f!==undefined){return window[f](data);}console.log("parent(s) [data-fail] not found");
	  });
	}
/* button/submit event handler 
   e.g:
    <form id="parent" action="url" data-done="doneFunc" ... [enctype="multipart/form-data"] [data-fail="failFunc"] >
     ...
     <div>
	   <button type="submit" name="name" value="value">...</button>
     <div>
    <form>
*/
	$('body').delegate('[type=submit]','click',function () {
		var targetParent = $(this).parents('form'),
			done = targetParent.attr('data-done'),
			fail = targetParent.attr('data-fail'),
			textarea = targetParent.find('textarea'),
			url  = targetParent.attr('action'),
			form = targetParent.attr('id'),
			form = document.getElementById(form);
		form.onsubmit = function (e) {
			e.preventDefault();
		var formData = new FormData(form);
			textarea.each(function (index,value) {
				var name=$(this).attr('name');
				if(CKEDITOR.instances[name]){
				  formData.append(name,CKEDITOR.instances[name].getData());
				}
			});
			fPost(url,formData,done,fail);
		}
	});
	$('body').delegate('[type=reset]','click',function () {
		var targetParent = $(this).parents('form'),
			textarea = targetParent.find('textarea'),
			form = targetParent.attr('id'),
			form = document.getElementById(form);
		form.onreset = function (e) {
			textarea.each(function () {
				var name=$(this).attr('name');
				if(CKEDITOR.instances[name]){
					CKEDITOR.instances[name].setData($('#'+name).html());
				}
			});
		}
	});
/* [data-editor] event handler 
	e.g: 
	<Tag id="parent" data-url="url" ...[data-done="doneFunc"] [data-fail="doneFunc"] >
	  ...
	  <Tag>
		<label for="name">
		<input type="checkbox" data-editor name="name" value="value"/>...</label>
	  </Tag>
	  ...
	  <Tag>
	    <button type=button data-editor name="name" value="value">...</button>
	  </Tag>
	</Tag>
	p.s. : Tag could be <div> | <table> | <ul>, use appropriate Tag child for any give Tag used.
*/
	$('body').delegate('input[type=checkbox][data-editor],input[type=radio][data-editor]','change',function () {
		var targetParent = $(this).parentsUntil("[data-url]").parent(),
			url=targetParent.attr('data-url');
			if ($(this).attr("type","checkbox")) {
				var value=this.checked?1:0;
			}else{
				var value=$(this).val();
			};
		var formData={
			'name'  : $(this).attr('name'),
			'value' : value,
			'parent': targetParent.attr('id')
			}
		cPost(url,formData,done,fail);
	});
	$('body').delegate('button[type=button][data-editor],button[type=editor],button[data-send]','click',function () {
		var targetParent = $(this).parentsUntil("[data-url]").parent(),
			url=targetParent.attr('data-url'),
			formData={
			'name'  : $(this).attr('name'),
			'value' : $(this).val(),
			'parent': targetParent.attr('id')
			}
		cPost(url,formData,done,fail);
	});
/* a Tag (push.state) event handler 
	e.g:
	<Tag id="parent" data-get="urlGet" data-url="url" [data-done="doneFunc"] [data-fail="failFunc"]>
	  ...
	  <Tag>
	    <a rev="data" href="url">...</a>
	  </Tag>
	</Tag>
*/
	$('body').delegate('a[rev=push]','click',function (e) {
		e.preventDefault();
		var targetParent = $(this).parentsUntil("[data-get]").parent(),
			url = targetParent.attr("data-url"),
			get = targetParent.attr("data-get").replace(/ /g,'').split(','),
			href = $(this).attr("href"),
			done = targetParent.attr('data-done'),
			fail = targetParent.attr('data-fail');
		history.pushState('', 'New URL: '+href, href);
		loadContent(get,url,done,fail);
	});
	$('body').delegate('.clean-url','click',function (e) {
		// remove fragment as much as it can go without adding an entry in browser history:
		history.pushState('', 'New URL: '+'.', '.');
		
	});
	$('body').delegate('.back-url','click',function (e) {
		// remove fragment as much as it can go without adding an entry in browser history:
		window.history.back();
		
	});
	window.onpopstate = function(event) {
		loadContent(location.pathname);
	};
	function loadContent(param,url,done,fail){
		// USES JQUERY TO LOAD THE CONTENT
		var data = new Object;
		$.each(param, function(key,value){
			data[value]=getUrlParameter(param[key]);
		});
		cPost(url,data,done,fail);	
	}
	function getUrlParameter(sParam)
	{
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('&');
	    for (var i = 0; i < sURLVariables.length; i++) 
	    {
	        var sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] == sParam) 
	        {
	            return sParameterName[1];
	        }
	    }
	} 
/* CPLUSco paging.js */	
    $('body').delegate('button[data-paging=reset]','click',function (e) {
		e.preventDefault();
		var targetParent = $(this).parentsUntil("[data-paging=container]").parent(),
			url=targetParent.attr('data-url'),
			ref=targetParent.attr('data-ref');
			if (url===undefined || url=='') {curl='';}else{curl ='url='+url};
			if (ref===undefined || ref=='') {cref='';}else{cref	='&ref='+ref};
		var href='?'+curl+cref,
		path=window.location.pathname;
		history.pushState('', 'New URL: '+path, path);
		$('div[data-ref='+ref+']').load("loading.html");
		$.ajax({
			url:url, 
			type:"POST", 
			data:{reset:href.substring(1)}
		}).done(function(data){
			$('div[data-ref='+ref+']').html(data);
	    })
	});
	$('body').delegate('a[rev=paging]','click',function (e) {
		e.preventDefault();
		var targetParent = $(this).parentsUntil("[data-paging=container]").parent(),
			url=targetParent.attr('data-url'),
			ref=targetParent.attr('data-ref'),
			offset=targetParent.find('[name=cplusco-paging-offset]').val(),
			sort=targetParent.find('[name=cplusco-paging-sort]').find(':selected').data('sort'),
			az=targetParent.find('[name=cplusco-paging-sort]').val(),
			search=targetParent.find('[name=cplusco-paging-search]').val(),
			by=targetParent.find('[name=cplusco-paging-by]').val(),
			page=$(this).attr('href');
			if (url===undefined || url=='') {curl='';}else{curl ='url='+url};
			if (ref===undefined || ref=='') {cref='';}else{cref	='&ref='+ref};
			if (offset===undefined || offset=='') {offset='';}else{offset ='&offset='+offset};
			if (sort===undefined || az===undefined || sort=='' || az=='') {sort='';}else{sort ='&sort='+sort+','+az};
			if (search===undefined || by===undefined || search=='' || by=='') {search='';}else{search ='&search='+by+','+search};
			if (page===undefined || page=='') {page='';}else{page ='&page='+page};
		var href='?'+curl+cref+offset+sort+search+page;
		history.pushState('', 'New URL: '+href, href);
		$('div[data-ref='+ref+'] div[data-paging=content]').load("loading.html");
		$.ajax({
			url:url, 
			type:"POST", 
			data:{href:href.substring(1)}
		}).done(function(data){
			$('div[data-ref='+ref+'] > div[data-paging=body]').html(data);
	    })
	});
	$('body').delegate('[data-paging=option]','change',function (e) {
		e.preventDefault();
		var targetParent = $(this).parentsUntil("[data-paging=container]").parent(),
			url=targetParent.attr('data-url'),
			ref=targetParent.attr('data-ref'),
			offset=targetParent.find('[name=cplusco-paging-offset]').val(),
			sort=targetParent.find('[name=cplusco-paging-sort]').find(':selected').data('sort'),
			az=targetParent.find('[name=cplusco-paging-sort]').val(),
			search=targetParent.find('[name=cplusco-paging-search]').val(),
			by=targetParent.find('[name=cplusco-paging-by]').val(),
			page=targetParent.find('a[class=active]').attr('href');
			if (url===undefined || url=='') {curl='';}else{curl ='url='+url};
			if (ref===undefined || ref=='') {cref='';}else{cref	='&ref='+ref};
			if (offset===undefined || offset=='') {offset='';}else{offset ='&offset='+offset};
			if (sort===undefined || az===undefined || sort=='' || az=='') {sort='';}else{sort ='&sort='+sort+','+az};
			if (search===undefined || by===undefined || search=='' || by=='') {search='';}else{search ='&search='+by+','+search};
			if (page===undefined || page=='') {page='';}else{page ='&page='+page};
		var href='?'+curl+cref+offset+sort+search+page;
		history.pushState('', 'New URL: '+href, href);
		$('div[data-ref='+ref+'] div[data-paging=content]').load("loading.html");
		$.ajax({
			url:url, 
			type:"POST", 
			data:{href:href.substring(1)}
		}).done(function(data){
			$('div[data-ref='+ref+'] > div[data-paging=body]').html(data);
	    })
	});
	/* bootstraps modal focus debug */
	if($.fn.modal!==undefined){
		$.fn.modal.Constructor.prototype.enforceFocus = function() {
	        var $modalElement = this.$element;
	        $(document).on('focusin.modal',function(e) {
	            var $parent = $(e.target.parentNode);
	            if ($modalElement[0] !== e.target
	            	&& !$modalElement.has(e.target).length
	                && $(e.target).parentsUntil('*[role="dialog"]').length === 0) {
	            	$modalElement.focus();
	            }
	        });
		};
	}
});

