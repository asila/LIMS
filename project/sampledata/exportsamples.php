<?php

include 'conn.php';

//header to give the order to the browser
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=exported-data.csv');
$studyfinda =trim($_REQUEST['studyfinda']);
$ssnfinda = trim($_REQUEST['ssnfinda']);
$clusterfinda = trim($_REQUEST['clusterfinda']);
$plotfinda = trim($_REQUEST['plotfinda']);
$sitefinda = trim($_REQUEST['sitefinda']);
$depthfinda = trim($_REQUEST['depthfinda']); 
$countryfinda =trim($_REQUEST['countryfinda']);
//$analysisfinda =trim($_REQUEST['analysisfinda']);
$filterstatement ="";
if (!empty($studyfinda))
{
$filterstatement = $filterstatement . " and Study LIKE '%$studyfinda%' ";
}
if (!empty($ssnfind))
{
$filterstatement = $filterstatement . " and SSN LIKE '%$ssnfinda%' ";
}

if (!empty($countryfinda))
{
$filterstatement = $filterstatement . " and Country  LIKE '%$countryfinda%' ";
}
if (!empty($sitefinda))
{
$filterstatement = $filterstatement . " and Site LIKE '%$sitefinda%' ";
}

if (!empty($clusterfinda))
{
$filterstatement = $filterstatement . " and Cluster = $clusterfinda ";
}
if (!empty($plotfinda))
{
$filterstatement = $filterstatement . " and Plot = $plotfinda ";
}

if (!empty($depthfinda))
{
$filterstatement = $filterstatement . " and DStd LIKE '%$depthfinda%' ";
}

$query = "select * from sample where SSN  is not null $filterstatement";
//select table to export the data
$select_table = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$rows = mysql_fetch_assoc($select_table);

if ($rows)
{
getcsv(array_keys($rows));
}
while($rows)
{
getcsv($rows);
$rows = mysql_fetch_assoc($select_table);
}

// get total number of fields present in the database
function getcsv($no_of_field_names)
{
$separate = '';


// do the action for all field names as field name
foreach ($no_of_field_names as $field_name)
{
if (preg_match('/\\r|\\n|,|"/', $field_name))
{
$field_name = stripslashes($field_name);
}
echo $separate . $field_name;

//sepearte with the comma
$separate = ',';
}

//make new row and line
echo "\r\n";
}

?>