<?php

require_once("includes/initialize.php");
include_layout_template_public('header.php');
	?>
<a href="index.php">Home</a><br><hr><a href="search.php">Search</a>

<div id="module-name">Edit analysis
</div>
<?php

	if (isset($_POST['submit'])){
		//form has been submitted1
		$analysisno= trim($_POST['analysisno']);
		$name	= trim($_POST['name']);
                    
		if($analysisno == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Analysis No!");
					window.location = "edit_analysis.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Name!");
					window.location = "edit_analysis.php";
				</script>
				<?php
		}else{
                                          $id =$_REQUEST['id'];
                                          $query = "UPDATE analysis SET analysisno='{$analysisno}',name='{$name}'  WHERE analysisno='$id'";
			
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			 if($result){?>
				<script type="text/javascript">
					alert("Analysis has been successfully update!");
					//window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "Analysis being edited not updated!";
			 }
		}	
	}else{


$site = $_REQUEST['id'];

$query = "SELECT  * FROM  analysis WHERE  analysisno='{$site}'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$analysisno= $rows['analysisno'];
		$name	= $rows['name'];
		
						}
                         
	}

?>

<div id="content">
 
<form  method="post" action="edit_analysis.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Analysis Details</div></th>
	</tr>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				<input type="hidden" name="id" id="id"  class="txtbox"  value = "<?php echo $site;?>"/>

				<tr>
				   <td class="label" width="120">Analysis No :: </td>
				  <td >
					 <input type="text" name="analysisno" id="analysisno"  class="txtbox"  value = "<?php echo $analysisno;?>"/>
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Name :: </td>
				  <td >
					 <input type="text" name="name" id="name"  class="txtbox"  value="<?php echo $name;?>"/>
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

  