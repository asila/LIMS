<?php 
include('config.php'); 
$id = (int) $_GET['id']; 
mysql_query("DELETE FROM `sample_details` WHERE `ssn`='$id' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>