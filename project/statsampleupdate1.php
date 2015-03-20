<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
?>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script>

$(function() {
   $( "#taskdate" ).datepicker();
});
</script>
<table class="responsive" style="width:100%;">
	<tr align="center">
		<td>
       <a href="viewStatsampleSchedule.php">Home</a>
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
			<th align="left" >Date &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Est.Time (days)</th>
			<th align="left" >Act.Time</th>
                        <th align="left" >Comments</th>
  <?php
if (isset($_POST['submit']) ){
		//form has been submitted1
		//error_reporting(E_ALL^E_NOTICE);
$taskestdate = $_POST['taskestdate'];
$anadep = $_POST['anadep'];
$taskcom = $_POST['taskcom'];
$taskdate = $_POST['taskdate'];
$statusp = $_POST['statusp'];
$statuslev = $_POST['statuslev'];
$serviceno = $_POST['id'];
$dbtable = $_POST['idtbl'];
$total = $_POST['total'];
	// Escape User Input to help prevent SQL Injection
$taskestdate = mysql_real_escape_string($taskestdate);
$anadep = mysql_real_escape_string($anadep);
$taskdate = mysql_real_escape_string($taskdate);
$statusp = mysql_real_escape_string($statusp);
$statuslev = mysql_real_escape_string($statuslev);
$serviceno = mysql_real_escape_string($serviceno);
$newdate = date('Y-m-d', strtotime($taskdate. " + $taskestdate days"));
			  $id =$_REQUEST['id']; 
$query = "UPDATE $dbtable SET total='{$total}',priority='{$statusp}',status='{$statuslev}',assignto='{$anadep}',taskcreatedon='{$taskdate}',estimation='{$taskestdate}',actualtime='{$newdate}',statcom='{$taskcom}' WHERE taskid LIKE '%$id%'";
	//Execute query
$result = mysql_query($query) or die(mysql_error());
	   		
	  if($result){

switch($dbtable) {
	  
 		  case 'tblrectaskactivity' :
 		  $id='1';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tbllogtaskactivity' :
		  $id='2';
 		  header("location:viewStatsampleSchedule2.php?id=" . $id);
		  break;
		  
		  case 'tblbartaskactivity' :
		  $id='3';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tblsubsampletaskactivity' :
		  $id='4';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		 case 'tblldpsataskactivity' :
		 $id='5';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		 case 'tblmirkbrtaskactivity' :
		 $id='71';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
                 case 'tblmirznctaskactivity' :
		 $id='72';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
                 case 'tblnirasdtaskactivity' :
		 $id='73';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
                 case 'tblnirmpataskactivity' :
		 $id='74';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
                 case 'tblmirataskactivity' :
		 $id='6';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tblnirtaskactivity' :
		  $id='7';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tblxrdtaskactivity' :
		  $id='8';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tbltxrftaskactivity' :
		  $id='9';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tblcnotaskactivity' :
		  $id='10';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case "tblcnttaskactivity" :
		  $id='11';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		 case 'tblhhtxrftaskactivity' :
		 $id='12';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  case 'tblmirhtaskactivity' :
		 $id='13';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  default: header("location:viewstatuscentre.php");
		  }	  	
	  	
		
			}else{
	   $fail = "submission failed!";
		echo($fail);
			 }
			
	}else{
$serv =$_REQUEST['id'];
$dbtable=$_REQUEST['mydbtable'];
$query = "SELECT  * FROM  $dbtable WHERE  taskid='{$serv}'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
global $col;
$col=0;
?>
			
			<th align="left"><input  type="text" name="Totalsamples" size="8" value="<?php echo count($col); ?>" /></th>
		
			<?php
while($rows = mysql_fetch_array($result))
{
?>
			
			<form name="myform" id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="hidden" name="id" id="id" value='<?php echo $rows['taskid'];?>' />
			<input type="hidden" name="idtbl" id="idtbl" value='<?php echo $dbtable;?>' />
			<?php
					   echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td>';
						echo $rows['taskid'];		
						echo ' </td><td> ';
						echo $rows['site'];						
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="total" name="total"  value="<?php echo $rows['total'];?>" />
						<?php					
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statusp" id="statusp">';
		echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslev" id="statuslev">';
		echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadep" id="anadep">';
echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
							}
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskdate" name="taskdate"  value="<?php echo $rows['taskcreatedon'];?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdate" name="taskestdate"  value="<?php echo $rows['estimation'];?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskactdate" name="taskactdate"  value="<?php echo $rows['actualtime'];?>" style="<?php echo ($rows['actualtime']<date("Y-m-d") AND $rows['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						<?php
						echo ' </td><td> ';
                                        	?>
						<input type="textarea" size="50" id="taskcom" name="taskcom" style="width: 150px; height: 43px;" value="<?php echo $rows['statcom'];?>" />
						<?php
						echo ' </td><td> ';
						echo '<input type="submit" name="submit" id="submit" value="Save &nbsp;'.$serv.'"/>';	
						echo ' </td>';					   
			}
				
			return $col;            
	}
?>
</form>
</tr>
</table>
</td>
</tr>
<table>