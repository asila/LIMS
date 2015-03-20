<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
$sitedata = "select DISTINCT site from Scheduled";
  $sitequery = mysql_query($sitedata);
$projectdata = "select DISTINCT project from Scheduled";
  $projectquery = mysql_query($projectdata);
$scientistdata = "select DISTINCT scientist from Scheduled";
  $scientistquery = mysql_query($scientistdata);
$countrydata = "select DISTINCT country from countries";
  $countryquery = mysql_query($countrydata);
$plotdata = "select plotno from plot";
  $plotquery = mysql_query($plotdata);
$sitedata2 = "select name from site";
  $sitequery2 = mysql_query($sitedata2);
$studydata2 = "select name from study";
  $studyquery2 = mysql_query($studydata2);
$clusterdata2 = "select cluster from cluster";
  $clusterquery2 = mysql_query($clusterdata2);
$countrydata2 = "select Name from country";
  $countryquery2 = mysql_query($countrydata2);
$plotdata2 = "select plotno from plot";
  $plotquery2 = mysql_query($plotdata2);
$analysisdata = "select analysis from tblanalysis";
  $analysisquery = mysql_query($analysisdata);
?>
<script>
    function submitForm(action)
    {
        document.getElementById('searchscheduled').action = action;
        document.getElementById('searchscheduled').submit();
    }
</script>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>

<?php include 'stationtitle.php';?>
<?php include 'pro_dropdown_2.html';?>

<table class="responsive" style="width:100%;">
	<tr>
	<td align="center">
    <a href="viewschedules.php" ><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
	<h2><img SRC="image/jssched.png" ALT="Jobs Scheduled" width="200" height="80" ></h2>
        </td>
	</tr>
	<tr>
	<td>
<form id="searchscheduled" action="searchscheduled.php" method="POST">
<ul class="inline-list">
<li>
<input type="submit" onclick="submitForm('searchscheduled.php')" value="Search" id="submit" name="submit" />
</li>
<li>
<label class="radius label">Analysis:</label>
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
<label class="radius label">Job No:</label>
<input type="text" name="servicefinda" id="servicefinda"/>
</li>
<li>
<label class="radius label">Project:</label>
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
<label class="radius label">Site:</label>
  <select name="sitefinda" id="sitefinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($sitequery))
{ 
 $col++;
echo  '<option value=',$rows['site'],'>',$rows['site'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class="radius label">Scientist:</label>
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
<label class="radius label">Date Recieved:</label>
<input type="text" name="drfinda" id="drfinda" value="">
</li>
<li>
<label class="radius label">Date logged:</label>
<input type="text" name="dlfinda" id="dlfinda" value="">
</li>
<li>
<label class="radius label">country:</label>
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
</ul>
</form>
</td>
</tr>
  <tr>
  <td>
<table class="app_listing" style="width:100%;">
		<tr>
            <th align="left" >Schedule</th>
			<th align="left" >Job No</th>
			<th align="left" >Recieved</th>
			<th align="left" >Logged</th>
			<th align="left" >Surplus</th>
			<th align="left" >Report</th>
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
            <th align="left" >File</th>
			<th align="left" >Size</th>
			<th align="left" >Action</th>
<?php
		  
$query = "SELECT  * FROM  scheduled order by service_no asc";
$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
// number of results to show per page
	$per_page = 15;
	
	// figure out the total pages in the database
	$total_results = mysql_num_rows($result1);
	$total_pages = ceil($total_results / $per_page);

	// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
	if (isset($_GET['page']) && is_numeric($_GET['page']))
	{
		$show_page = $_GET['page'];
		
		// make sure the $show_page value is valid
		if ($show_page > 0 && $show_page <= $total_pages)
		{
			$start = ($show_page -1) * $per_page;
			$end = $start + $per_page; 
		}
		else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page; 
		}		
	}
	else
	{
		// if page isn't set, show first set of results
		$start = 0;
		$end = $per_page; 
	}

echo "<p></b> ";
	for ($i = 1; $i <= $total_pages; $i++)
	{
		echo "&nbsp;<a href='scheduled.php?page=$i'>$i</a>&nbsp; ";
	}
	echo "</p>";
				
			
			?>
			
			<th align="left"><input name="Totalsamples" type="text" size="10" value="<?php echo $total_results; ?>" /></th>
			
			<?php
			for ($i = $start; $i < $end; $i++)
	{
		// make sure that PHP doesn't try to show results that don't exist
		if ($i == $total_results) { break; }
	
		// echo out the contents of each row into a table
		echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;
		echo "<tr>";
		echo '<td><a href="unscheduling.php?id=' . mysql_result($result1, $i, 'service_no') . '" class="app_listitem_key"><input type="button" name="schedule" value="Unschedule"/> </a></td>';
		echo '<td><a href="viewscheduled.php?id=' . mysql_result($result1, $i, 'service_no') . '" class="app_listitem_key">'. mysql_result($result1, $i, 'service_no').' </a></td>';
		echo '<td>' . mysql_result($result1, $i, 'date_recieved') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'date_logged') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'date_archive') . '</td>';
		echo '<td><a href="report.php?id=' . mysql_result($result1, $i, 'service_no') . '" class="app_listitem_key">Report</a></td>';
		echo '<td>' . mysql_result($result1, $i, 'submit_by') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'scientist') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'project') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'country') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'site') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'soil') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'water') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'plant') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'other') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'dispose') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'name') . '</td>';
		echo '<td>' . number_format((mysql_result($result1, $i, 'size')/1024),2 ). 'Kb</td>';
		
		if(mysql_result($result1, $i, 'name')!="")
						{
						echo '<td><a href="../project/upload/'.$a.'" class="app_listitem_key">Download</a></td>';	
					    }
                        else
                        {
                        echo '<td><a href="#" class="app_listitem_key">Download</a></td>';		
                        }
                      
		echo '<td><a href="viewstatus.php?id=' . mysql_result($result, $i, 'service_no') . '" class="app_listitem_key"><img SRC="../project/image/viewbutton.jpg" ALT="View"></img></a></td>';
		echo "</tr>"; 
		
	}
			
					

		?>

</t>
</table>
</td>
</tr>
</table>
 <div class="footer">    
    </div>
