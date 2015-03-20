<?php
require_once("../project/includes/initialize.php"); 
include("../project/includes/logsample.php");

      $id=$_REQUEST['id'];
 
$dbsql="SELECT * From scheduled  Inner Join tbllogtaskactivity On `taskid` = `service_no` Where `service_no` = '{$id}'";
$result = mysql_query($dbsql) or die (mysql_error());
global $q4;
global $service_no;
global $scientist;
global $study;
global $site;
global $country;
global $fssn;
global $lssn;

if($result && mysql_num_rows($result)==1) 
{
$col1=0;
while ($rows = mysql_fetch_array($result))
{ 
 $service_no=$rows['service_no'];
 $scientist=$rows['scientist'];
 $study=$rows['project'];
 $country=$rows['country'];
 $region=$rows['region'];
 $site=$rows['site'];
 $sdesign=$rows['sample_design'];
$q1 = number_format($rows['soil'],0);
$q2 = number_format($rows['water'],0);
$q3 = number_format($rows['plant'],0);
$lab_analysis=$rows['indiv_ana'];
$q4=$rows['total'];
$sitecom=$rows['sitecom'];
$ref=$rows['ref'];
if($q1>0)
{
	$material='soil';
}
elseif ($q2>0) {
	$material='water';
}
elseif ($q3>0) {
	$material='plant';
}
else
{
	$material='others';
}
//choose logging lab
$lab_logging='ICRAF';
$request='';

$col1++;

$queryrec="SELECT service_no FROM sample_details WHERE   service_no = '$id'";
$resultrec = mysql_query($queryrec) or die (mysql_error());  
if(mysql_num_rows($resultrec)==0)
 { 
 
 
//for ($i=0; $i < $q4 ; $i++) 
//{ 
//$ssn=$i; 
 $queryst1="INSERT INTO sample_details (ssn,service_no,scientist,study,site,sample_design,country,region) VALUES ('{$ssn}','{$service_no}','{$scientist}','{$study}','{$site}','{$sdesign}','{$country}','{$region}')";
 $resultst1 = mysql_query($queryst1) or die (mysql_error());
//}
$queryfssn="SELECT MIN(ssn) AS fssn FROM sample_details WHERE   service_no = '$id'";
$resultfssn = mysql_query($queryfssn) or die (mysql_error());
$fssn=mysql_result($resultfssn, 0);
$querylssn="SELECT MAX(ssn) AS lssn FROM sample_details WHERE   service_no = '$id'";
$resultlssn = mysql_query($querylssn) or die (mysql_error()); 
$lssn=mysql_result($resultlssn, 0);
$queryst2="INSERT INTO primary_table (job_no,lab_logging,fssn,lssn,scientist,study,site,material,total,lab_analysis,country,region,requests,ref,comment) VALUES ('{$id}','{$lab_logging}','{$fssn}','{$lssn}','{$scientist}','{$study}','{$site}','{$material}','{$q4}','{$lab_analysis}','{$country}','{$region}','{$request}','{$ref}','{$sitecom}')";
$resultst2 = mysql_query($queryst2) or die (mysql_error());

}
}

echo $site;
header("location:logging_details.php");
}
else
{
header("location:scheduled.php");
}		 
?>
