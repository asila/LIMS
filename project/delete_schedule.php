<?php
require_once("includes/initialize.php");
include_layout_template_public('header.php');
// get value of id that sent from address bar
$id=$_GET['id'];
// Delete data in mysql from row that has this id
$sql="DELETE FROM formtb WHERE formtb.service_no = '$id'";
$result=mysql_query($sql);

echo "Deleted Successfully";
header("location:index.php");				
// close connection
mysql_close();
?>