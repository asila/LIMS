<?php
/**

*/

require_once("includes/initialize.php");
include_layout_template_public('header.php');
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

?>
<script>
    function submitForm(action)
    {
        document.getElementById('search').action = action;
        document.getElementById('search').submit();
    }
</script>

<a href="../data/index.php">Home</a><br><hr><a href="search.php">Search</a>&nbsp;&nbsp;&nbsp;<a href="Viewstudy.php">Study</a>&nbsp;&nbsp;&nbsp;<a href="Viewanalysis.php">Analysis</a>
&nbsp;&nbsp;&nbsp;<a href="Viewreport.php">Reports</a>&nbsp;&nbsp;&nbsp;<a href="Viewsite.php">Sites</a>&nbsp;&nbsp;&nbsp;<a href="Viewscientist.php">Scientists</a>
<div id="module-name">samples
</div>					
<div id="content">

<br>
<hr>
<form id="search" action="search.php" method="POST">
<input type="submit" onclick="submitForm('search.php')" value="Search" id="submit" name="submit" />
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

echo  '<option value=',$rows[name],'>',$rows[name],'</option>';

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
echo  '<option value=',$rows[name],'>',$rows[name],'</option>';

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

echo  '<option value=',$rows[cluster],'>',$rows[cluster],'</option>';

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

echo  '<option value=',$rows[plotno],'>',$rows[plotno],'</option>';

 }
?>
 </select>

<label>Depth:</label>
<select name="depthfinda" id="depthfinda" >
<option value="" selected></option>
<option value="TopSoil">TopSoil</option>
<option value="SubSoil">SubSoil</option>
<option value="cumous">cumous</option>
 </select>
<label>country:</label>
<select name="countryfinda" id="countryfinda" >
<option selected value="" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($countryquery))
{ 
 $col++;

echo  '<option value=',$rows[Name],'>',$rows[Name],'</option>';

 }
?>
 </select>
<input type="submit" onclick="submitForm('exportsamples.php')" value="Download" id="downloda" name="downloda" />
    </form>
<hr>		
<form action="export.php" method="POST">
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
  <input type="text" name="searchquery" name="searchquery" />
    </form>
<hr>


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
			<th align="left">Dstd</th>
			<th align="left">Dcm</th>
                                          <th align="left">sampletype</th>
                                          <th align="left">Date</th>
			
        </tr>
<?php
$studyfinda =trim($_REQUEST['studyfinda']);
$ssnfinda = trim($_REQUEST['ssnfinda']);
$clusterfinda = trim($_REQUEST['clusterfinda']);
$plotfinda = trim($_REQUEST['plotfinda']);
$sitefinda = trim($_REQUEST['sitefinda']);
$depthfinda = trim($_REQUEST['depthfinda']); 
$countryfinda =trim($_REQUEST['countryfinda']);
if(isset($_POST['submit']) AND $_POST['submit']=='Search')
{

// create query
$filterstatement ="";
if (!empty($studyfinda))
{
$filterstatement = $filterstatement . " and Study LIKE '%$studyfinda%' ";
}
if (!empty($ssnfinda))
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
		function allSearch(){
		global $mydb;
		$query="select * from sample where SSN  is not null $filterstatement";
		$mydb-->mysql_query($query);
		$cur -> $mydb;
		return $cur;
 			}
			
			 $cur = allSearch();
			 
 	 		
		function loadObject(){
			global $cur;	
			foreach ($cur as $object){	
				
					              echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
					                       @$odd = !$odd;
						
						echo ' <td> ';
						echo $object->Study;			
						echo ' <td> ';
						echo '<a href="edit_sample.php?id='.$object->SSN.'" class="app_listitem_key">'.$object->SSN.'</a>';
						echo ' <td> ';
						echo $object->Country;
                                                                                    echo ' <td> ';
						echo $object->Site;
						echo ' <td> ';
						echo $object->Cluster;
						echo ' <td> ';
						echo $object->Plot;
						echo ' <td> ';
						echo $object->DStd;
						echo ' <td> ';
						echo $object->Dcm;
						echo ' <td> ';
						echo $object->sampletype;
                                                                                    echo ' <td> ';
						echo $object->Date;
						
						
						echo ' <td align="center"> ';
						echo '<a href="edit_sample.php?id='.$object->SSN.'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a><IMG SRC="images/bar.PNG" ALT="bar"></A>';	
						echo '<a href="deletesample.php?id='. $object->SSN.'" class="app_listitem_key"><IMG SRC="images/delete.PNG" ALT="Delete"></A></a>';
			}
		}	
		loadObject();		
}
		?>


</table>
