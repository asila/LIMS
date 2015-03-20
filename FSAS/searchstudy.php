
<?php

require_once("includes/initialize.php");
include_layout_template_public('header.php');
$analysisdata = "select name from analysis";
  $analysisquery = mysql_query($analysisdata);
$sitedata = "select name from site";
  $sitequery = mysql_query($sitedata);
$studydata = "select name from study";
  $studyquery = mysql_query($studydata);
$clusterdata = "select cluster from cluster";
  $clusterquery = mysql_query($clusterdata);
$countrydata = "select Name from country";
  $countryquery = mysql_query($countrydata);
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
	
<div id='vmenu'>
<ul>
<form id="search" action="search.php" method="POST">
<input type="submit"  onclick="submitForm('search.php')" value="Search" id="submit" name="submit" />
<label>Analysis:</label>
<select name="analysisfinda" id="analysisfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($analysisquery))
{ 
 $col++;

echo  '<option value=',$rows['name'],'>',$rows['name'],'</option>';

 }
?>
 </select>
<label>SSN:</label>
<input type="text" name="ssnfinda" id="ssnfinda" />
<label>Study:</label>
<select name="studyfinda" id="studyfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($studyquery))
{ 
 $col++;

echo  '<option value=',$rows['name'],'>',$rows['name'],'</option>';

 }
?>
 </select>
<label>Site:</label>
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
<label>Cluster:</label>
<select name="clusterfinda" id="clusterfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($clusterquery))
{ 
 $col++;

echo  '<option value=',$rows['cluster'],'>',$rows['cluster'],'</option>';

 }
?>
 </select>
<label>Plot:</label>
<select name="plotfinda" id="plotfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($plotquery))
{ 
 $col++;

echo  '<option value=',$rows['plotno'],'>',$rows['plotno'],'</option>';

 }
?>
 </select>

<label>Depth:</label>
<select name="depthfinda" id="depthfinda" >
<option value="" selected></option>
<option value="TopSoil">TopSoil</option>
<option value="SubSoil">SubSoil</option>
<option value="cm">cumous</option>
 </select>
<label>country:</label>
<select name="countryfinda" id="countryfinda" >
<option selected value="" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($countryquery))
{ 
 $col++;

echo  '<option value=',$rows['Name'],'>',$rows['Name'],'</option>';

 }
?>
 </select>
<input type="submit" onclick="submitForm('exportsamples.php')" value="Download" id="downloda" name="downloda" />
       </form> 
</ul>
</div>

<?php
$studysearch =$_REQUEST['id'];

if(isset($_REQUEST['id']))
{

// create query
$filterstatement ="";
if (!empty($studysearch))
{
$filterstatement = $filterstatement . " and Study LIKE '%$studysearch%' ";
}
$query = "select DISTINCT Study,Country,Site from sample where SSN  is not null $filterstatement";
// execute query
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
 // number of the last column filled
$num_rows = mysql_num_rows($result);
echo '<a href="exportsearch.php?id='.$filterstatement.'" class="app_listitem_key"><IMG SRC="images/searchdownload.JPG" ALT="Download Search" width="40" height="40"></A></a>';	
?>
<Table class="app_listing" style="width:100%;">
		<tr>
	      
			
			<th align="left">Project/Study</th>
			<th align="left">Country</th>
			<th align="left">Site</th>
			<th  align="left">Total Samples</th>
	<th  align="left">Sites &nbsp;<input name="Totalsamples" id="Totalsamples" type="text" size="8" value="<?php echo $num_rows; ?>" /></th>
  </tr>
   
<?php

$col=0;
while ($rows = mysql_fetch_array($result))
 
{
 $col++;
 
echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;

echo  '<td ><left><span>',$rows['Study'],'<span></left></td>';
echo  '<td ><left><span>', $rows['Country'],'<span></left></td>';
echo  '<td ><left><span>', $rows['Site'],'<span></left></td>';
$samplequery = "select * from sample where Site LIKE '%".$rows['Site']."%'";
$resulta = mysql_query($samplequery) or die ("Error in query: $query. ".mysql_error());
$num_rowsa= mysql_num_rows($resulta);
echo'<td>', $num_rowsa,'</td>';
echo '</tr>';
 }
// free result set memory
mysql_free_result($result);

// close connection
mysql_close();
}
?>

 </Table>


