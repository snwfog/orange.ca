<?php
include 'mysql_connect.php';

// define:
$number_of_posts_shown = 3;
//-------------------------

$main_content = "";
$sql_query = "SELECT * FROM posts ORDER BY post_id DESC";
$sql_response = mysql_query($sql_query);
for ($i = 0; (($row = mysql_fetch_array($sql_response)) && $i < $number_of_posts_shown); $i++) {
	$post_id = $row['post_id'];
	// mysql date convert to desired format from:
	// http://www.electrictoolbox.com/article/mysql/format-date-time-mysql/
	$post_date = date('M d, Y', strtotime($row['post_date']));
	$post_title = $row['post_title'];
	$post_content = $row['post_content'];
	$post_tag = $row['post_tag'];
	$post_type = $row['post_type'];
	$post_short = substr($row['post_short'], 0, 3000);
	
	echo '<div id="post">';
	echo '<!-- post header -->';
	echo '<h1 id="post_title">'.$post_title.'</h1>';
	// post the processed tags
	echo '<ul id="tags">';
	foreach ($tag_array as $tag) {
		echo '<li><a href="#">'.$tag.'</a></li>';
	}
	echo '</ul>';
	
	echo '<div id="hr"></div>';
	echo '<!-- end of post header -->';
	echo '<p>'.$post_content.'</p>';
	echo '<!-- post footer -->';
	echo '<div id="end_post"><div id="date">'.$post_date.'</div>';
	echo '<ul id="tools"><li><a href="#">comment</a><img src="img/comment.png" alt="" id="icon" /></li><li><a href="#">save it</a><img src="img/bookmark.png" alt="" id="icon" /></li><li><a href="#">read more</a><img src="img/more.png" alt="" id="icon" /></li></ul>';			
	echo '</div></div>';
	echo '<!-- end of post footer -->';
	echo '';
	echo '';
}

?>