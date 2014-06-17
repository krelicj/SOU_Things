<?php
// connect.php
// include file providing a function to connect to a mysql database
// include this file on every page that needs to connect to the db.

// usage:
// include('connect.php');

// declare the connection function
function dbConnect ($name, $pw) {
	// Create a mysql connection
	$connection = mysql_connect("localhost", $name, $pw);
	// select the correct database
	mysql_select_db("usr_".$name."_0", $connection);
}

// Call the connect function
// First argument is the user name
// second argument is the password
dbConnect('krelicj', 'FnUV1HX4RS');
?>
