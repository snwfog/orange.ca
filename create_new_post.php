<!-- create a new blog entry -->
<?php

// this php file is different structure compare to signin.php and signout.php, as it check for if the user session is running
// first, then check print the form if the $_SERVER['REQUEST_METHOD'] is not POST.

include 'mysql_connect.php';
include 'header.php';
echo '<!-- begin of #left -->';
echo '<div id="left" class="grid_7">';
	echo '<h1>New Blog Entry</h1>';

	// first and foremost, check if the current user is signed in
	if (!(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)) {
		echo '<p>You are not signed in.<br />Click <a href="signin.php">here</a> to sign in or <a href="index.php">here</a> to go to the blog.</p>';
	} else {
		// if the user is signed in, then check if he is posting, or its a new page load
		// at the end of posting, 2 options can be choose, either preview or post, which both will
		// be handled and implemented with js/jquery
		
		if ($_SERVER['RESQUEST_METHOD'] != 'POST') {
			// echo the form
			echo '<form action="" method="POST" name="new-post" id="new-post">';
				echo '<p><label for="post_title">Post Title:</label><br /><input type="text" name="post_title" id="post_title" placeholder="Blog title…" required value="'.(isset($_SESSION['post_title']) ? $_SESSION['post_title'] : "").'" /></p>';
				echo '<p><label for="post_tags">Post Tag(s):</label><br /><input type="text" name="post_tag" id="post_tag" placeholder="Entry tags, i.e. css, photography, …" required value="'.(isset($_SESSION['post_tag']) ? $_SESSION['post_tag'] : "").'" /></p>';
				echo '<p><label for="post_short">Post Summary:</label><br /><textarea name="post_short" id="post_short" placeholder="Post summary…" required >'.(isset($_SESSION['post_short']) ? $_SESSION['post_short'] : "").'</textarea></p>';
				echo '<p><label for="post_content">Post Content:</label><br /><textarea name="post_content" id="post_content" placeholder="Blog content…" required >'.(isset($_SESSION['post_content']) ? $_SESSION['post_content'] : "").'</textarea></p>';
				echo '<p><a href="#" id="submit-preview" class="button">Preview</a>&nbsp;&nbsp;&nbsp;<a href="#" id="submit-post" class="button">Post</a>&nbsp;&nbsp;&nbsp;<a href="#" id="reset-post" class="button">Reset</a></p>';		
			echo '</form>';
		}
	}


echo '</div>';
echo '<!-- end of #left -->';

// include the sidebar widgets
include 'sidebar.php';

include 'footer.php';

// Difference between require() and require_once(): 
// require() includes and evaluates a specific file, 
// while require_once() does that only if it has 
// not been included before (on the same page).

// So, require_once() is recommended to use when 
// you want to include a file where you have a lot 
// of functions for example. This way you make sure 
// you don't include the file more times and you will 
// not get the "function re-declared" error.

// Difference between require() and include() is that 
// require() produces a FATAL ERROR if the file you 
// want to include is not found, while include() 
// only produces a WARNING.

// There is also include_once() which is the same 
// as include(), but the difference between them is 
// pthe same as the difference between require() and require_once().

//include "mysql_connect.php";

//mysql_query("UPDATE viewcounter SET views = views + 1 WHERE id='1'");
//$sql = mysql_query("SELECT * FROM viewcounter WHERE id='1'");

//$row = mysql_fetch_array($sql);
	
//$id = $row['id'];
//$page_name = $row['page_name'];
//$views = $row['views'];

?>