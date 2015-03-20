<?php
/**
* Description:	Listing of user.
* Author:		Joken E. Villanueva
* Date Created:	May 24,2013
* Date Modified:June 6, 2013		
*/
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
			<a href="create_scientist.php" class="app_listitem_key">[New Entry]</a>
		</td>
	</tr>
</table>	
<Table class="app_listing" style="width:100%;">
		<tr>
	      
			
			<th align="left">Scientistno</th>
			<th align="left">Name</th>
	                         <th align="left">Designation</th>
                                      <th align="left">Station</th>
		
        </tr>
<?php
 			$site = new Scientist();
			 $cur =$site->allScientist();
			 loadObject();
 	 		
		function loadObject(){
			global $cur;	
			foreach ($cur as $object){	
				
					              echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
					                       @$odd = !$odd;
						
						echo ' <td> ';
						echo '<a href="edit_scientist.php?id='.$object->scientistno.'" class="app_listitem_key">'.$object->scientistno.'</a>';			
						echo ' <td> ';
						echo  $object->name;
                                                                                    echo ' <td> ';
						echo $object->designation;
						echo ' <td> ';
						echo $object->station;					
						echo ' <td align="center"> ';
						echo '<a href="edit_scientist.php?id='.$object->scientistno.'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a><IMG SRC="images/bar.PNG" ALT="bar"></a>';	
						echo '<a href="delete_scientist.php?id='. $object->scientistno.'" class="app_listitem_key"><IMG SRC="images/delete.PNG" ALT="Delete"></A></a>';
			}
		}			

		?>

</table>

  