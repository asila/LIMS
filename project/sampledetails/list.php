<?php 
include('config.php'); 
echo "<a href=new.php>New Row</a>"; 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Ssn</b></td>"; 
echo "<td><b>Ossn</b></td>"; 
echo "<td><b>Service No</b></td>"; 
echo "<td><b>Scientist</b></td>"; 
echo "<td><b>Study</b></td>"; 
echo "<td><b>Site</b></td>"; 
echo "<td><b>Sample Design</b></td>"; 
echo "<td><b>Country</b></td>"; 
echo "<td><b>Region</b></td>"; 
echo "<td><b>Cluster</b></td>"; 
echo "<td><b>Plot</b></td>"; 
echo "<td><b>Depth Std</b></td>"; 
echo "<td><b>Dtop</b></td>"; 
echo "<td><b>Dbottom</b></td>"; 
echo "<td><b>Treat</b></td>"; 
echo "<td><b>Depth Cm</b></td>"; 
echo "<td><b>Type</b></td>"; 
echo "<td><b>Lab</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `sample_details`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['ssn']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['ossn']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['service_no']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['scientist']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['study']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['site']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['sample_design']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['country']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['region']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['cluster']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['plot']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['depth_std']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['dtop']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['dbottom']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['treat']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['depth_cm']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['type']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['lab']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id={$row['ssn']}>Edit</a></td><td><a href=delete.php?id={$row['ssn']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
?>