<?php

include 'mysql_connect.php';
include 'header.php';
echo '<!-- begin of #left -->';
echo '<div id="left" class="grid_7">';
	echo '<h1>Sign Out</h1>';
	if ($_SESSION['signed_in'] == true) {
		echo '<p>You have been signed out successfully.<br />You can now <a href="index.php">go to main</a> or <a href="signin.php">sign in</a> again.</p>';
		$_SESSION['signed_in']	= NULL;
	} else {
		echo '<p>You are not signed in.<br />Click <a href="signin.php">here</a> to sign in or <a href="index.php">here</a> to go to the blog.</p>';
	}
echo '</div>';
echo '<!-- end of #left -->';

// include the sidebar widgets
include 'sidebar.php';

include 'footer.php';
?>