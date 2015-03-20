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
		$designation = trim($_POST['designation']);
	              $station	= trim($_POST['station']);
		
		if($scientistno == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Scientist No!");
					window.location = "create_scientist.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Scientist Name!");
					window.location = "create_site.php";
				</script>
				<?php
		}elseif($designation == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter designation!");
					window.location = "create_site.php";
				</script>
				<?php
		}elseif($station == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Scientist!");
					window.location = "create_station.php";
				</script>
				<?php
                                                   
		}else{
			 $scientist = new Scientist();
			 $scientist->scientistno		              = $scientistno;
			 $scientist->name			= $name;
			 $scientist->designation		= $designation;
			 $scientist->station		              = $station;
			 $istrue = $scientist->create();
			 if($istrue){?>
				<script type="text/javascript">
					alert("New scientist has been successfully created!");
					window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "Inserting Failed!";
			 }
		}	
	}else{
		$scientistno = "";
		$name	= "";
		$designation= "";
	              $station	= "";
		
	}

?>

<div id="content">
 
<form  method="post" action="create_scientist.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Scientist Details</div></th>
	</tr>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				
				<tr>
				   <td class="label" width="120">Scientist No :: </td>
				  <td >
					 <input type="text" name="scientistno" id="scientistno"  class="txtbox" />
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Name :: </td>
				  <td >
					 <input type="text" name="name" id="name"  class="txtbox" />
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Designation :: </td>
				  <td >
					 <input type="text" name="designation" id="designation"  class="txtbox" />
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Country:: </td>
				  <td >
					 <input type="text" name="station" id="station"  class="txtbox" />
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

  