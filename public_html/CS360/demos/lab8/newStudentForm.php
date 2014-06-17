<HTML>
<HEAD>
<title>newStudentForm.php</title>
</HEAD>
<BODY>

<H1>newStudent FORM ACTION PHP PAGE </H1>
Demonstrates:
<li>
php include file to do connection
<li>
execute sql to insert data
</ul>

<p>
<?php
	// include files:
	// connection function
	include('connect.php');

	// get variables from form
	// Student ID, Name, and up to 4 valid courses from newStudentForm.html
	$id = $_POST['id'];
	$name = $_POST['name'];
	$c1 = $_POST['c1'];

	// used fixed-width font
	echo "<pre>\n";

	echo "\$id = ".$id."\n";
	echo "\$name = ".$name."\n";
	echo "\$c1 = ".$c1."\n";


	// try to insert the student
	$r = mysql_query(
		"insert into student values (".$id.", '".$name."')");
	// try to insert the course
	$r = mysql_query(
		"insert into schedule values (".$id.", ".$c1.")");
?>
Well I think I inserted it.  Check the db to make sure.
</BODY>
</HTML>
