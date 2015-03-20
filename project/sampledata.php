<?php

require_once("includes/initialize.php");
include_layout_template_public('header.php');
$sitedata = "select name from site";
$sitequery = mysql_query($sitedata);
$studydata = "select name from study";
$studyquery = mysql_query($studydata);
$clusterdata = "select cluster from cluster";
$clusterquery = mysql_query($clusterdata);
$countrydata = "select country from countries";
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
$analysisdata = "select name from analysis";
$analysisquery = mysql_query($analysisdata);
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
<li><a href="../project/viewstatuscentre.php">Home</a>
</li>
</ul>
</div>
<br>
<div id='vmenu'>
<ul>
<li>
<form id="search" action="search.php" method="POST">
<input type="submit" onclick="submitForm('sampledata/search.php')" value="Search" id="submit" name="submit" />
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
<input type="text" name="ssnfinda" id="ssnfinda"/>

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
<option value="cm">CM</option>
 </select>

<label>country:</label>
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

<input type="submit" onclick="submitForm('exportsamples.php')" value="Download" id="downloda" name="downloda" />
</li>
</form>


<form action="export.php" method="POST">
<li>
<input type="submit" value="Download" />
<select name="finda" id="finda" >
<option value="sample">samples</option>
<option value="site">sites</option>
<option value="study">study</option>
<option value="scientist">scientists</option>
<option value="report">reports</option>
<option value="analysis">analysis</option>
<option value="country">countries</option>
 </select>
  <input type="text" name="searchquery" id="searchquery" />
    </form>	
</li>
</ul>
</div>
<table class="app_listing" style="width:100%;">
	<tr align="center">
		<td>
			<a href="create_sample.php" class="app_listitem_key">New Entry<IMG SRC="images/data.jpg" ALT="data" width="20" height="18"></A></a>
		</td>
	</tr>
</table>
  
<Table class="app_listing" style="width:100%;">
		<tr>
			<th align="left">Study</th>
			<th align="left">SSN</th>
			<th align="left">Country</th>
			<th align="center">Site</th>
			<th align="left">Cluster</th>
			<th align="left">Plot</th>
			<th align="left">Depth std</th>
			<th align="left">Depth cm</th>
                                          <th align="left">sample type</th>
			<th align="left">Bay</th>
			<th align="left">Tray</th>
			<th align="left">Position</th>
			 <th align="left">Weight (g)</th>
                                           <th align="left">Date</th>
			<th align="left">No. of Samples</th>
			<th align="left">Analyses</th>
		               <th align="left">Update/Deletion</th>
     
<?php
		  //$SSN=$_REQUEST['id'];
		  //$service_no=$_REQUEST['service_no'];
		   
		  $service_no=ICR0012014;
		  $query="SELECT * FROM svdesk.sampledata WHERE  service_no LIKE '%$service_no%'";
		  $samples=mysql_query($query);
		  $num_rows = mysql_num_rows($samples);
			?>
			
			<th align="left">Total Samples &nbsp;<input name="Totalsamples" type="text" size="8" value="<?php echo $num_rows; ?>"maxlength="20" /></th>
			
			<?php
			$col=0;
while ($rows = mysql_fetch_array($samples))
 
{
 $col++;
				
					     echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;
						
						echo ' <td> ';
						echo $rows['Study'];			
						echo ' <td> ';
						echo '<a href="edit_sample.php?id='.$rows['SSN'].'" class="app_listitem_key">'.$rows['SSN'].'</a>';						
						echo ' <td> ';
						echo $rows['Country'];
                        echo ' <td> ';
						echo $rows['Site'];
						echo ' </td><td> ';
						echo $rows['Cluster'];
						echo ' <td> ';
						echo $rows['Plot'];
						echo ' <td> ';
						echo $rows['DStd'];
						echo ' <td> ';
						echo $rows['Dcm'];
						echo ' <td> ';
						echo $rows['sampletype'];
                        echo ' <td> ';	
						echo $rows['Bay'];
						echo ' <td>';
						echo $rows['Tray'];
						echo ' <td>';
						echo $rows['Pos'];
						echo ' <td>';
						echo $rows['Wt'];
						echo ' <td>';										
						echo $rows['Date'];
						echo ' <td> ';
						echo count($num_rows);
						echo ' <td> ';
						echo $rows['analysis'];
			     		echo ' <td align="center"> ';
						echo '<a href="edit_sample.php?id='.$rows['SSN'].'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a><IMG SRC="images/bar.PNG" ALT="bar"></A>';	
						echo '<a href="deletesample.php?id='. $rows['SSN'].'" class="app_listitem_key"><IMG SRC="images/delete.PNG" ALT="Delete"></A></a>';
					
			}
		
			return $cur;
		//}			

		?>

</tr>
</Table>
s