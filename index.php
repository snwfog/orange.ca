<?php

include 'post.php';
include 'header.php';
echo '<!-- begin of #left -->';
echo '<div id="left" class="grid_7">';
	echo $main_content;					
echo '</div>';
echo '<!-- end of #left -->';

// include the sidebar widgets
include 'sidebar.php';

include 'footer.php';
?>

