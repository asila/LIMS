<img src="print.jpg" alt="" />
<?php

require_once("includes/initialize.php");
include("style.php");
?>

<link rel="stylesheet" href="js/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.js"></script>
<script language="javascript">
function changeme1() {
$( "#progressbar1" ).progressbar({
value: 37
});
if(document.getElementById("reportgen").checked==true)

{
document.getElementById("reportgen").value=1;
}
else
{
document.getElementById("reportgen").value=2;
}
};
</script>

<script language="javascript">
function changeme2() {
$( "#progressbar2" ).progressbar({
        value: 100
});
if(document.getElementById("reported").checked==true)

{
       document.getElementById("reported").value=1
}
else
{
       document.getElementById("reported").value=2
}
};
</script>
<link rel="stylesheet" href="mstyle.css">
<Table class="app_listing" style="width:100%;">
<tr>
<td>
<?php
include_layout_template_public('header.php');
?>
</td>
</tr>
	<tr align="center">
		<td>
			<a href="request.php" class="app_listitem_key">New Entry<IMG SRC="images/data.jpg" ALT="data" width="20" height="18"></A></a>
		</td>
	</tr>

  <tr>
  <td>
<Table class="app_listing" style="width:100%;">
		<tr>
			<th  width="15">Service No</th>
			<th  width="15">Site</th>
			<th  width="15">Report Generation</th>
			<th  width="15">Reported</th>
			    
<?php
		  
 		    $viewreport = new Viewreport();
			$cur = $viewreport->allUsers();
			 loadObject();
		function loadObject(){
			global $cur;

			?>
			
			<th align="center">Total Submission &nbsp;<input name="Totalsamples" type="text" size="8" value="<?php echo count($cur); ?>" maxlength="20" /></th>
			
			<?php
		
			foreach ($cur as $object){	
	   
					   echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;
						echo '<td>';
						echo '<a href="code/viewrequest.php?id='.$object->service_no.'" class="app_listitem_key">'.$object->service_no.'</a>';		
						echo ' </td><td> ';
						echo $object->site;
						echo ' </td><td> ';
						if($object->reportgen == 1) { echo '<IMG SRC="images/bar1.PNG" ALT="bar1" height="14">';} else{ echo ""; }						
						echo ' </td><td> ';
						if($object->reported == 1) { echo '<IMG SRC="images/bar1.PNG" ALT="bar1" height="14">';} else{ echo ""; }	
                  echo ' </td>';
					   echo '</div>';
			}
		
			return $cur;
			$i++;
			
		}			

		?>

</tr>
</Table>
</td>
</tr>
<Table>