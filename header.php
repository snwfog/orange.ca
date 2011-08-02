<!-- this header.php file contains and only up to the main 10 col div, footer and sidebar widgets are not included -->

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
			<div class="apple one"><a href="index.php">blog</a></div>
			<div class="apple two"><a href="#">workbook</a></div>
			<div class="apple three"><a href="#">showcase</a></div>
			<div class="apple four"><a href="photography.html">photography</a></div>
			<div class="apple five"><a href="#">resume</a></div>
			
			<form action="#" id="search">
				<input type="text" />
				<a href="#" id="search-button">search</a>
			</form>
			<?php
				echo '<div id="session-notify">';
				if (isset($_SESSION['signed_in']) && $_SESSION['signed_in']	== true) { 
					echo '+'; 
				} else { 
					echo '-'; 
				}
				echo '</div>';
			?>
		</div>
		<div id="main" class="grid_10 prefix_1 suffix_1">
			<div id="content">