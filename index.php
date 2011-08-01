<?php

include_once('post.php');

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	
	<title>O Hai Der! - snw</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/960/960_12_col.css" />
	<link rel="stylesheet" type="text/css" href="css/960/text.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<link rel="icon" type="image/png" href="img/fav.png" />
	
	
	<script type="text/javascript" src="script/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="script/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="script/fancyzoom/js-global/FancyZoom.js"></script>
	<script type="text/javascript" src="script/fancyzoom/js-global/FancyZoomHTML.js"></script>
	<script type="text/javascript" src="script/script.js"></script>
	
</head>
<body>
	
	<!-- background flower garden -->
	<div id="garden-03"></div>
	<div id="garden-02"></div>
	<div id="garden-01"></div>
	<div id="footer-foreground"></div>
	
	<div id="container" class="container_12">	
		<div id="header" class="grid_12">
			<!--hover audio for navigations-->
			<audio src="audio/sound85.wav"></audio>
			<div id="ribbon">Orange.ca<span id="hover-ribbon"><ul><li>oh</li><li>hai</li><li>der!</li></ul></span></div><div id="ribbon-2"></div><div id="ribbon-3"></div>
			<div class="apple one"><a href="#">blog</a></div>
			<div class="apple two"><a href="#">workbook</a></div>
			<div class="apple three"><a href="#">showcase</a></div>
			<div class="apple four"><a href="photography.html">photography</a></div>
			<div class="apple five"><a href="#">resume</a></div>
			
			<form action="#" id="search">
				<input type="text" />
				<a href="#" id="search-button">search</a>
			</form>
		</div>
		<div id="main" class="grid_10 prefix_1 suffix_1">
			<div id="content">
				<div id="left" class="grid_7">
					<?php echo $main_content; ?>					
				</div><!-- end of #left -->
				
				
				<div id="right" class="grid_3 alpha">
					<div id="avatar">
						<div id="ribbon">snw</div><div id="ribbon-2"></div><div id="ribbon-3"></div><div id="ribbon-4"></div><div id="ribbon-5"></div><div id="ribbon-6"></div><div id="ribbon-7"></div>
					</div>
					<ul id="info">
						<li>493-434-2342 tel.</li>
						<li>donchoa at gmail dot com</li>
						<li>
							<a href="#"><img src="img/twit.png" alt="" /></a>&nbsp;
							<a href="http://www.flickr.com/photos/snwfog"><img src="img/flickr.png" alt="" target="_blank" /></a>&nbsp;
							<a href=""><img src="img/facebook.png" alt="" /></a>&nbsp;
							<a href=""><img src="img/devart.png" alt="" /></a>
						</li>
					</ul>
					<div id="twitter"><div id="twitter-2"></div><div id="twitter-3"></div>
						
						
						<!--<div id="feed">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
						<div id="feed">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
						<div id="feed">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
						<div id="last-feed">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					-->
					</div>
					
					<h5>popular tags :</h5>
					<ul id="tags">
						<li><a href="#">coding</a></li>
						<li><a href="#">javascript</a></li>
						<li><a href="#">web</a></li>
						<li><a href="#">random</a></li>
						<li><a href="#">photography</a></li>
						<li><a href="#">personal</a></li>
						<li><a href="#">travel</a></li>
						<li><a href="#">rant</a></li>
						<li><a href="#">wtf</a></li>
						<li><a href="#">pron</a></li>
						<li><a href="#">gaming</a></li>
						<li><a href="#">wow</a></li>
						<li><a href="#">nsfw</a></li>
						<li><a href="#">c++</a></li>
						<li><a href="#">apple</a></li>
						<li><a href="#">microsoft</a></li>
						<li><a href="#">jailbreak</a></li>
						<li><a href="#">iphone</a></li>
						<li><a href="#">wallpaper</a></li>
						<li><a href="#">icon</a></li>
					
					</ul>
					
					<h5>history :</h5>
					<ul id="tags">
						<li><a href="#">June, 2011</a></li>
						<li><a href="#">May, 2011</a></li>
						<li><a href="#">April, 2011</a></li>
						<li><a href="#">March, 2011</a></li>
						<li><a href="#">Feburary, 2011</a></li>
					</ul>
				</div><!-- end of #right -->
				
				<!--<div id="slider">
					<img src="img/slider/01.jpg" alt="Victoria Harbor @ Night" title="Victoria Harbor @ Night" />
					<img src="img/slider/02.jpg" alt="Sushi Leaf Boat" title="Sushi Leaf Boat" />
					<img src="img/slider/03.jpg" alt="Kanbi Kawahi" title="Kanbi Kawahi" />
					<img src="img/slider/04.jpg" alt="" title="Packed for Xi'an" />
					<img src="img/slider/05.jpg" alt="" title="Big Goose Pagoda @ Xi'an" />
					<img src="img/slider/06.jpg" alt="" title="大唐芙蓉元"/>
				</div>-->
				
				<!--<ul class="gallery">
					<li><a href="#"><img src="img/sunny.png" alt="Sunny Day! :D" /></a></li>
					<li><a href="#"><img src="img/glissade.png" alt="Glissade, weeeeeeeee!" /></a></li>
					<li><a href="#"><img src="img/-3-.png" alt="-3-" /></a></li>
				</ul> -->
				
				<!--<p><a href="#" id="download"></a></p>
				
				<form action="/">
					<p>
						<button id="clickme" name="clickme" type="button" value="cliclicious">Cliclicious&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#63743;</button>
					</p>
				</form>	-->
				<!--<div id="left" class="grid_3 omega">
					<div id="left-panel">
						<!--<div id="avatar"></div>--*>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>-->
				<!--<div id="right" class="grid_7 alpha">
					<div id="right-panel">
						<form action="/">
							<p>
								<button id="clickme" name="clickme" type="button" value="cliclicious">Cliclicious&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#63743;</button>
							</p>
						</form>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ssssss tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div><!--end of #right-panel--*>
				</div><!--end of .grid_7 alpha--*>-->
			</div><!-- end of content -->
			
			<!--oh hai der! my name is charles yang, and i design stuffs. well mostly webpage, and graphics. i am extremely good with shapes and color, although i am pretty much a newb in free drawing :(-->
			
		</div><!-- end of #main -->
		<div id="footer" class="grid_12"></div>
		<div id="footer-footer" class="grid_12">
			<p id="en">This site was built with Love on a 13' MacBook Pro in 2011. Designed and inspired by the sweet and lovely Orange.</p>
			<p id="jp">このサイトは、2011年には13'MacBook Proの上で愛をこめて造られた。設計されており、甘く美しいオレンジに触発。</p>
		</div>
	</div>
	<div id="ribbon-test"></div>
</body>
</html>