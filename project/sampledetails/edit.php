<?php 
include('config.php'); 
$id =$_REQUEST['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `sample_details` SET `ssn`='{$_POST['ssn']}',`ossn`='{$_POST['ossn']}',`service_no`='{$_POST['service_no']}',`scientist`='{$_POST['scientist']}',`study`='{$_POST['study']}',`site`='{$_POST['site']}',`sample_design`='{$_POST['sample_design']}',`country`='{$_POST['country']}',`region`='{$_POST['region']}',`cluster`='{$_POST['cluster']}',`plot`='{$_POST['plot']}',`depth_std`='{$_POST['depth_std']}',`dtop`='{$_POST['dtop']}',`dbottom`='{$_POST['dbottom']}',`treat`='{$_POST['treat']}',`depth_cm`='{$_POST['depth_cm']}',`type`='{$_POST['type']}',`lab`='{$_POST['lab']}' WHERE `ssn`='{$id}'"; 
$result=mysql_query($sql) or die(mysql_error());
if($result="TRUE"){ 
echo (mysql_affected_rows()) ? "Row Updated.<br /> " : "Nothing Updated.<br /> "; 
echo "<a href='list.php'>Back To Listing</a>"; 
}
else
{
echo "<a href='edit.php?id=$id'>Back To Listing</a>"; 	
}
} 
$qr="SELECT * FROM sample_details WHERE ssn='{$id}'";
$a=mysql_query($qr) or die(mysql_error());
$t=0;
while($rows=mysql_fetch_array($a)) 
{
?>
<form action='' method='POST'> 
<p><b>Ssn:</b><br /><input type='text' name='ssn' value='<?php echo $ssn=$rows['ssn']; ?>'/> 
<p><b>Ossn:</b><br /><input type='text' name='ossn' value='<?php echo $ossn=$rows['ossn']; ?>' /> 
<p><b>Service No:</b><br /><input type='text' name='service_no' value='<?php echo $service_no=$rows['service_no']; ?>' /> 
<p><b>Scientist:</b><br /><input type='text' name='scientist' value='<?php echo $scientist=$rows['scientist']; ?>' /> 
<p><b>Study:</b><br /><input type='text' name='study' value='<?php echo $study=$rows['study']; ?>' /> 
<p><b>Site:</b><br /><input type='text' name='site' value='<?php echo $site=stripslashes($rows['site']); ?>' /> 
<p><b>Sample Design:</b><br /><input type='text' name='sample_design' value='<?php echo $sample_design=$rows['sample_design'];?>' /> 
<p><b>Country:</b><br /><input type='text' name='country' value='<?php echo $country=$rows['country']; ?>' /> 
<p><b>Region:</b><br /><input type='text' name='region' value='<?php echo $region=$rows['region']; ?>' /> 
<p><b>Cluster:</b><br /><input type='text' name='cluster' value='<?php echo $cluster=$rows['cluster']; ?>' /> 
<p><b>Plot:</b><br /><input type='text' name='plot' value='<?php echo $plot=$rows['plot']; ?>'/> 
<p><b>Depth Std:</b><br /><input type='text' name='depth_std' value='<?php echo $depth_std=$rows['depth_std'];?>' /> 
<p><b>Dtop:</b><br /><input type='text' name='dtop' value='<?php echo $dtop=$rows['dtop']; ?>' /> 
<p><b>Dbottom:</b><br /><input type='text' name='dbottom' value='<?php echo $dbottom=$rows['dbottom']; ?>' /> 
<p><b>Treat:</b><br /><input type='text' name='treat' value='<?php echo $treat=$rows['treat']; ?>' /> 
<p><b>Depth Cm:</b><br /><input type='text' name='depth_cm' value='<?php echo $depth_cm=$rows['depth_cm']; ?>' /> 
<p><b>Type:</b><br /><input type='text' name='type' value='<?php echo $type=$rows['type']; ?>' /> 
<p><b>Lab:</b><br /><input type='text' name='lab' value='<?php echo $lab =$rows['lab']; ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='submit' value='Save' name='submitted' id="submitted"/> 
</form> 

<?php 
$t++;
}
?> 
