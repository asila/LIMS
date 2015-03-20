<?php
require_once("../includes/initialize.php");

$service_no=$_REQUEST['id'];

$query="DELETE FROM  formtb WHERE  service_no ='$service_no'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());	
	   if($result){
	   $delete = "Submitted request successfully deleted!";
			echo($delete);
		header("location:../index.php");
               }
?>