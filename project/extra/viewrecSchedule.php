<html>
<body>

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
			<th align="center" width="10">Job No</th>
			<th align="center" width="10">Site</th>
			<th align="center" width="10">Priority</th>
			<th align="center" width="10">Status&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="center" width="10">Station &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="center" width="10">Date &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="center" width="10">Est.Time (days)</th>
			<th align="center" width="10">Act.Time</th>
			   
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
					  echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td align="center">';
						echo '<a href="viewrequest.php?id='.$object->taskid.'" class="app_listitem_key">'.$object->taskid.'</a>';		
						echo ' </td><td align="center"> ';
						echo $object->site;						
						echo ' </td><td align="center"> ';
						echo $object->priority;	
                  echo ' </td><td align="center"> ';
                  echo $object->status;	
						echo ' </td><td align="center"> ';
                  echo $object->assignto;	
						echo ' </td><td align="center"> ';
						echo $object->taskcreatedon;				
						echo ' </td><td align="center"> ';
						echo $object->estimation;
						if ($object->actualtime<date("Y-m-d") AND $object->status!="Complete") $diva="#FF9900"; else $diva="#73a049";
						echo ' </td><td align="center">';
					   echo '<div name="tima" id="tima" style="background-color:'.$diva.'">'.$object->actualtime.'</div>';
						echo ' </td><td align="center"> ';
						echo '<a href="recupdate.php?id='.$object->taskid.'" class="app_listitem_key"><IMG SRC="../images/button_edit.PNG" ALT="Edit"></A></a>';	
						echo ' </td>';
			}
		
			return $cur;
		}			

		?>
</tr>
</Table>
</td>
</tr>
<Table>
</body>
</html>
