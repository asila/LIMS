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
                            $rgenerate= trim($_POST['rgenerate']);
                            $nosample= trim($_POST['nosample']);
		$report = trim($_POST['report']);
                            $tsample = trim($_POST['tsample']);
		if($siteno == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Site No!");
					window.location = "edit_report.php";
				</script>
				<?php
		}elseif($name == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Site Name!");
					window.location = "edit_report.php";
				</script>
				<?php
		}elseif($rgenerate== ''){	
			?>
				<script type="text/javascript">
					alert("Is Report Generated!");
					window.location = "edit_report.php";
				</script>
				<?php
		}elseif($nosample == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter No. of Samples!");
					window.location = "edit_report.php";
				</script>
				<?php
                           }elseif($report == ''){	
			?>
				<script type="text/javascript">
					alert("Report?!");
					window.location = "edit_report.php";
				</script>
				<?php
                        
		}elseif($tsample == ''){	
			?>
				<script type="text/javascript">
					alert("Please give Total Sample!");
					window.location = "edit_report.php";
				</script>
				<?php
                        
		}else{
                                          $id =$_REQUEST['id'];
                                          $query = "UPDATE report SET siteno='{$siteno}',name='{$name}', rgenerate='{$rgenerate}',nosample='{$nosample}', report='{$report}' , tsample='{$tsample}' WHERE siteno='$id'";
			
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			 if($result){?>
				<script type="text/javascript">
					alert("Report has been successfully updated!");
					window.location = "Viewreport.php";
				</script>
				<?php
			}else{
				 echo "Report being edited not updated!";
			 }
		}	
	}else{


$site = $_REQUEST['id'];

$query = "SELECT  * FROM  report WHERE  siteno='{$site}'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$siteno= $rows['siteno'];
		$name	= $rows['name'];
		$rgenerate= $rows['rgenerate'];
		$nosample= $rows['nosample'];
        $report	= $rows['report'];
		$tsample= $rows['tsample'];
						}
                         
	}

?>

<div id="content">
 
<form  method="post" action="edit_report.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Report Details</div></th>
	</tr>
	<tr class="form">
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
				   <td class="label" width="120">Report Generated :: </td>
				  <td>
 <input name="rgenerate" type="checkbox" id="rgenerate" value="<?php echo $rgenerate; ?>" <?php  if( $rgenerate=='Yes') { echo 'checked="checked" ' ;} else { echo 'checked="checked" ' ;}?> />
 <?php echo $rgenerate;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<select name="rgenerate" id="rgenerate">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Number of Samples:: </td>
				  <td >
					 <input type="text" name="nosample" id="nosample"  class="txtbox" value="<?php echo $nosample;?>" />
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Reported:: </td>
				  <td>
<input name="report" type="checkbox" id="report" value="<?php echo $report; ?>" <?php  if( $report=='Yes') { echo 'checked="checked" ' ;} else { echo 'checked="checked" ' ;}?> />
 <?php echo $report;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="report" id="report">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
					</td>
				</tr>
<tr>
				   <td class="label" width="120">Total Sample:: </td>
				  <td >
					 <input type="text" name="tsample" id="tsample"  class="txtbox"  value= "<?php echo $tsample;?>"/>
					</td>
				</tr>		
<tr>
				
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

  