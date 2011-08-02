<!-- create preview of the new blog entry -->
<?php

include 'mysql_connect.php';
include 'header.php';
echo '<!-- begin of #left -->';
echo '<div id="left" class="grid_7">';
	echo '<h1>Preview New Blog Entry</h1>';
	// first and foremost, check if the current user is signed in
	if (!(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)) {
		echo '<p>You are not signed in.<br />Click <a href="signin.php">here</a> to sign in or <a href="index.php">here</a> to go to the blog.</p>';
	} else {
		// if the user is signed in, then check if he is posting, or its a new page load
		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			echo '<p>Click <a href="create_new_post.php">here</a> to create a new blog entry or <a href="index.php">here</a> to go to the blog.</p>';
		} else {
			// check if all the posting variables are set
			if (!(isset($_POST['post_title']) && isset($_POST['post_tag']) && isset($_POST['post_content']))) {
				echo '<p>There is an error retrieving and generating the recent blog entry preview or the content that you have entered may not be in a valid format. Click <a href="create_new_post.php">here</a> to go back.</p>';
			} else if ($_POST['post_title'] == "" || $_POST['post_content'] == "" || $_POST['post_tag'] == "") {
				echo '<p>You have not filled a required field. Click <a href="create_new_post.php">here</a> to go back and reenter your content.</p>';
			} else {
				// everything is fine, generating post preview
				// mysql date convert to desired format from:
				// http://www.electrictoolbox.com/article/mysql/format-date-time-mysql/
				$_SESSION['post_date'] = $post_date = date('M d, Y', time());
				$_SESSION['post_title'] = $post_title = $_POST['post_title'];
				// process the post tags
				$tag_array = explode(', ', $_POST['post_tag']);
				$_SESSION['post_tag'] = $post_tag = $_POST['post_tag'];
				$_SESSION['post_content'] = $post_content = $_POST['post_content'];
				// $post_type = $row['post_type'];
				if ($_POST['post_short'] == "" ) {
					$_SESSION['post_short'] = $post_short = substr($_POST['post_content'], 0, 3000);
				} else {
					$_SESSION['post_short']	= $post_short = $_POST['post_short'];
				}

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
				echo '<form action=""><p><a href="#" class="button" id="submit-post">Post</a>&nbsp;&nbsp;&nbsp;<a href="create_new_post.php" class="button" id="back-editing-post">Back</a></p></form>';
			}
		}
	}


echo '</div>';
echo '<!-- end of #left -->';

// include the sidebar widgets
include 'sidebar.php';

include 'footer.php';
?>