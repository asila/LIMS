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
<script language="Javascript">
function chstatus()
{
var x=document.getElementById("recstatus");
x.selectedIndex='1';
}
</script>
<script>
$(function() {
   $( "#taskdate" ).datepicker();
});
</script>
<table class="responsive" style="width:100%;">
	<tr align="center">
		<td>
       <a href="reception.php?id=14">Back</a>
		</td>
	</tr>

  <tr>
  <td>
<table class="app_listing" style="width:100%;">
		<tr>
			<th align="left" >Job No</th>
			<th align="left" >Site</th>
			<th align="left" >Total</th>
			<th align="left" >Type</th>
			<th align="left" >Status</th>
			<th align="left" >Recieved by</th>
			<th align="left" >Date</th>   
  <?php
if (isset($_POST['submit']) ){
		
$recdate = $_POST['taskdate'];
$recby = $_POST['recby'];
$total = $_POST['total'];
$site = $_POST['site'];
$type = $_POST['type'];
$recstatus = $_POST['recstatus'];
$job_no = $_POST['job_no'];
$dbtable = $_POST['idtbl'];
	// Escape User Input to help prevent SQL Injection
$recdate = mysql_real_escape_string($recdate);
$recby = mysql_real_escape_string($recby);
$total = mysql_real_escape_string($total);
$site = mysql_real_escape_string($site);
$type = mysql_real_escape_string($type);
$recstatus = mysql_real_escape_string($recstatus);
$job_no = mysql_real_escape_string($job_no);
			  $id =$_REQUEST['id']; 
$query = "UPDATE $dbtable SET total='{$total}',type='{$type}',status='{$recstatus}',recby='{$recby}',Recdate='{$recdate}' WHERE job_no LIKE '%$id%'";
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
		   case 'reception' :
		 $id='14';
 		  header("location:reception.php?id=" . $id);
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
$query = "SELECT  * FROM  $dbtable WHERE  job_no='{$serv}'";

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
			<input type="hidden" name="id" id="id" value='<?php echo $rows['job_no'];?>' />
			<input type="hidden" name="idtbl" id="idtbl" value='<?php echo $dbtable;?>' />
			<?php
					   echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td>';
						echo $rows['job_no'];		
						echo ' </td><td> ';
						echo $rows['site'];
						echo ' </td><td> ';
						echo '<input type="text" name="total" id="total" value="'.$rows['total'].'"/>';
                        echo ' </td><td> ';
                        echo '<select name="type" id="type" value="'.$rows['type'].'" selected >';
		                echo '<option  value="Soil">Soil</option>';	
		                echo '<option value="Plant">Plant</option>';
		                echo '<option value="Others">Others</option>';
						echo '</select>';					
						echo ' </td><td> ';
		                echo '<select name="recstatus" id="recstatus" value="'.$rows['status'].'" >';	
		                echo '<option  value="Yet to be Recieved">Yet to be Recieved</option>';	
		                echo '<option value="Recieved">Recieved</option>';
						echo '</select>';
						echo ' </td><td> ';
						echo '<input type="text" name="recby" id="recby" value="'.$rows['recby'].'"/>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskdate" name="taskdate"  value="<?php echo $rows['Recdate'];?>" onChange="chstatus(document.getElementById('recstatus'))" />
						<?php
						echo ' </td><td> ';
						echo '<input type="submit" name="submit" id="submit" value="Save &nbsp;'.$job_no.'"/>';	
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