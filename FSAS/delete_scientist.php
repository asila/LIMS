<?php
/**

require_once("includes/initialize.php");
include_layout_template_public('header.php');
	?>
<link rel="stylesheet" href="mstyle.css">

<div id='vmenu'>
<ul>
<li><a href="index.php">Home</a></li><li><a href="search.php">Search</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewstudy.php">Study</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewanalysis.php">Analysis</a></li>
&nbsp;&nbsp;&nbsp;<li><a href="Viewreport.php">Reports</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewsite.php">Sites</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewscientist.php">Scientists</a></li>
</ul>
</div>
<div id="module-name">
</div>	
<div id="content">
 
 <?php
// get value of id that sent from address bar
$id=$_GET['id'];
echo $id;
// Delete data in mysql from row that has this id
$sql="DELETE FROM scientist WHERE scientistno = '$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
echo "<BR>";
?>
				<script type="text/javascript">
				window.location = "Viewsite.php";
				</script>
				<?php
}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
?>