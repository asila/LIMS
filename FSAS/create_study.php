<?php
/**
* Description:	Create user.
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
<?php

	if (isset($_POST['submit'])){
		//form has been submitted1
		$studyno	= trim($_POST['studyno']);
		$name	= trim($_POST['name']);
		$scientist = trim($_POST['scientist']);
		$site	= trim($_POST['site']);
                            $country	= trim($_POST['country']);
		
		if($studyno == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Study No!");
					window.location = "create_study.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Name!");
					window.location = "create_study.php";
				</script>
				<?php
		}elseif($scientist == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter scientist!");
					window.location = "create_study.php";
				</script>
				<?php
		}elseif($site == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Site!");
					window.location = "create_study.php";
				</script>
				<?php
                           }elseif($country == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter country!");
					window.location = "create_study.php";
				</script>
				<?php
                         
		}else{
			 $study = new Study();
			 $study->studyno		              = $studyno;
			 $study->name			= $name;
			 $study->scientist 			= $scientist;
			 $study->site 			= $site;
                                           $study->country		              = $country;
			 $istrue = $study->create();
			 if($istrue){?>
				<script type="text/javascript">
					alert("New study has been successfully created!");
					window.location = "create_study.php";
				</script>
				<?php
			}else{
				 echo "Inserting Failed!";
			 }
		}	
	}else{
		$studyno	= "";
		$name	= "";
		$scientist= "";
		$site	= "";
                            $country	= "";
		
	}

?>

<div id="content">
 
<form  method="post" action="create_study.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Samples Details</div></th>
	</tr>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				
				<tr>
				   <td class="label" width="120">Study No :: </td>
				  <td >
					 <input type="text" name="studyno" id="studyno"  class="txtbox" />
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">Name :: </td>
				  <td >
					 <input type="text" name="name" id="name"  class="txtbox" />
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Scientist :: </td>
				  <td >
					 <input type="text" name="scientist" id="scientist"  class="txtbox" />
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Site:: </td>
				  <td >
					 <input type="text" name="site" id="site"  class="txtbox" />
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Country:: </td>
				  <td >
					 <input type="text" name="country" id="country"  class="txtbox" />
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

  