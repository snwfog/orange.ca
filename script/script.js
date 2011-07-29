$(function() {
	//$('#slider').nivoSlider({	});
	
	// pre-determine the top position of the flower garden, will be placed
	// at the correct location once window is finished loading
	var documentHeight = 1400;
	
	$("#garden-01").css({
		'top': documentHeight-160 + 'px'
	});
	
	$("#garden-02").css({
		'top': documentHeight-345 + 'px'
	});
	
	$("#garden-03").css({
		'top': documentHeight-450 + 'px'
	});
	
	$("#footer-foreground").css({
		'top': documentHeight+104 + 'px'
	});
	// end of flower garden preload
	
	//setupZoom();
	//$(".one").css({
	//	'text-align': 'center',
	//	'width': '80px',
	//	'height': '35px',
	//	'-webkit-border-radius': '9px 0px 9px 0px',
	//	'-webkit-transition-duration': '0.01s',
	//	'-webkit-transition-property': 'width, height, visibility',
	//	'-webkit-transition-timing-function': 'ease-in',
	//	'-webkit-animation': 'bounce-or-1 0.4s 0.05s infinite'
	//});
	
	//**************//
	// twitter feed //
	//**************//
	var twitter_api_url = 'http://api.twitter.com/1/statuses/user_timeline.json';
	var twitter_screen_name = 'snwfog';
	var twitter_count = 4;
	var twitter_include_rts = 1;
		
	$.getJSON(
		twitter_api_url + '?screen_name=' + twitter_screen_name + '&count=' + twitter_count + '&include_rts=' + twitter_include_rts + '&callback=?',
		function(data) {
			$.each(data, 
				function(index, item) {
					$('#twitter').append('<div id="feed">' + item.text.parseURL().parseUsername().parseHashtag() + '<br /><div id="twitter-timestamp">' + relative_time(item.created_at) + '</div></div>');
				}
			);
		}
	);
	
	
	// parsing twitter usernames, hashtags and urls
	// from: http://www.simonwhatley.co.uk/parsing-twitter-usernames-hashtags-and-urls-with-javascript
	String.prototype.parseURL = function() {
		return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&~\?\/.=]+/g, 
		function(url) {
			return url.link(url);
		});
	}
	
	String.prototype.parseUsername = function() {
		return this.replace(/[@]+[A-Za-z0-9-_]+/g,
		function(u) {
			var username = u.replace("@", "");
			return u.link("http://twitter.com/" + username);
		});
	}
	
	String.prototype.parseHashtag = function() {
		return this.replace(/[#]+[A-Za-z0-9-_]+/g, 
		function(t) {
			var tag = t.replace("#", "%23");
			return t.link("http://search.twitter.com/search?q=" + tag);
		});
	}
	
	// parse time and display it relative
	// from: http://twitter.pbworks.com/w/page/1779897/RelativeTimeScripts
	function relative_time(time_value) {
		var values = time_value.split(" ");
		time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
		var parsed_date = Date.parse(time_value);
		var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
		var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
		delta = delta + (relative_to.getTimezoneOffset() * 60);
		
		var r = '';
		if (delta < 60) {
			r = 'a minute ago';
		} else if(delta < 120) {
		    r = 'couple of minutes ago';
		} else if(delta < (45*60)) {
		    r = (parseInt(delta / 60)).toString() + ' minutes ago';
		} else if(delta < (90*60)) {
		    r = 'an hour ago';
		} else if(delta < (24*60*60)) {
		    r = '' + (parseInt(delta / 3600)).toString() + ' hours ago';
		} else if(delta < (48*60*60)) {
		    r = '1 day ago';
		} else {
		    r = (parseInt(delta / 86400)).toString() + ' days ago';
		}
		
		return r;
	}
	// end of twitter feed
	
	//**************//
	// flickr feed  //
	//**************//
	var flickr_api_url = 'http://api.flickr.com/services/feeds/photos_public.gne?';
	var flickr_id = '63281246@N04';
	
	$.getJSON(
		flickr_api_url + 'ids=' + flickr_id + '&lang=en-us&format=json&jsoncallback=?', 
		function(data) {
			$.each(data.items, 
				function(index, item) {
					if (index < 15) {
						var scale_factor = 0.94;
						if (index%3 == 0)
							$('#flickr').append('<tr></tr>');
						
//						$('<img />').attr('src', item.media.m).appendTo('#flickr tr:last').load(
//							function() {
//								$(this).css({'height': $(this).height()*scale_factor + 'px', 'width': $(this).width()*scale_factor + 'px'});
//							}).wrap('<a href="' + item.link + '"></a>').parent().attr('rel', '#' + item.media.m).wrap('<div id="photo-feed"></div>').parent().append('<div id="photo-title">' + item.title + '</div>').append('<div id="' + item.media.m + '"></div><img src="' + item.media.m.replace("_m.jpg", "_z.jpg") + '" alt="" />').wrap('<td></td>');
						$('<img />').attr({ 'src': item.media.m, 'rel': '#flickr-photo-' + index }).appendTo('#flickr tr:last').load(
							function() {
								$(this).css({'height': $(this).height()*scale_factor + 'px', 'width': $(this).width()*scale_factor + 'px'});
							}).wrap('<div id="photo-feed"></div>').parent().append('<div id="flickr-photo-' + index + '" class="overlays"><img src="' + item.media.m.replace("_m.jpg", "_z.jpg") + '" /></div>').append('<div id="photo-title">' + item.title + '</div>').wrap('<td></td>');
					}
				}
			);
		}
 	);
	// end of flickr feed
	

	window.onload =  function() {
		//$('#photo-feed img').css({'height': this.height()*1 + 'px', 'width': this.width()*1 + 'px', 'border-color': 'blue'});
		var documentHeight = $(document).height()-259;
		
		$("#garden-01").css({
			'top': documentHeight-160 + 'px'
		});
		
		$("#garden-02").css({
			'top': documentHeight-345 + 'px'
		});
		
		$("#garden-03").css({
			'top': documentHeight-450 + 'px'
		});
		
		$("#footer-foreground").css({
			'top': documentHeight+104 + 'px'
		});	
		
		// launch the apple overlay style
		$('#photo-feed img[rel]').overlay({ closeOnClick: 'true', closeOnEsc: 'true' });
		
	}
	
		
	// audio playing for navigations
	var audio = $('audio')[0];
	
	$(".apple").mouseenter(function() {
		audio.play();
	});
	
});
