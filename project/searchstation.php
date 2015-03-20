
<?php

require_once("includes/initialize.php");
include_layout_template_public('header.php');
$stat=$_REQUEST['statid'];
$sitedata = "select DISTINCT site from formtb";
  $sitequery = mysql_query($sitedata);
$priordata = "select * from tblproirity";
  $priorquery = mysql_query($priordata);
$statusdata = "select * from tblstatus";
  $statusquery = mysql_query($statusdata);
?>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
<script>
    function submitForm(action)
    {
        document.getElementById('searchstation').action = action;
        document.getElementById('searchstation').submit();
    }
</script>
<?php include 'pro_dropdown_2.html';?>
<table class="responsive" style="width:100%;">
	<tr align="center">
		<td>
		</td>
	</tr>
<tr>
<td>
<form id="searchstation" action="searchstation.php" method="POST">
<ul class="inline-list">
<li>
<input type="image" name="submit" src="image/search.png" alt="Submit" ALT="search" width="40" height="20"  />
</li>
<li>
<label class=" radius label">Job No:</label>
</li>
<li>
<input type="text" name="servicefinda" id="servicefinda"/>
</li>
<li>
<label class=" radius label">Site:</label>
</li><li>
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
<label class=" radius label">Priority:</label>
</li><li>
<select name="priorityfinda" id="priorityfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($priorquery))
{ 
 $col++;

echo  '<option value=',$rows['priorityname'],'>',$rows['priorityname'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class=" radius label">Status:</label>
</li><li>
<select name="statusfinda" id="statusfinda" >
<option selected value="" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($statusquery))
{ 
 $col++;

echo  '<option value=',$rows['statusname'],'>',$rows['statusname'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class=" radius label">Date:</label>
</li>
<li>
<input type="text" name="drfinda" id="drfinda" value="">
</li>
<li>
<input type="hidden" name="statid" id="statid" value="<?php echo $stat; ?>">
</li>
</ul>
</form>
</div>
<?php

switch($stat) {
	  
 		  case '1' :
 		  $station="tblrectaskactivity";
		  break;
		  case '2' :
 		  $station="tbllogtaskactivity";
		  break;
		  case '3' :
 		  $station="tblbartaskactivity";
		  break;
		  case '4' :
 		  $station="tblsubsampletaskactivity";
		  break;
		  case '5' :
 		  $station="tblldpsataskactivity";
		  break;
		  case '6' :
 		  $station="tblmirataskactivity";
		  break;
		  case '7' :
 		  $station="tblnirtaskactivity";
		  break;
		  case '8' :
 		  $station="tblxrdtaskactivity";
		  break;
		  case '9' :
 		  $station="tbltxrftaskactivity";
		  break;
		  case '10' :
 		  $station="tblcnotaskactivity";
		  break;
		  case '11' :
 		  $station="tblcnttaskactivity";
		  break;
		  case '12' :
 		  $station="tblhhtxrftaskactivity";
		  break;
                  case '13' :
 		  $station="tblmirhtaskactivity";
		  break;
		  default: header("location:viewstatuscentre.php");
		  }
$servicefinda = trim($_REQUEST['servicefinda']);
$drfinda = trim($_REQUEST['drfinda']);
$sitefinda = trim($_REQUEST['sitefinda']);
$statusfinda =trim($_REQUEST['statusfinda']);
$priorityfinda =trim($_REQUEST['priorityfinda']);
if(isset($_POST['submit']) AND $_POST['submit']=='Search')
{

// create query
$filterstatement ="";
if (!empty($servicefinda))
{
$filterstatement = $filterstatement . " and taskid LIKE '%$servicefinda%' ";
}
if (!empty($sitefinda))
{
$filterstatement = $filterstatement . " and site LIKE '%$sitefinda%' ";
}

if (!empty($drfinda))
{
$filterstatement = $filterstatement . " and taskcreatedon LIKE '%$drfinda%' ";
}
if (!empty($statusfinda))
{
$filterstatement = $filterstatement . " and status LIKE '%$statusfinda%' ";
}
if (!empty($priorityfinda))
{
$filterstatement = $filterstatement . " and priority LIKE '%$priorityfinda%' ";
}

$query = "select * from $station where taskid  is not null $filterstatement";

// execute query
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
 // number of the last column filled
$num_rows = mysql_num_rows($result);
echo '<a href="exposearchstation.php?id='.$filterstatement.'&amp;curtable='.$station.'" class="app_listitem_key"><IMG SRC="images/searchdownload.JPG" ALT="Download Search" width="30" height="30"></A></a>';	
?>

<table class="app_listing" style="width:100%;">
	<tr align="center">
		<td>
			<?php echo'<a href="../project/viewStatsampleSchedule.php?id='.$stat.'"><input type="button" name="back" value="Back"</a>';?>
		</td>
	</tr>
  <tr>
  <td>
<Table class="app_listing" style="width:100%;">
		<tr>
			<th align="left" >Job No</th>
			<th align="left" >Site</th>
			<th align="left" >Priority</th>
			<th align="left" >Status&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Station &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Date &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Est.Time (days)</th>
			<th align="left" >Act.Time</th>
			<th  align="left"><input name="Totalsamples" id="Totalsamples" type="text" size="8" value="<?php echo $num_rows; ?>" /></th>
  </tr>
   
<?php

$col=0;
while ($rows = mysql_fetch_array($result))
 
{
 $col++;
                  echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td >';
						echo '<a href="viewrequest.php?id='.$rows['taskid'].'" class="app_listitem_key">'.$rows['taskid'].'</a>';		
						echo ' </td><td > ';
						echo $rows['site'];						
						echo ' </td><td > ';
						echo $rows['priority'];	
                  echo ' </td><td > ';
                  echo $rows['status'];	
						echo ' </td><td > ';
                  echo $rows['assignto'];	
						echo ' </td><td > ';
						echo $rows['taskcreatedon'];				
						echo ' </td><td > ';
						echo $rows['estimation'];
						if ($rows['actualtime']<date("Y-m-d") AND $rows['status']!="Complete") $diva="#FF9900"; else $diva="#73a049";
						echo ' </td><td >';
					   echo '<div name="tima" id="tima" style="background-color:'.$diva.'">'.$rows['actualtime'].'</div>';
						echo ' </td><td > ';
						echo '<a href="statsampleupdate.php?id='.$rows['taskid'].'&amp;mydbtable='.$station.'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a>';	
						echo ' </td>';
                  echo '</tr>';
 }
// free result set memory
mysql_free_result($result);

// close connection
mysql_close();
}
?>

 </Table>
</td>
</tr>
<table>
