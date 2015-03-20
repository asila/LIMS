<?php 
include('config.php'); 
echo "<a href=list.php>Back to List</a>"; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `sample_details` ( `ssn` ,  `ossn` ,  `service_no` ,  `scientist` ,  `study` ,  `site` ,  `sample_design` ,  `country` ,  `region` ,  `cluster` ,  `plot` ,  `depth_std` ,  `dtop` ,  `dbottom` ,  `treat` ,  `depth_cm` ,  `type` ,  `lab`  ) VALUES(  '{$_POST['ssn']}' ,  '{$_POST['ossn']}' ,  '{$_POST['service_no']}' ,  '{$_POST['scientist']}' ,  '{$_POST['study']}' ,  '{$_POST['site']}' ,  '{$_POST['sample_design']}' ,  '{$_POST['country']}' ,  '{$_POST['region']}' ,  '{$_POST['cluster']}' ,  '{$_POST['plot']}' ,  '{$_POST['depth_std']}' ,  '{$_POST['dtop']}' ,  '{$_POST['dbottom']}' ,  '{$_POST['treat']}' ,  '{$_POST['depth_cm']}' ,  '{$_POST['type']}' ,  '{$_POST['lab']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Ssn:</b><br /><input type='text' name='ssn'/> 
<p><b>Ossn:</b><br /><input type='text' name='ossn'/> 
<p><b>Service No:</b><br /><input type='text' name='service_no'/> 
<p><b>Scientist:</b><br /><input type='text' name='scientist'/> 
<p><b>Study:</b><br /><input type='text' name='study'/> 
<p><b>Site:</b><br /><input type='text' name='site'/> 
<p><b>Sample Design:</b><br /><input type='text' name='sample_design'/> 
<p><b>Country:</b><br /><input type='text' name='country'/> 
<p><b>Region:</b><br /><input type='text' name='region'/> 
<p><b>Cluster:</b><br /><input type='text' name='cluster'/> 
<p><b>Plot:</b><br /><input type='text' name='plot'/> 
<p><b>Depth Std:</b><br /><input type='text' name='depth_std'/> 
<p><b>Dtop:</b><br /><input type='text' name='dtop'/> 
<p><b>Dbottom:</b><br /><input type='text' name='dbottom'/> 
<p><b>Treat:</b><br /><input type='text' name='treat'/> 
<p><b>Depth Cm:</b><br /><input type='text' name='depth_cm'/> 
<p><b>Type:</b><br /><input type='text' name='type'/> 
<p><b>Lab:</b><br /><input type='text' name='lab'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
