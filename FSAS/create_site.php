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
		$siteno	= trim($_POST['siteno']);
		$name	= trim($_POST['name']);
		$scientist = trim($_POST['scientist']);
	              $country	= trim($_POST['country']);
		
		if($siteno == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Site No!");
					window.location = "create_site.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Site Name!");
					window.location = "create_site.php";
				</script>
				<?php
		}elseif($country == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter country!");
					window.location = "create_site.php";
				</script>
				<?php
		}elseif($scientist == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Scientist!");
					window.location = "create_site.php";
				</script>
				<?php
                                                   
		}else{
			 $site = new Site();
			 $site->siteno		              = $siteno;
			 $site->name			= $name;
			 $site->scientist 			= $scientist;
			 $site->country		              = $country;
			 $istrue = $site->create();
			 if($istrue){?>
				<script type="text/javascript">
					alert("New site has been successfully created!");
					window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "Inserting Failed!";
			 }
		}	
	}else{
		$siteno	= "";
		$name	= "";
		$scientist= "";
	              $country	= "";
		
	}

?>

<div id="content">
 
<form  method="post" action="create_site.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Site Details</div></th>
	</tr>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				
				<tr>
				   <td class="label" width="120">Site No :: </td>
				  <td >
					 <input type="text" name="siteno" id="siteno"  class="txtbox" />
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Name :: </td>
				  <td >
					 <input type="text" name="name" id="name"  class="txtbox" />
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Country :: </td>
				  <td >
					 <input type="text" name="country" id="country"  class="txtbox" />
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Scientist:: </td>
				  <td >
					 <input type="text" name="scientist" id="scientist"  class="txtbox" />
					</td>
				</tr>	

 <tr>
					<td class="label"></td>
					<td>
					  
					  <input type="submit" name="submit" value="Save" class="app_button">	
				   </td>
				  </tr>

				  	  
				
			</table>	
		</tr>		
</table>
</form>

 <?php //include_layout_template('admin_footer.php');?>

  