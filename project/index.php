<div id="stay">
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
    <a href="viewschedules.php" ><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
	<h2><img SRC="image/nsreq.png" ALT="Jobs Scheduled" width="200" height="80" ></h2>
        </td>
	</tr>
	<tr>
	<td>
<form id="search" action="search.php" method="POST">
<ul class="inline-list">
<li>
<input type="image" name="submit" src="image/search.png" alt="Submit" ALT="search" width="40" height="20"  />
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
		  
 		    $viewrequest = new Subrequest();
			$cur = $viewrequest->allUsers();
			 loadObject();
		function loadObject(){
			global $cur;
				
			
			?>
			
			<th align="left"><input name="Totalsamples" type="text" size="10" value="<?php echo count($cur); ?>" /></th>
			
			<?php
			foreach ($cur as $object){	
				
					    echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;
					    echo ' <td>';
$query = "SELECT  status FROM reception WHERE job_no='{$object->service_no}'";
					    $colres = mysql_result((mysql_query($query)), 0, 0);
					    if($colres=='Recieved')
					    {
						echo '<a href="../project/reviewstatus.php?id='.$object->service_no.'" class="app_listitem_key"><input type="button" name="schedule" value="Schedule"/></a>';
					    }	
						echo ' </td>';
						echo '<td>';
						echo '<a href="viewrequest.php?id='.$object->service_no.'" class="app_listitem_key">'.$object->service_no.'</a>';		
						echo ' </td><td> ';
						$serviceno = $object->service_no;
$query = "SELECT  * FROM  status WHERE  stservice_no LIKE '%$serviceno%'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());				
$col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$service_no = $rows['stservice_no'];
		$rec1 = $rows['rec1'];
		$rec2 = $rows['rec2'];
		$log1 = $rows['log1'];
		$log2 = $rows['log2'];
		$bar1 = $rows['bar1'];
		$bar2 = $rows['bar2'];
		$sub1 = $rows['sub1'];
        $sub2 = $rows['sub2'];
		$mir1 = $rows['mir1'];
		$mir2 = $rows['mir2'];
		$nir1 = $rows['nir1'];
        $nir2 = $rows['nir2'];
		$txrf1 = $rows['txrf1'];
		$txrf2 = $rows['txrf2'];
		$xrd1 = $rows['xrd1'];
		$xrd2 = $rows['xrd2'];
		$cno1 = $rows['cno1'];
		$cno2 = $rows['cno2'];
		$cnt1 = $rows['cnt1'];
		$cnt2 = $rows['cnt2'];
		$ldpsa1 = $rows['ldpsa1'];
		$ldpsa2 = $rows['ldpsa2'];
		$htxrf1 = $rows['htxrf1'];
		$htxrf2= $rows['htxrf2'];
                         
	}
						echo $object->date_recieved;						
						echo ' </td><td> ';
						echo $object->date_logged;
                        echo ' </td><td> ';
						echo $object->date_archive;
						echo ' </td><td > ';
						echo '<span>'.$object->submit_by.'</span>';
						echo ' </td><td > ';
						echo  '<span>'.$object->scientist.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->project.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->country.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->site.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->soil.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->water.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->plant.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->other.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->dispose.'</span>';
						echo ' </td><td> ';
						echo '<span>'.$object->name.'</span>';
						echo ' </td><td> ';
						echo '<span>'.number_format(($object->size/1024),2).'Kb</span>';
						echo ' </td><td> ';
						if($object->name!="")
						{
						echo '<a href="../project/upload/'.$object->name.'" class="app_listitem_key">Download</a>';	
					    }
                        else
                        {
                        echo '<a href="#" class="app_listitem_key">Download</a>';		
                        }
						echo ' </td><td> ';				  
			     		echo ' <td align="center">';
						echo '<a href="../project/viewrequest.php?id='.$object->service_no.'" class="app_listitem_key"><img SRC="../project/images/button_edit.PNG" ALT="Edit"></img></a><img SRC="../project/images/bar.PNG" ALT="bar"></img></a>';	
						echo '<a href="../project/delete_schedule.php?id='. $object->service_no.'" class="app_listitem_key"><img SRC="../project/images/delete.PNG" ALT="Delete"></img><img SRC="../project/images/bar.PNG" ALT="bar"></img></a>';
?>
<a href="#" onclick="javacscript:window.open('../project/viewsreq.php?id=<?php echo $object->service_no;?>','Help','width=1500px,height=500px,align=center,scrollbars=yes')"><img SRC="../project/image/viewbutton.PNG" ALT="View"></img></a>
<?php

					   echo ' </td>';
			}
		
			return $cur;
		}			

		?>

</t>
</table>
</td>
</tr>
</table>
 <div class="footer">
        
    </div>
