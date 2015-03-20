<?php
	require_once("includes/initialize.php");
	include_layout_template_public('header.php');
?>
<link rel="stylesheet" href="mstyle.css">
<div id='vmenu'>
<ul>
<li><a href="index.php">Home</a></li><li><a href="Viewstudy.php">Study</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewanalysis.php">Analysis</a></li>
&nbsp;&nbsp;&nbsp;<li><a href="Viewreport.php">Reports</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewsite.php">Sites</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewscientist.php">Scientists</a></li>
</ul>
</div>
<div id="module-name">
</div>	
			
		
<div id="content">
<table class="app_listing" style="width:100%;">
	<tr align="center">
		<td>
			<a href="create_study.php" class="app_listitem_key">[New Entry]</a>
		</td>
	</tr>
</table>
<Table class="app_listing" style="width:100%;">
		<tr>
	      
			
			<th align="left">Studyno</th>
			<th align="left">Name</th>
        </tr>
<?php
 			$study = new Study();
			 $cur =$study->allUsers();
			 loadObject();
 	 		
		function loadObject(){
			global $cur;	
			foreach ($cur as $object){	
				
					              echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
					                       @$odd = !$odd;
						
						echo ' <td> ';
						echo  $object->studyno;			
						echo ' <td> ';
						echo '<a href="searchstudy.php?id='.$object->name.'" class="app_listitem_key">'.$object->name.'</a>';			
						echo ' <td align="center"> ';
						echo '<a href="edit_study.php?id='.$object->studyno.'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a><IMG SRC="images/bar.PNG" ALT="bar"></a>';	
						echo '<a href="delete_study.php?id='. $object->studyno.'" class="app_listitem_key"><IMG SRC="images/delete.PNG" ALT="Delete"></A></a>';
			}
		}			

		?>

</table>

  