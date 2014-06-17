<?php 
	// Username and Password can be passed by HTTP-POST
	$username = 'krelicj';
	$password = 'FnUV1HX4RS';
?>

<html>
<head>
	<style type="text/css">
		body {background-color: black}
		body {color: white}
		body {font-family: Arial}
		body {font-size: 14}
	</style>
</head>
	
<body>


<pre>
<?php
	// Connect to MySql Server (@ suppresses php errors
	// so we can exit gracefully)
	$connection = mysql_connect("localhost", $username, $password);
	mysql_select_db("usr_".$username."_0", $connection);

	// Create tables if necessary
	$qry = "DROP TABLE student";
	$rslt = mysql_query($qry);

	$qry = "CREATE TABLE IF NOT EXISTS student";
	// . is concatenation
	$qry = $qry."(ID INT PRIMARY KEY, NAME VARCHAR(50)) engine=innodb";
	mysql_query($qry);
	$qry = "INSERT INTO student VALUES (1, 'Jimbob M.')";
	$rslt = mysql_query($qry);
	$qry = "INSERT INTO student VALUES (2, 'Jimbob McGee')";
	$rslt = mysql_query($qry);
	$qry = "INSERT INTO student VALUES (3, 'Janebob McGee')";
	$rslt = mysql_query($qry);


	$qry = "SELECT * from student";
	$result = mysql_query($qry);
	// define format string
	$fmtStr = "%5s  %-50s<br>";
	// print header
	printf($fmtStr, "ID", "NAME");
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	    printf($fmtStr, $row[0], $row[1]);  
	}
	echo "End of Listing";
?>
</pre>

</body>
</html>
