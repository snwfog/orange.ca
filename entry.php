<?php

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

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="index.php" method="POST">
		<label for="post_title">Title:</label>
		<input name="post_title" placeholder="Topic title" /><br />
		<label for="post_tag">Tag(s):</label>
		<input name="post_tag" placeholder="Tag(s), separated by commas."  /><br />
		<label for="post_type"></label>
		<label for="post_content">Post Content:</label><br />
		<textarea name="post_content"></textarea><br />
		<input type="submit" name="submit" value="Post" />
	</form>
</body>	
</html>