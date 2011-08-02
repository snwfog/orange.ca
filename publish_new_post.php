<!-- publish the new blog entry -->
<?php

include 'mysql_connect.php';
include 'header.php';
echo '<!-- begin of #left -->';
echo '<div id="left" class="grid_7">';
	echo '<h1>Publishing New Blog Entry</h1>';
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
				$sql_query = "INSERT INTO posts (post_date, post_title, post_content, post_tag, post_type, post_short) VALUES (NOW(), '".$_POST['post_title']."', '".$_POST['post_content']."', '".$_POST['post_tag']."', 'blog', '".$_POST['post_short']."')";  
				
				$sql_response = mysql_query($sql_query);
				if ($sql_response) {
					echo '<p>Your new entry has been successfully published. Click <a href="index.php">here</a> to go to the main blog, or <a href="create_new_post.php">here</a> to create another entry.</p>';
				} else {
					echo '<p>An error occurred in publishing your new entry. Click <a href="create_new_post.php">here</a> to edit your entry.</p>';
				}
			}
		}
	}


echo '</div>';
echo '<!-- end of #left -->';

// include the sidebar widgets
include 'sidebar.php';

include 'footer.php';
?>