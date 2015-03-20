<?php

require_once("includes/initialize.php");
include_layout_template_public('header.php');
$countrydata = "select Name from country";
  $countryquery = mysql_query($countrydata);
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
		$siteno	= trim($_POST['siteno']);
		$name	= trim($_POST['name']);
		$Study	= trim($_POST['study']);
                            $Scientist= trim($_POST['scientist']);
                            $Country	= trim($_POST['country']);
		if($siteno == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Site No!");
					window.location = "edit_site.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Name!");
					window.location = "edit_site.php";
				</script>
				<?php
		
		}elseif($Country == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Country!");
					window.location = "edit_site.php";
				</script>
				<?php
		}else{
                                          $id =$_REQUEST['id'];
 $query = "UPDATE site SET siteno='{$siteno}',name='{$name}' ,Country='{$Country}',Study='{$Study}',Scientist='{$Scientist}' WHERE siteno='$id'";
			
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			 if($result){?>
				<script type="text/javascript">
					alert("Site has been successfully update!");
					window.location = "Viewsite.php";
				</script>
				<?php
			}else{
				 echo "Site being edited not updated!";
			 }
		}	
	}else{


$site = $_REQUEST['id'];

$query = "SELECT  * FROM  site WHERE  siteno='{$site}'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$siteno= $rows['siteno'];
		$name	= $rows['name'];
		$country = $rows['Country'];
		$study	= $rows['Study'];
		$scientist	= $rows['Scientist'];
                            
						}
                         
	}

?>

<div id="content">
 
<form  method="post" action="edit_site.php">


<table class="app_listing" width="50%" >
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Site Details</div></th>
	</tr>
	<tr class="form" >
		<td class="form">
			<table class="app_form">
				<input type="hidden" name="id" id="id"  class="txtbox"  value = "<?php echo $site;?>"/>

				<tr>
				   <td class="label" width="120">Site No :: </td>
				  <td >
					 <input type="text" name="siteno" id="siteno"  class="txtbox"  value = "<?php echo $siteno;?>"/>
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Name :: </td>
				  <td >
					 <input type="text" name="name" id="name"  class="txtbox"  value="<?php echo $name;?>"/>
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Country :: </td>
				  <td >
				  <select name="country" id="country" >
<option  selected="selected" value="<?php echo $country; ?>" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($countryquery))
{ 
 $col++;
echo  '<option value=',$rows['Name'],'>',$rows['Name'],'</option>';

 }
?>
 </select>
					</td>
				</tr>
<tr>
				   <td class="label" width="120">Study :: </td>
				  <td >
					 <input type="text" name="study" id="study"  class="txtbox"  value = "<?php echo $study;?>"/>
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Scientist :: </td>
				  <td >
					 <input type="text" name="scientist" id="scientist"  class="txtbox"  value="<?php echo $scientist;?>"/>
					</td>
				</tr>	
				
				  <tr>
					<td class="label"></td>
					<td>
					  
					  <input type="submit" name="submit" value="Save" class="app_button">	
				   </td>
				  </tr>
				  	  
		
		</tr >	

</table>
</form>


 <?php //include_layout_template('admin_footer.php');?>

  