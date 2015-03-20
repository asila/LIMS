
<?php

require_once("includes/initialize.php");
include_layout_template_public('header.php');
$sitedata = "select DISTINCT name from site";
  $sitequery = mysql_query($sitedata);
$projectdata = "select DISTINCT project from formtb";
  $projectquery = mysql_query($projectdata);
$scientistdata = "select DISTINCT scientist from formtb";
  $scientistquery = mysql_query($scientistdata);
$countrydata = "select DISTINCT country from countries";
  $countryquery = mysql_query($countrydata);
$analysisdata = "select analysis from tblanalysis";
  $analysisquery = mysql_query($analysisdata);
$plotdata = "select plotno from plot";
  $plotquery = mysql_query($plotdata);
?>
<script>
    function submitForm(action)
    {
        document.getElementById('search').action = action;
        document.getElementById('search').submit();
    }
</script>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<link rel="stylesheet" href="stylesheets/mstyle.css">
<?php include 'pro_dropdown_2.html';?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
	<a href="../project/index.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
		
	</tr>
	<tr>
	<td>
<ul class="inline-list">
<li>
<form id="search" action="search.php" method="POST">
<input type="submit" onclick="submitForm('search.php')" value="Search" id="submit" name="submit" />
</li>
<li>
<label class=" radius label">Analysis:</label>
<select name="analysisfinda" id="analysisfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($analysisquery))
{ 
 $col++;

echo  '<option value=',$rows['analysis'],'>',$rows['analysis'],'</option>';

 }
?>
 </select>
 </li>
 <li>
<label class=" radius label">SSN:</label>
<input type="text" name="servicefinda" id="servicefinda"/>
</li><li>
<label class=" radius label">Project:</label>
<select name="projectfinda" id="projectfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($projectquery))
{ 
 $col++;

echo  '<option value=',$rows['project'],'>',$rows['project'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class=" radius label">Site:</label>
  <select name="sitefinda" id="sitefinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($sitequery))
{ 
 $col++;
echo  '<option value=',$rows['name'],'>',$rows['name'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class=" radius label">Scientist:</label>
<select name="scientistfinda" id="scientistfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($scientistquery))
{ 
 $col++;

echo  '<option value=',$rows['scientist'],'>',$rows['scientist'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class=" radius label">Date Recieved:</label>
<input type="text" name="drfinda" id="drfinda" value="">
</li>
<li>
<label class=" radius label">Date logged:</label>
<input type="text" name="dlfinda" id="dlfinda" value="">
</li>
<li>
<label class=" radius label">country:</label>
<select name="countryfinda" id="countryfinda" >
<option selected value="" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($countryquery))
{ 
 $col++;

echo  '<option value=',$rows['country'],'>',$rows['country'],'</option>';

 }
?>
 </select>
</li>
</form>
</li>
</ul>
<?php
$projectfinda =trim($_REQUEST['projectfinda']);
$scientistfinda =trim($_REQUEST['scientistfinda']);
$servicefinda = trim($_REQUEST['servicefinda']);
$drfinda = trim($_REQUEST['drfinda']);
$dlfinda = trim($_REQUEST['dlfinda']);
$sitefinda = trim($_REQUEST['sitefinda']);
$countryfinda =trim($_REQUEST['countryfinda']);
$analysisfinda =trim($_REQUEST['analysisfinda']);
if(isset($_POST['submit']) AND $_POST['submit']=='Search')
{

// create query
$filterstatement ="";
if (!empty($projectfinda))
{
$filterstatement = $filterstatement . " and project LIKE '%$projectfinda%' ";
}
if (!empty($servicefinda))
{
$filterstatement = $filterstatement . " and service_no LIKE '%$servicefinda%' ";
}
if (!empty($scientistfinda))
{
$filterstatement = $filterstatement . " and scientist LIKE '%$scientistfinda%' ";
}

if (!empty($countryfinda))
{
$filterstatement = $filterstatement . " and country  LIKE '%$countryfinda%' ";
}
if (!empty($sitefinda))
{
$filterstatement = $filterstatement . " and site LIKE '%$sitefinda%' ";
}

if (!empty($drfinda))
{
$filterstatement = $filterstatement . " and date_recieved LIKE '%$drfinda%' ";
}
if (!empty($dlfinda))
{
$filterstatement = $filterstatement . " and date_logged LIKE '%$dlfinda%' ";
}
if (!empty($analysisfinda))
{
$filterstatement = $filterstatement . " and indiv_ana LIKE '%$analysisfinda%' ";
}

$query = "select * from formtb where service_no  is not null $filterstatement";

// execute query
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
 // number of the last column filled
$num_rows = mysql_num_rows($result);
echo '<a href="exposearchsite.php?id='.$filterstatement.'" class="app_listitem_key"><IMG SRC="images/searchdownload.JPG" ALT="Download Search" width="30" height="30"></A></a>';	
?>

</td>
</tr>
  <tr>
  <td>
<table class="app_listing" style="width:100%;">
		<tr>
			<th align="left" >Job No</th>
			<th align="left" >Recieved</th>
			<th align="left" >Logged</th>
			<th align="left" >Archived</th>
			<th align="left" >Submitted</th>
			<th align="left" >Scientist</th>
			<th align="left" >Project</th>
			<th align="left" >Country</th>
			<th align="left" >Site</th>
		   <th align="left" >Soil</th>
			<th align="left" >Water</th>
			<th align="left" >Plant</th>
			<th align="left" >Other</th>
			<th align="left" >Disposal</th>
			<th  align="left"><input name="Totalsamples" id="Totalsamples" type="text" size="8" value="<?php echo $num_rows; ?>" /></th>
  </tr>
   
<?php

$col=0;
while ($rows = mysql_fetch_array($result))
 
{
 $col++;
 
echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;
echo ' <td> ';
echo  '<span>',$rows['service_no'],'<span>';
echo ' </td><td> ';
echo  $rows['date_recieved'];
echo ' </td><td> ';
echo  $rows['date_logged'];
echo ' </td><td> ';
echo  $rows['date_archive'];
echo ' </td><td> ';	
echo  '<span>', $rows['submit_by'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['scientist'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['project'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['country'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['site'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['soil'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['water'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['plant'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['other'],'<span>';
echo ' </td><td> ';
echo  '<span>', $rows['dispose'],'<span>';
echo '</td><td align="center"> ';
echo '<a href="edit_sample.php?id='.$rows['service_no'].'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a>';	
echo '<a href="deletesample.php?id='.$rows['service_no'].'" class="app_listitem_key"><IMG SRC="images/delete.PNG" ALT="Delete"></A></a>';
echo ' </td>';
echo '</tr>';
 }
// free result set memory
mysql_free_result($result);

// close connection
mysql_close();
}
?>

 </table>
</td>
</tr>
<table>
