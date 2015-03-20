<?php
/**
	
*/
	require_once("includes/initialize.php");
	include_layout_template_public('header.php');
?>
<link rel="stylesheet" href="mstyle.css">
<div id='vmenu'>
<ul>
<li><a href="index.php">Home</a></li><li><a href="ir_sample.php">IR</a></li>&nbsp;&nbsp;&nbsp;<li><a href="txrf_sample.php">TXRF</a></li>&nbsp;&nbsp;&nbsp;<li><a href="xrd_sample.php">XRD</a></li>
&nbsp;&nbsp;&nbsp;<li><a href="Viewreport.php">Sites</a></li>&nbsp;&nbsp;&nbsp;<li><a href="cn_sample.php">CN</a></li>&nbsp;&nbsp;&nbsp;<li><a href="atterberg_sample.php">ATTERBERG</a></li>&nbsp;&nbsp;&nbsp;<li><a href="wetchem_sample.php">Wet Chem</a></li>
</ul>
</div>
<div id="module-name">
</div>	
<div id="content">
<table class="app_listing" style="width:100%;">
	<tr align="center">
		<td>
			<a href="create_report.php" class="app_listitem_key">[New Entry]</a>
		</td>
	</tr>
</table>	
<Table class="app_listing" style="width:100%;">
		<tr>
	      
			
			<th align="left">siteno</th>
			<th align="left">Name</th>
                                          <th align="left">Report Generated</th>
                                          <th align="left">Number of Samples</th>
			<th align="left">Reported</th>
                                          <th align="left">Total Samples</th>
        </tr>
<?php
 			$report = new Report();
			 $cur =$report->allReports();
			 loadObject();
 	 		
		function loadObject(){
			global $cur;	
			foreach ($cur as $object){	
				
					              echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
					                       @$odd = !$odd;
						
						echo ' <td> ';
						echo '<a href="edit_report.php?id='.$object->siteno.'" class="app_listitem_key">'.$object->siteno.'</a>';			
						echo ' <td> ';
						echo  $object->name;
						echo ' <td> ';
?>

<input name="rgenerate" type="checkbox" id="rgenerate" value="<?php echo '$rgenerate'; ?>" <?php  if( $object->rgenerate=='Yes') { echo 'checked="checked" ' ;} else { echo 'checked="checked" ' ;}?> />
<?php
						echo $object->rgenerate;
                                                                                    echo ' <td> ';
						echo $object->nosample;
						echo ' <td> ';
?>

<input name="report" type="checkbox" id="report" value="<?php echo '$rgenerate'; ?>" <?php  if( $object->report=='Yes') { echo 'checked="checked" ' ;} else { echo 'checked="checked" ' ;}?> />
<?php
						echo $object->report;
						echo ' <td> ';
						echo $object->tsample;
						echo ' <td align="center"> ';
						echo '<a href="edit_report.php?id='.$object->siteno.'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a><IMG SRC="images/bar.PNG" ALT="bar"></A></a>';	
						echo '<a href="delete_report.php?id='. $object->siteno.'" class="app_listitem_key"><IMG SRC="images/delete.PNG" ALT="Delete"></A></a>';
			}
		}			

		?>

</table>

  