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
		$analysisno	= trim($_POST['analysisno']);
		$name	= trim($_POST['name']);
		
		if($analysisno == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Analysis No!");
					window.location = "create_analysis.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Name!");
					window.location = "create_user.php";
				</script>
				<?php
		}else{
			 $analysis = new Analysis();
			 $analysis->analysisno = $analysisno;
			 $name->name= $name;
			 $istrue = $analysis->create();
			 if($istrue){?>
				<script type="text/javascript">
					alert("New analysis has been successfully created!");
					window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "Inserting Failed!";
			 }
		}	
	}else{
		$analysisno= "";
		$name	= "";
			
	}

?>

<div id="content">
 
<form  method="post" action="create_analysis.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Analysis Details</div></th>
	</tr>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				
				<tr>
				   <td class="label" width="120">Analysis No :: </td>
				  <td >
					 <input type="text" name="analysisno" id="analysisno"  class="txtbox" />
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Name :: </td>
				  <td >
					 <input type="text" name="name" id="name"  class="txtbox" />
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

  