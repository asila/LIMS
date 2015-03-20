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
	 <a href="viewStatsampleSchedule2.php?id=2"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
	<h2><img SRC="image/sdetails.png" ALT="Site Details" width="150" height="80" ></h2>
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
            <th align="left" >Job No</th>
			<th align="left" >Lab</th>
			<th align="left" >FSSN</th>
			<th align="left" >LSSN</th>
			<th align="left" >CSSN</th>
			<th align="left" >Scientist</th>
			<th align="left" >Study</th>
			<th align="left" >Site&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >S.Design&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Material&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Total&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Lab Analysis&nbsp;&nbsp;&nbsp;&nbsp;</th>
		   <th align="left" >Country&nbsp;&nbsp;&nbsp;&nbsp;</th>
		    <th align="left" >Region&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Request&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >References&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Comments&nbsp;&nbsp;&nbsp;&nbsp;</th>

			
<?php

$query = "SELECT  * FROM  primary_table";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$nosites=mysql_num_rows($result1);
$col=0;	
			
			?>
			
			<th align="left"><input name="Totalsamples" type="text" size="10" value="<?php echo $nosites; ?>" /></th>
			
			<?php
			while($rows = mysql_fetch_array($result1))
                  {
      $service_no=$rows['job_no'];
      $lab=$rows['lab_logging'];
      $fssn=$rows['fssn'];
      $lssn=$rows['lssn'];
      $cssn=$rows['cssn'];
      $scientist=$rows['scientist'];
      $study=$rows['study'];
      $country=$rows['country'];
      $site=$rows['site'];
      $sdesign=$rows['sdesign'];
      $material=$rows['material'];
      $total=$rows['total'];
      $lab_analysis=$rows['lab_analysis'];
      $region=$rows['region'];
      $request=$rows['requests'];
      $ref=$rows['ref'];
      $comment=$rows['comment'];
				
					    echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;
					    echo ' <td>';
						echo '<a href="../project/addsample.php?id='.$service_no.'" class="app_listitem_key">'.$service_no.'</a>';
						echo ' </td>';
						echo '<td>';
						echo $lab;		
						echo ' </td><td> ';
						echo 'icr'.$fssn;						
						echo ' </td><td> ';
						echo 'icr'.$lssn;
                        echo ' </td><td> ';
                        echo 'icr'.$cssn;
                        echo ' </td><td> ';
						echo $scientist;
						echo ' </td><td > ';
						echo '<span>'.$study.'</span>';
						echo ' </td><td > ';
						echo  '<span>'.$site.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$sdesign.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$material.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$total.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$lab_analysis.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$country.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$region.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$request.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$ref.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$comment.'</span>';
						echo ' </td><td> ';
			     		echo ' <td align="center">';
						echo '<a href="../project/viewrequest.php?id='.$service_no.'" class="app_listitem_key"><img SRC="../project/images/button_edit.PNG" ALT="Edit"></img></a><img SRC="../project/images/bar.PNG" ALT="bar"></img></a>';	
						echo '<a href="../project/delete_schedule.php?id='.$service_no.'" class="app_listitem_key"><img SRC="../project/images/delete.PNG" ALT="Delete"></img><img SRC="../project/images/bar.PNG" ALT="bar"></img></a>';
						
?>
<a href="#" onclick="javacscript:window.open('../project/samples_details.php?id=<?php echo $service_no;?>','Help','width=1500px,height=500px,align=center,scrollbars=yes')"><img SRC="../project/image/viewbutton.PNG" ALT="View"></img></a>
<?php

                        $col++;
					   echo ' </td>';
			}
		?>
</t>
</table>
</td>
</tr>
</table>
<div class="footer">
</div>
