<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
$sitedata = "select DISTINCT site from formtb";
$sitequery = mysql_query($sitedata);
$projectdata = "select DISTINCT project from formtb";
$projectquery = mysql_query($projectdata);
$scientistdata = "select DISTINCT scientist from formtb";
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

$station=$_REQUEST['mydbtable'];
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

<?php include 'stationtitle.php';?>
<?php include 'pro_dropdown_2.html';?>

<table class="responsive" style="width:100%;">
	<tr>
	<td align="center">
	<?php
	switch($station) {
	  
 		  case '1' :
 		  ?>
 		   <a href="../project/viewStatsampleSchedule.php?id=1" >Back</a>
 		    <?php
		  break;
		  case '2' :
		   ?>
 		   <a href="../project/viewStatsampleSchedule.php?id=2" >Back</a>
 		    <?php
		  break;
		  case '3' :
		   ?>
 		   <a href="../project/viewStatsampleSchedule.php?id=3" >Back</a>
 		    <?php
		  break;
		  case '4' :
		   ?>
 		   <a href="../project/viewStatsampleSchedule.php?id=4" >Back</a>
 		    <?php
		  break;
		  case '5' :
		   ?>
 		   <a href="../project/viewStatsampleSchedule.php?id=5" >Back</a>
 		    <?php
		  break;
		  case '6' :
		   ?>
 		   <a href="../project/viewStatsampleSchedule.php?id=6" >Back</a>
 		    <?php
		  break;
		  case '71' :
		   ?>
 		   <a href="../project/viewStatsampleSchedule.php?id=71" >Back</a>
 		    <?php
		  break;
          case '72' :
           ?>
 		  <a href="../project/viewStatsampleSchedule.php?id=72" >Back</a>
 		   <?php
		  break;

          case '73' :
           ?>
 		  <a href="../project/viewStatsampleSchedule.php?id=73" >Back</a>
 		   <?php
		  break;
          case '74' :
           ?>
 		  <a href="../project/viewStatsampleSchedule.php?id=74" >Back</a>
 		   <?php
		  break;
		  case '8' :
		   ?>
 		  <a href="../project/viewStatsampleSchedule.php?id=8" >Back</a>
 		   <?php
		  break;
		  case '9' :
		   ?>
 		  <a href="../project/viewStatsampleSchedule.php?id=9" >Back</a>
 		   <?php
		  break;
		  case '10' :
		   ?>
 		  <a href="../project/viewStatsampleSchedule.php?id=10" >Back</a>
 		   <?php
		  break;
		  case '11' :
		   ?>
 		  <a href="../project/viewStatsampleSchedule.php?id=11" >Back</a>
 		   <?php
		  break;
		  case '12' :
		   ?>
 		  <a href="../project/viewStatsampleSchedule.php?id=12" >Back</a>
 		   <?php
		  break;

                  case '13' :
                   ?>
 		   <a href="../project/viewStatsampleSchedule.php?id=13" >Back</a>
 		    <?php
		  break;
		  default: header("location:viewstatuscentre.php");
		  }
	?>
   
	<h2><img SRC="image/sadetails.png" ALT="Samples Details" width="150" height="80" ></h2>
        </td>
	</tr>
	<tr>
	<td>
<form id="search" action="search.php" method="POST">
<ul class="inline-list">
<li>
<input type="submit" onclick="submitForm('search.php')" value="Search" id="submit" name="submit" />
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
            <th align="left" >SSN</th>
			<th align="left" >Job No</th>
			<th align="left" >Scientist</th>
			<th align="left" >Study</th>
			<th align="left" >Site</th>
			<th align="left" >Country</th>
			<th align="left" >Region</th>
			<th align="left" >Cluster</th>
			<th align="left" >Plot</th>
			<th align="left" >Depth_STD</th>
			<th align="left" >Depth_CUM</th>
		    <th align="left" >Material</th>
		    <th align="left" >Analyses</th>
			<th align="left" ></th>

			
<?php
$job_no=$_REQUEST['id'];
$query = "SELECT  * FROM  sample_details WHERE service_no='{$job_no}'";
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
		echo "&nbsp;<a href='samples_details.php?id=$job_no&amp;page=$i'>$i</a>&nbsp; ";
	}
	echo "</p>";
		
$col=0;	
			echo '<a href="addsample.php?id='.$job_no.'" class="app_listitem_key">NEW SAMPLE &nbsp;&nbsp;&nbsp;&nbsp;<img SRC="../project/image/viewbutton.jpg" ALT="View"></img></a>';	
			echo ' &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<a href="logging_details.php?id='.$job_no.'"class="app_listitem_key">SITES</a>';
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
		echo '<td>icr' . mysql_result($result1, $i, 'ssn') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'service_no') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'scientist') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'study') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'site') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'country') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'region') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'cluster') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'plot') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'Depth_std') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'Depth_cm') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'type') . '</td>';
		echo '<td>' . mysql_result($result1, $i, 'lab') . '</td>';
		echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'service_no') . '" class="app_listitem_key"><img SRC="../project/images/button_edit.PNG" ALT="Edit"></img></a><img SRC="../project/images/bar.PNG" ALT="bar"></im</a></td>';
		echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'service_no') . '" class="app_listitem_key"><img SRC="../project/images/delete.PNG" ALT="Delete"></img><img SRC="../project/images/bar.PNG" ALT="bar"></img></a></td>';
		echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'service_no') . '" class="app_listitem_key"><img SRC="../project/image/viewbutton.jpg" ALT="View"></img></a></td>';
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
