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
<li><a href="index.php">Home</a></li><li><a href="search.php">Search</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewstudy.php">Study</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewanalysis.php">Analysis</a></li>
&nbsp;&nbsp;&nbsp;<li><a href="Viewreport.php">Reports</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewsite.php">Sites</a></li>&nbsp;&nbsp;&nbsp;<li><a href="Viewscientist.php">Scientists</a></li>
</ul>
</div>
<div id="module-name">
</div>		
<div id="content">
<table class="app_listing" style="width:100%;">
	<tr align="center">
		<td>
			<a href="create_site.php" class="app_listitem_key">[New Entry]</a>
		</td>
	</tr>
</table>	
<Table class="app_listing" style="width:100%;">
		<tr>
	      
			
			<th align="left">Siteno</th>
			<th align="left">Name</th>
	                         <th align="left">Country</th>
                                <th align="left">Study</th>
                                      <th align="left">Scientist</th>
		
        </tr>
<?php
 			$site = new Site();
			 $cur =$site->allSite();
			 loadObject();
 	 		
		function loadObject(){
			global $cur;	
			foreach ($cur as $object){	
				
					              echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
					                       @$odd = !$odd;
						
						echo ' <td> ';
                                                                                    echo  $object->siteno;	
						echo ' <td> ';
						echo '<a href="searchsite.php?id='.$object->name.'" class="app_listitem_key">'.$object->name.'</a>';
                                                                                    echo ' <td> ';
						echo $object->Country;
                                                echo ' <td> ';
						echo $object->Study;
						echo ' <td> ';
						echo $object->Scientist;					
						echo ' <td align="center"> ';
						echo '<a href="edit_site.php?id='.$object->siteno.'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a><IMG SRC="images/bar.PNG" ALT="bar"></A></a>';	
						echo '<a href="delete_site.php?id='. $object->siteno.'" class="app_listitem_key"><IMG SRC="images/delete.PNG" ALT="Delete"></A></a>';
			}
		}			

		?>

</table>

  