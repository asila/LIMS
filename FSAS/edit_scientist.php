<?php

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
<?php

	if (isset($_POST['submit'])){
		//form has been submitted1
		$scientistno	= trim($_POST['scientistno']);
		$name	= trim($_POST['name']);
                            $designation= trim($_POST['designation']);
                            $station= trim($_POST['station']);
		if($scientistno ==''){
			?>
				<script type="text/javascript">
					alert("Please Enter Scientist No!");
					window.location = "edit_scientist.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Name!");
					window.location = "edit_scientist.php";
				</script>
				<?php
		}elseif($designation == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter designation!");
					window.location = "edit_scientist.php";
				</script>
				<?php
		
		}elseif($station == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Station!");
					window.location = "edit_scientist.php";
				</script>
				<?php
		}else{
                                          $id =$_REQUEST['id'];
                                          $query = "UPDATE scientist SET scientistno='{$scientistno}',name='{$name}' ,designation='{$designation}',station='{$station}' WHERE scientistno='$id'";
			
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			 if($result){?>
				<script type="text/javascript">
					alert("Scientist has been successfully update!");
					window.location = "Viewscientist.php";
				</script>
				<?php
			}else{
				 echo "Scientist being edited not updated!";
			 }
		}	
	}else{


$site = $_REQUEST['id'];

$query = "SELECT  * FROM  scientist WHERE  scientistno='{$site}'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$scientistno= $rows['scientistno'];
		$name	= $rows['name'];
		$designation	= $rows['designation'];
                            $station= $rows['station'];
						}
                         
	}

?>

<div id="content">
 
<form  method="post" action="edit_scientist.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Site Details</div></th>
	</tr>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				<input type="hidden" name="id" id="id"  class="txtbox"  value = "<?php echo $scientistno;?>"/>

				<tr>
				   <td class="label" width="120">Scientist No :: </td>
				  <td >
					 <input type="text" name="scientistno" id="scientistno"  class="txtbox"  value = "<?php echo $scientistno;?>"/>
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Name :: </td>
				  <td >
					 <input type="text" name="name" id="name"  class="txtbox"  value="<?php echo $name;?>"/>
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Designation :: </td>
				  <td >
					 <input type="text" name="designation" id="designation"  class="txtbox"  value="<?php echo $designation;?>"/>
					</td>
				</tr>
<tr>
				   <td class="label" width="120">Country:: </td>
				  <td >
					 <input type="text" name="station" id="station"  class="txtbox"  value="<?php echo $station;?>"/>
					</td>
				</tr>


<tr>
				
				  <tr>
					<td class="label"></td>
					<td>
					  
					  <input type="submit" name="submit" value="Save" class="app_button">	
				   </td>
				  </tr>
				  	  
		
		</tr>	

</table>
</form>


 <?php //include_layout_template('admin_footer.php');?>

  