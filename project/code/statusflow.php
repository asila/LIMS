<?php
require_once("../includes/initialize.php");
	// Retrieve data from Query String
$taskestdate = $_GET['taskestdate'];
$anadep = $_GET['anadep'];
$taskdate = $_GET['taskdate'];
$statusp = $_GET['statusp'];
$statuslev = $_GET['statuslev'];
$serviceno = $_GET['serviceno'];
	// Escape User Input to help prevent SQL Injection
$taskestdate = mysql_real_escape_string($taskestdate);
$anadep = mysql_real_escape_string($anadep);
$taskdate = mysql_real_escape_string($taskdate);
$statusp = mysql_real_escape_string($statusp);
$statuslev = mysql_real_escape_string($statuslev);
$serviceno = mysql_real_escape_string($serviceno);
$newdate = date('Y-m-d', strtotime($taskdate. " + $taskestdate days"));
	//build query
$query = "UPDATE tblrectaskactivity SET priority='{$statusp}',status='{$statuslev}',assignto='{$anadep}',taskcreatedon='{$taskdate}',estimation='{$taskestdate}',actualtime='{$newdate}' WHERE taskid LIKE '%$serviceno%'";
	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());
echo "Call Me now That i Have done it.";

	//Build Result String

?>
