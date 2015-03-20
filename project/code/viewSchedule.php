<html>
<body>
<img src="../print.jpg" alt="printer" onClick="javascript:window.print();s" align="right"/>
<?php
/**

*/
require_once("../includes/initialize.php");
include("../style.php");

?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script language="javascript" type="text/javascript" >
//Browser Support Code
function ajaxFunction(){
 var ajaxRequest;  
 // The variable that makes Ajax possible!
	
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ajaxDiv');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
     location.reload();
   }
 }
 // Now get the value from user and pass it to
 // server script.
 var taskestdate = document.getElementById('taskestdate').value;
 var anadep = document.getElementById('anadep').value;
 var taskdate = document.getElementById('taskdate').value;
 var statusp = document.getElementById('statusp').value;
 var statuslev = document.getElementById('statuslev').value;
 var serviceno = document.getElementById('serviceno').value;
 var queryString = "?statusp=" + statusp ;
 queryString +=  "&statuslev=" + statuslev+"&serviceno=" + serviceno+"&taskdate=" + taskdate+"&anadep=" + anadep+"&taskestdate=" + taskestdate;
 ajaxRequest.open("GET", "recstatusflow.php" + queryString, true);
 ajaxRequest.send(); 
}
</script>
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
<link rel="stylesheet" href="../stylesheets/protec.css">
<link rel="stylesheet" href="../mstyle.css">
<Table class="app_listing" style="width:100%;">
<tr>
<td>
<?php
include('../layouts/header.php');
?>
</td>
</tr>
	<tr align="center">
		<td>
         <link rel="stylesheet" href="../stylesheets/mstyle.css">
		<div id='vmenu'>
		<ul>
		<li>
        <li> <a href="../index.php" class="app_listitem_key">Home</a></li>
			</ul>
			</div>
		</td>
	</tr>

  <tr>
  <td>
<Table class="app_listing" style="width:100%;">
		<tr>
			<th align="left" width="10">Job No</th>
			<th align="left" width="10">Site</th>
			<th align="left" width="10">Priority</th>
			<th align="left" width="10">Status&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" width="10">Station &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" width="10">Date &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" width="10">Est.Time (days)</th>
			<th align="left" width="10">Act.Time</th>
			   
<?php
	  
 		   $viewrecschedule = new Viewrecschedule();
			$cur = $viewrecschedule->allUsers();
			 loadObject();
		function loadObject(){
			global $cur;
				
			
	?>
			
			<th align="center">Tasks &nbsp;<input name="Totalsamples" type="text" size="8" value="<?php echo count($cur); ?>" maxlength="20" /></th>
		
			<?php
			foreach ($cur as $object){	
			?>
			
			<form name="myform" id="myform">
			<input type="hidden" name="serviceno" id="serviceno" value='<?php echo $object->taskid;?>' />
			<?php
					   echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td>';
						echo '<a href="../project/code/viewrequest.php?id='.$object->taskid.'" class="app_listitem_key">'.$object->taskid.'</a>';		
						echo ' </td><td> ';
						echo $object->site;						
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statusp" id="statusp">';
		echo '<option  value="'.$object->priority.'">'.$object->priority.'</option>';	
while($rows = mysql_fetch_array($result))
{
$col++;
		
		echo '<option value='.$rows['priorityname'].'>'.$rows['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslev" id="statuslev">';
		echo '<option  value="'.$object->status.'">'.$object->status.'</option>';	
while($rows = mysql_fetch_array($result))
{
$col++;
		
		echo '<option value='.$rows['statusname'].'>'.$rows['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblanalysis";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadep" id="anadep">';
echo '<option  value="'.$object->assignto.'">'.$object->assignto.'</option>';	
while($rows = mysql_fetch_array($result))

{
$col++;
		
		echo '<option  value="'.$rows['analysis'].'">'.$rows['analysis'].'</option>';
							}
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskdate" name="taskdate"  value="<?php echo $object->taskcreatedon;?>" /><a href="javascript:showCal('Cal DTask')">&nbsp;<img src="../images/cal.gif" alt="cal"/></a>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdate" name="taskestdate"  value="<?php echo $object->estimation;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskactdate" name="taskactdate"  value="<?php echo $object->actualtime;?>" style="<?php echo ($object->actualtime<date("Y-m-d") AND $object->status!="Complete")? "background:silver; color:red;":"";?>"/>
						<?php
						echo ' </td><td> ';
						echo ' <td align="center">';
						echo '<input type="button" onclick="ajaxFunction();" value="Save &nbsp;'.$object->taskid.'"/>';	
						echo ' </td>';
			     		
					   
			}
		
			return $cur;
		}			

		?>
</form>
</tr>
</Table>
</td>
</tr>
<Table>
</body>
</html>
