<?php

session_start();

$db_username = "root";
$db_password = "root";
$db_host = "localhost";
$db_name = "blog_db";

@mysql_connect("$db_host", "$db_username", "$db_password") or die ("Could not connect to mySQL database");
@mysql_select_db("$db_name") or die ("Could not connect to $db_name database.");

?>