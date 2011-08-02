<?php

include 'mysql_connect.php';
include 'header.php';
echo '<!-- begin of #left -->';
echo '<div id="left" class="grid_7">';
	echo '<h1>Sign In</h1>';

	if (($_SERVER['REQUEST_METHOD'] != 'POST' && $_SESSION['signed_in'] == false) || (isset($_SESSION['sign_in_attempt_failed']) && $_SESSION['sign_in_attempt_failed'] == true)) {
		// display the simple sign in form
		echo '<form action="" method="POST" name="signin" id="signin">';
			echo '<p><label for="username">Username: </label><br /><input type="text" name="username" required /></p>';
			echo '<p><label for="password">Password: </label><br /><input type="password" name="password" required /></p>';
			echo '<a href="#" id="signin-button">Sign In</a>';
			//echo '<p><input type="submit" value="Sign In" name="sign_in" /></p>';
		echo '</form>';	
		$_SESSION['sign_in_attempt_failed'] = false;
	} else {
		// check for the validity of the login information	
		// first check if its already logged in
		if (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true) {
			echo '<p>An existing session is currently running.<br />Click <a href="signout.php">here</a> to sign out or <a href="index.php">here</a> to go to the blog.</p>';
		} else {
			// we have not check for user input validity, and decide to verify the info with db immediately
			$sql_query = "SELECT username, password FROM login WHERE username = '".$_POST['username']."' AND password = '".sha1($_POST['password'])."'";
			
			// query the db
			$sql_result = mysql_query($sql_query);
			
			if (!$sql_result) {
				$_SESSION['sign_in_attempt_failed'] = true;
				echo '<p>Cannot connect to the database.</p>';
				echo mysql_error();
			} else {
				if (mysql_num_rows($sql_result) == 0) {
					$_SESSION['sign_in_attempt_failed']	= true;
					$_SESSION['booyah'] = true;
					echo '<p>Wrong username and password. Click <a href="signin.php">here</a> to sign in again.</p>';
				} else {
					$_SESSION['signed_in'] = true;
					$_SESSION['sign_in_attempt_failed']	= false;
					echo '<p>O hai der Orange ;) Click <a href="post_entry.php">here</a> to speak with da internets.</p>';		
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

