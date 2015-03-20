<?php
$finda = trim($_REQUEST['finda']);
$searchquery = trim($_REQUEST['searchquery']);
include '../data/conn.php';

//header to give the order to the browser
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=exported-data.csv');
switch ($finda) {

case 'sample':
$query ="(SELECT * FROM $finda WHERE Study LIKE '%$searchquery%' OR SSN  LIKE '%$searchquery%'  OR Country LIKE '%$searchquery%'OR Site LIKE '%$searchquery%'OR Cluster LIKE '%$searchquery%'OR Plot LIKE '%$searchquery%'OR sampletype LIKE '%$searchquery%'OR Date LIKE '%$searchquery%'OR analysis LIKE '%$searchquery%') ";
//code here
break;
case 'site':
$query ="(SELECT * FROM $finda WHERE siteno LIKE '%$searchquery%' OR name  LIKE '%$searchquery%'  OR Country LIKE '%$searchquery%'OR Scientist LIKE '%$searchquery%') ";
//code here
break;
case 'study':
$query ="(SELECT * FROM $finda WHERE studyno LIKE '%$searchquery%' OR name  LIKE '%$searchquery%') ";
//code here
break;
case 'scientist':
$query ="(SELECT * FROM $finda WHERE scientistno LIKE '%$searchquery%' OR name  LIKE '%$searchquery%'  OR designation LIKE '%$searchquery%'OR station LIKE '%$searchquery%') ";
//code here
break;
case 'report':
$query ="(SELECT * FROM $finda WHERE siteno LIKE '%$searchquery%' OR rgenerate  LIKE '%$searchquery%'  OR nosample LIKE '%$searchquery%'OR report LIKE '%$searchquery%'OR tsample LIKE '%$searchquery%') ";
//code here
break;
case 'analysis':
$query ="(SELECT * FROM $finda WHERE analysisno LIKE '%$searchquery%' OR name  LIKE '%$searchquery%') ";
//code here
break;
case 'country':
$query ="(SELECT * FROM $finda WHERE countryno LIKE '%$searchquery%' OR Name  LIKE '%$searchquery%'  OR continent LIKE '%$searchquery%') ";
//code here
break;
default:
echo'Select an item';
}
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
$field_name = '' . str_replace('', $field_name) . '';
}
echo $separate . $field_name;

//sepearte with the comma
$separate = ',';
}

//make new row and line
echo "\r\n";
}
?>