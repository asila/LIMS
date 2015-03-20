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
		$studyno	= trim($_POST['studyno']);
		$name	= trim($_POST['name']);
                            $scientist= trim($_POST['scientist']);
		$site	= trim($_POST['site']);
                            $country	= trim($_POST['country']);
		if($analysisno == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Study No!");
					window.location = "edit_study.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Name!");
					window.location = "edit_study.php";
				</script>
				<?php
		}elseif($scientist == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Scientist!");
					window.location = "edit_analysis.php";
				</script>
				<?php
		}elseif($site == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Site!");
					window.location = "edit_analysis.php";
				</script>
				<?php
		}elseif($country == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Country!");
					window.location = "edit_analysis.php";
				</script>
				<?php
		}else{
                                          $id =$_REQUEST['id'];
                                          $query = "UPDATE study SET studyno='{$studyno}',name='{$name}' ,scientist='{$scientist}',site='{$site}',country='{$country}' WHERE studyno='$id'";
			
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			 if($result){?>
				<script type="text/javascript">
					alert("Study has been successfully update!");
					//window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "Study being edited not updated!";
			 }
		}	
	}else{


$site = $_REQUEST['id'];

$query = "SELECT  * FROM  study WHERE  studyno='{$site}'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$studyno= $rows['studyno'];
		$name	= $rows['name'];
        $scientist= $rows['scientist'];
		$site= $rows['site'];
		$country= $rows['country'];
						}
                         
	}

?>

<div id="content">
 
<form  method="post" action="edit_study.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Analysis Details</div></th>
	</tr>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				<input type="hidden" name="id" id="id"  class="txtbox"  value = "<?php echo $site;?>"/>

				<tr>
				   <td class="label" width="120">Study No :: </td>
				  <td >
					 <input type="text" name="studyno" id="studyno"  class="txtbox"  value = "<?php echo $studyno;?>"/>
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Name :: </td>
				  <td >
					 <input type="text" name="name" id="name"  class="txtbox"  value="<?php echo $name;?>"/>
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Scientist:: </td>
				  <td >
					 <input type="text" name="scientist" id="scientist"  class="txtbox"  value="<?php echo $scientist;?>"/>
					</td>
				</tr>
<tr>
				   <td class="label" width="120">Site :: </td>
				  <td >
					 <input type="text" name="site" id="site"  class="txtbox"  value="<?php echo $site;?>"/>
					</td>
				</tr>
<tr>
				   <td class="label" width="120">Country :: </td>
				  <td >
					 <input type="text" name="country" id="country"  class="txtbox"  value="<?php echo $country;?>"/>
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

  