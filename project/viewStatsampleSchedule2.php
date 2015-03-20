<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
$sitedata = "select DISTINCT site from formtb";
  $sitequery = mysql_query($sitedata);
$priordata = "select * from tblproirity";
  $priorquery = mysql_query($priordata);
$statusdata = "select * from tblstatus";
  $statusquery = mysql_query($statusdata);
  $station=$_REQUEST['id'];
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
<?php include 'stationtitle.php';?>
<?php include 'pro_dropdown_2.html';?>

<table class="responsive" style="width:100%;">
	<tr align="center">
		<td>
        <a href="viewstatuscentre2.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
<td>
<?php
switch($station) {
case '1':
?>     
<tr><td><h2><img SRC="image/rec1.png" ALT="back" width="100" height="40" ></img></h2></td></tr>
<?php
       break;

case '2': 
?>
<tr><td><h2><img SRC="image/log1.png" ALT="back" width="100" height="40" ></img></h2></td></tr>
<?php
       break;

case '3':
?>      
<tr><td><h2><img SRC="image/bar.png" ALT="back" width="100" height="40" ></img></h2></td></tr>
<?php
       break;

case '4': 
?>   
<tr><td><h2><img SRC="image/sub1.png" ALT="back" width="100" height="40" ></img></h2></td></tr>
<?php
       break;
default: 
       header("location:viewstatuscentre2.php");
		  break;
     }
?>
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
<input type="hidden" name="statid" id="statid" value="<?php echo $station; ?>">
</li>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
<li>
<a href="../project/logging_details.php"><img SRC="image/sitedetails.png" ALT="Site Details" width="90" height="60" ></img></a>
</li>
</form>
<br>
<li>

</li>
</ul>
</td>
</tr>
<tr>
  <td>

<table class="app_listing" style="width:100%;">
		<tr>
			<th align="left" >Job No</th>
			<th align="left" >Site</th>
			<th align="left" >Total</th>
			<th align="left" >Priority</th>
			<th align="left" >Status&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Station &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Site Comments</th>
			<th align="left" >Stat. Comments</th>  
			<th align="left" >Date &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Est.Time (days)</th>
			<th align="left" >Log</th>
			<th align="left" >Act.Time</th>
			   
<?php

			 
		function loadObject(){
			global $cur;
			global $dbtable;	
	?>
			
			<th align="center"><input name="Totalsamples" type="text" size="2" value="<?php echo count($cur); ?>" /></th>
		
			<?php
			foreach ($cur as $object){	
			
					   echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td >';
						echo '<a href="samples_details.php?id='.$object->taskid.'" class="app_listitem_key">'.$object->taskid.'</a>';		
						echo ' </td><td > ';
						echo $object->site;						
						echo ' </td><td > ';
						echo $object->total;						
						echo ' </td><td > ';
						echo $object->priority;	
                        echo ' </td><td > ';
                        echo $object->status;	
						echo ' </td><td > ';
                        echo $object->assignto;	
                        echo ' </td><td > ';
						echo $object->sitecom;	
						echo ' </td><td > ';
                        echo $object->statcom;
						echo ' </td><td > ';
						echo $object->taskcreatedon;				
						echo ' </td><td > ';
						echo $object->estimation;
						if ($object->actualtime<date("Y-m-d") AND $object->status!="Complete") $diva="#FF9900"; else $diva="#73a049";
						echo ' </td><td >';

						$querylink = "SELECT fssn,lssn,cssn FROM  primary_table WHERE  job_no='{$object->taskid}'";
						$resultlink = mysql_query($querylink) or die ("Error in query: $query. ".mysql_error());
                        $rowlink=mysql_num_rows($resultlink);
						$start=0;
while($rows = mysql_fetch_array($resultlink))
	{	
		$pfssnmax=$rows['fssn'];
		$plssnmax=$rows['lssn'];
		$pcssnmax=$rows['cssn'];
		$start++;
		}
if ($rowlink>0 && !empty($plssnmax) && !empty($pcssnmax) && $plssnmax==$pcssnmax && $pfssnmax!=$pcssnmax) {
	echo '<a href="create_site.php?id='.$object->taskid.'" class="app_listitem_key" style="background-color:indigo;" >Logged</a>';
	echo ' </td><td >';

}
else
{
	if($rowlink>0){
                    echo '<a href="create_site.php?id='.$object->taskid.'" class="app_listitem_key" style="background-color:orange;" >Incomplete..</a>';		
						echo ' </td><td > ';
	}
	else
	{
					echo '<a href="create_site.php?id='.$object->taskid.'" class="app_listitem_key" >Logging</a>';		
						echo ' </td><td > ';
					}
}
					   echo '<div name="tima" id="tima" style="background-color:'.$diva.'">'.$object->actualtime.'</div>';
						echo ' </td><td > ';
						echo '<a href="statsampleupdate1.php?id='.$object->taskid.'&amp;mydbtable='.$dbtable.'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a>';	
						echo ' </td>';
					
			}
		
			return $cur;
		}			
switch($station) {
	  
 		  case '1' :
 		  $viewrecschedule = new Viewrecschedule();
			$cur = $viewrecschedule->allUsers();
			 $dbtable="tblrectaskactivity";
			loadObject();
		  break;
		  case '2' :
 		  $viewlogschedule = new Viewlogschedule();
			$cur = $viewlogschedule->allUsers();
			$dbtable="tbllogtaskactivity";
			loadObject();
		  break;
		  case '3' :
 		  $viewbarschedule = new Viewbarschedule();
			$cur = $viewbarschedule->allUsers();
			$dbtable="tblbartaskactivity";
			loadObject();
		  break;
		  case '4' :
 		  $viewsubsampleschedule = new Viewsubsampleschedule();
			$cur = $viewsubsampleschedule->allUsers();
			$dbtable="tblsubsampletaskactivity";
			loadObject();
		  break;
		  case '5' :
 		  $viewldpsaschedule = new Viewldpsaschedule();
			$cur = $viewldpsaschedule->allUsers();
			$dbtable="tblldpsataskactivity";
		  break;
		  case '6' :
 		  $viewmirschedule = new Viewmirschedule();
			$cur = $viewmirschedule->allUsers();
			$dbtable="tblmirtaskactivity";
			loadObject();
		  break;
		  case '7' :
 		  $viewnirschedule = new Viewnirschedule();
			$cur = $viewnirschedule->allUsers();
			$dbtable="tblnirtaskactivity";
			loadObject();
		  break;
		  case '8' :
 		  $viewxrdschedule = new Viewxrdschedule();
			$cur = $viewxrdschedule->allUsers();
			$dbtable="tblxrdtaskactivity";
			loadObject();
		  break;
		  case '9' :
 		  $viewtxrfschedule = new Viewtxrfschedule();
			$cur = $viewtxrfschedule->allUsers();
			$dbtable="tbltxrftaskactivity";
			loadObject();
		  break;
		  case '10' :
 		  $viewcnoschedule = new Viewcnoschedule();
			$cur = $viewcnoschedule->allUsers();
			$dbtable="tblcnotaskactivity";
			loadObject();
		  break;
		  case '11' :
 		  $viewcntschedule = new Viewcntschedule();
			$cur = $viewcntschedule->allUsers();
			$dbtable="tblcnttaskactivity";
			loadObject();
		  break;
		  case '12' :
 		  $viewhhtxrfschedule = new Viewhhtxrfschedule();
			$cur = $viewhhtxrfschedule->allUsers();
			$dbtable="tblhhtxrftaskactivity";
			loadObject();
		  break;
		  default: header("location:viewstatuscentre.php");
		  }
		?>
		</tr>
		</table>
</td>
</tr>
<table>
<div class="footer">
        
    </div>