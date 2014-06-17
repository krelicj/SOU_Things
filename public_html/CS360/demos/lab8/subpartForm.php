<HTML>
<HEAD>
<title>SubPartForm.php</title>
</HEAD>
<BODY>

<H1>SubPart FORM ACTION PHP PAGE </H1>
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
	// SubPart ID, superPartID
	$superPartID = $_POST['superPartID'];
	$subPartID = $_POST['subPartID'];
	//$c1 = $_POST['c1'];

	// used fixed-width font
	echo "<pre>\n";

	echo "\$superPartID = ".$superPartID."\n";
	echo "\$subPartID = ".$subPartID."\n";
	//echo "\$c1 = ".$c1."\n";


	// try to insert the part
	$r = mysql_query(
		"insert into subPart values (".$superPartID.", '".$subPartID."')");
	/* try to insert the course
	$r = mysql_query(
		"insert into schedule values (".$id.", ".$c1.")"); */
?>
Well I think I inserted it.  Check the db to make sure.
</BODY>
</HTML>
