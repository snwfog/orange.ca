<?php
	include_once('mysql_connect.php');
	
	// posting content into sql table
	$sql_query = "INSERT INTO posts (post_date, post_title, post_content, post_tag, post_type, post_short) VALUES (NOW(), '".$_POST['post_title']."', '".$_POST['post_content']."', '".$_POST['post_tag']."', 'blog', '".$_POST['post_content']."')";  
	
	$sql_response = mysql_query($sql_query);
	
	if (!$sql_response) {
		echo "<h1>Failed to save the previous entry! :(</h1>";
		echo "<h1>".mysql_error()."</h1>";
	} else {
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
		
			$main_content .= "<div id=\"post\">";
			$main_content .= "<!-- post header -->";
			$main_content .= "<h1 id=\"post_title\">$post_title</h1>";
			$main_content .= "<ul id=\"tags\"><li><a href=\"#\">$post_tag</a></li></ul>";
			$main_content .= "<div id=\"hr\"></div>";
			$main_content .= "<!-- end of post header -->";
			$main_content .= "<p>$post_content</p>";
			$main_content .= "<!-- post footer -->";
			$main_content .= "<div id=\"end_post\"><div id=\"date\">$post_date</div>";
			$main_content .= "<ul id=\"tools\"><li><a href=\"#\">comment</a><img src=\"img/comment.png\" alt=\"\" id=\"icon\" /></li><li><a href=\"#\">save it</a><img src=\"img/bookmark.png\" alt=\"\" id=\"icon\" /></li><li><a href=\"#\">read more</a><img src=\"img/more.png\" alt=\"\" id=\"icon\" /></li></ul>";			
			$main_content .= "</div></div>";
			$main_content .= "<!-- end of post footer -->\n\n";
		}
	}
?>