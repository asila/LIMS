<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
global $id;
$id=$_REQUEST['id'];
?>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>

<?php include 'pro_dropdown_2.html';?>

<table class="responsive" style="width:100%;">
	<tr align="center">
		<td>
       <a href="reviewstatus.php?id=<?php echo $id;?>">Home</a>
		</td>
	</tr>

  <tr>
  <td>
<table class="app_listing" style="width:100%;">
		<tr>
			<th align="left" >Job No</th>
			<th align="left" >Site</th>
			<th align="left" >Priority</th>
			<th align="left" >Status&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Station &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Date &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Est.Time (days)</th>
			<th align="left" >Act.Time</th>
  <?php
if (isset($_POST['submit']) ){
		//form has been submitted1
		//error_reporting(E_ALL^E_NOTICE);
$taskestdate = $_POST['taskestdate'];
$anadep = $_POST['anadep'];
$taskdate = $_POST['taskdate'];
$statusp = $_POST['statusp'];
$statuslev = $_POST['statuslev'];
$serviceno = $_POST['id'];
$dbtable = $_POST['idtbl'];
	// Escape User Input to help prevent SQL Injection
$taskestdate = mysql_real_escape_string($taskestdate);
$anadep = mysql_real_escape_string($anadep);
$taskdate = mysql_real_escape_string($taskdate);
$statusp = mysql_real_escape_string($statusp);
$statuslev = mysql_real_escape_string($statuslev);
$serviceno = mysql_real_escape_string($serviceno);
$newdate = date('Y-m-d', strtotime($taskdate. " + $taskestdate days"));
			  $id =$_REQUEST['id']; 
$query = "UPDATE $dbtable SET priority='{$statusp}',status='{$statuslev}',assignto='{$anadep}',taskcreatedon='{$taskdate}',estimation='{$taskestdate}',actualtime='{$newdate}' WHERE taskid LIKE '%$id%'";
	//Execute query
$result = mysql_query($query) or die(mysql_error());
	   		
	  if($result){
	  	
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$curPage=curPageName();
if($curPage=="statsampleupdatea.php") {
	 header("location:reviewstatus.php?id=" . $id);
	 break;
}
switch($dbtable) {
	  
 		  case 'tblrectaskactivity' :
 		  $id='1';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tbllogtaskactivity' :
		  $id='2';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tblbartaskactivity' :
		  $id='3';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		  case 'tblssampletaskactivity' :
		  $id='4';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		 case 'tblldpsataskactivity' :
		 $statio='5';
 		  header("location:viewStatsampleSchedule.php?id=" . $id);
		  break;
		  
		 case 'tblmirtaskactivity' :
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
			
			<th align="center">Tasks &nbsp;<input  type="text" name="Totalsamples" size="8" value="<?php echo count($col); ?>" maxlength="20" /></th>
		
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
						echo '<a href="../project/code/viewrequest.php?id='.$rows['taskid'].'" class="app_listitem_key">'.$rows['taskid'].'</a>';		
						echo ' </td><td> ';
						echo $rows['site'];						
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
						<input type="text" size="20" id="taskdate" name="taskdate"  value="<?php echo $rows['taskcreatedon'];?>" /><a href="javascript:showCal('Cal DTask')">&nbsp;<img src="images/cal.gif" alt="cal"/></a>
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
						echo ' <td align="center">';
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