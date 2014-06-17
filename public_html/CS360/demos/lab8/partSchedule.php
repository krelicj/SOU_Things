<HTML>
<HEAD>
<title>partSchedule.php</title>
</HEAD>
<BODY>

<H1>PartSchedule FORM ACTION PHP PAGE </H1>
<p>
<?php
	// include files:
	// connection function
	include('connect.php');

	// get variables from form
	// Part ID
	$id = $_POST['id'];


	// used fixed-width font
	echo "<pre>\n";

	// Get the part name
	// debug: echo "SELECT * from part where ID = $id\n";
	$r1 = mysql_query(
		"SELECT * from part where ID = $id");
	$r = mysql_fetch_row($r1);


	// print ID (name)
	echo "Schedule for Part ID: $r[0] ($r[1])\n";

	// set format string
	$fmt = "%5s  %-50s\n";
	// print header line
	//printf($fmt, "CRN", "Course Name");

	// free storage space for the part result.
	// We are all finished with it
	mysql_free_result($r1);

	/* Get courses student registered for
	$r1 = mysql_query(
		"SELECT * from course where CRN in ".
		"(select CRN from schedule where ID = $id)");

	// loop over courses, printing each one
	while ($r = mysql_fetch_row($r1)) 
		printf($fmt,$r[0],$r[1]); */

	// free result set
	mysql_free_result($r1);

	echo "</pre>\n";
?>
</BODY>
</HTML>
