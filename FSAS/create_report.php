

<?php
/**

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
		$site= trim($_POST['siteno']);
		$name= trim($_POST['name']);
		$rgenerate = trim($_POST['rgenerate']);
		$nosample= trim($_POST['nosample']);
                            $report	= trim($_POST['report']);
		//$tsample= trim($_POST['tsample']);
                            
                            $tsample=$num_rows;
		if($site == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Site No!");
					window.location = "create_report.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Name!");
					window.location = "create_report.php";
				</script>
				<?php
		}elseif($rgenerate == ''){	
			?>
				<script type="text/javascript">
					alert("Is Report has been generated!");
					window.location = "create_report.php";
				</script>
				<?php
		}elseif($nosample == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Samples No!");
					window.location = "create_report.php";
				</script>
				<?php
                           }elseif($report == ''){	
			?>
				<script type="text/javascript">
					alert("Reported?!");
					window.location = "create_report.php";
				</script>
				<?php
                         }elseif($tsample == ''){	
			?>
				<script type="text/javascript">
					alert("Please Total Sample!");
					window.location = "create_report.php";
				</script>
				<?php
                        }else{
			 $report= new Report();
			 $report->siteno		              = $siteno;
			 $report->name			= $name;
			 $report->rgenerate			= $rgenerate;
			 $report->nosample		= $nosample;
                                           $report->report		              = $report;
			 $report->tsample			= $tsample;
			 $istrue = $report->create();
			 if($istrue){?>
				<script type="text/javascript">
					alert("New sample has successfully added!");
					window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "execution Failed!";
			 }
		}	
	}else{
		$siteno	= "";
		$name	= "";
		$rgenerate= "";
		$nosample= "";
                            $report	= "";
		$tsample	= "";
		                           
	}

?>

<div id="content">
 
<form  method="post" action="create_report.php">


<table class="app_listing" width="51%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp; Report Details</div></th>
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
				   <td class="label">Report Generated :: </td>
				  <td>
    <select name="rgenerate" id="rgenerate">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
				  </td>
				</tr>			
<tr>
				   <td class="label" width="120">Number of Samples:: </td>
				  <td >
					 <input type="text" name="nosample" id="nosample"  class="txtbox" />
			</td>
			  </tr>	
<tr>
				   <td class="label">Reported :: </td>
				  <td>
  <select name="report" id="report">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
				  </td>
				</tr>			
<tr>
				   <td class="label" width="120">Total Sample:: </td>
				  <td >

					<input type="text" name="tsample" id="tsample"  class="txtbox" Value="<?php echo $tsample;?>"/>
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

  