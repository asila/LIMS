<?php

	require_once("includes/initialize.php");
	include_layout_template_public('header.php');
	?>
<a href="index.php">Home</a><br><hr><a href="search.php">Search</a>
<div id="module-name">Edit Sample Data
</div>
<?php
	
 	$SSN			           = $_POST['SSN'];
	$Site		              = $_POST['Site'];
	$rec = new User();
	    $Study	= $_POST['Study'];
		$SSN	= $_POST['SSN'];
		$Country = $_POST['Country'];
		$Site	= $_POST['Site'];
        $Cluster	= $_POST['Cluster'];
		$Plot	= $_POST['Plot'];
		$Dstd	= $_POST['Dstd'];
		$Dcm	= $_POST['Dcm'];
        $Date	= $_POST['Date'];
        $sampletype = $_POST['sampletype'];
	     $rec->update($SSN);	
	
	?>
			<script type="text/javascript">
				alert("User successfully updated!");
				window.location = "index.php";
			</script>
	