<?php

require_once("includes/initialize.php");
include_layout_template_public('header.php');

	?>
<link rel="stylesheet" href="mstyle.css">
<div id='vmenu'>
<ul>
<li><a href="../data/index.php">Home</a></li><li><a href="ir_sample.php">IR</a></li>&nbsp;&nbsp;&nbsp;<li><a href="txrf_sample.php">TXRF</a></li>&nbsp;&nbsp;&nbsp;<li><a href="xrd_sample.php">XRD</a></li>
&nbsp;&nbsp;&nbsp;<li><a href="Viewreport.php">Sites</a></li>&nbsp;&nbsp;&nbsp;<li><a href="cn_sample.php">CN</a></li>&nbsp;&nbsp;&nbsp;<li><a href="atterberg_sample.php">ATTERBERG</a></li>&nbsp;&nbsp;&nbsp;<li><a href="wetchem_sample.php">Wet Chem</a></li>
</ul>
</div>
<div id="module-name">CN

</div>	
<Table <Table class="app_listing" style="width:100%;">
				<tr>	
			<th align="left">Study</th>
			<th align="right">SSN</th>
			<th align="right">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="right">&nbsp;&nbsp;&nbsp;Site&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cluster</th>
			<th align="right">&nbsp;&nbsp;&nbsp;Plot</th>
			<th align="right">Depth std</th>
			<th align="right">Depth cm&nbsp;&nbsp;&nbsp;</th>
             <th align="right">Date</th>
			 <th align="right">sample type</th>
        </tr>
		</Table>
<?php
		
$query = "SELECT  * FROM  sample WHERE  analysis LIKE '%cn%'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$Study= $rows['Study'];
		$SSN	= $rows['SSN'];
		$Country= $rows['Country'];
		$Site	= $rows['Site'];
        $Cluster	= $rows['Cluster'];
		$Plot	= $rows['Plot'];
		$DStd	= $rows['DStd'];
		$Dcm	= $rows['Dcm'];
         $Date	= $rows['Date'];
		 $sampletype=$rows['sampletype'];
		 
 ?>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				<input type="hidden" name="id" id="id"  class="txtbox"  value = "<?php echo '$analysis';?>"/>

				  <td >
					 <input type="text" name="Study" id="Study"  class="txtbox"  value = "<?php echo $Study;?>"/>
					</td>
				  <td >
					 <input type="text" name="SSN" id="SSN"  class="txtbox"  value="<?php echo $SSN;?>"/>
					</td>
							
				  <td >
					 <input type="text" name="Country" id="Country"  class="txtbox" value="<?php echo $Country;?>"/>
					</td>

				  <td >
					 <input type="text" name="Site" id="Site"  class="txtbox" value="<?php echo $Site;?>" />
					</td>
				  <td >
					 <input type="text" name="Cluster" id="Cluster"  class="txtbox"  value= "<?php echo $Cluster;?>"/>
					</td>
				
		
				  <td >
					 <input type="text" name="Plot" id="Plot"  class="txtbox"  value="<?php echo $Plot;?>"/>
					</td>
				  <td >
					 <input type="text" name="DStd" id="DStd"  class="txtbox"  value="<?php echo $DStd;?>"/>
					</td>
						   
				  <td>
					 <input type="text" name="Dcm" id="Dcm"  class="txtbox"  value= "<?php echo $Dcm;?>"/>
					</td>
			
				  <td>
					 <input type="Date" name="Date" id="Date"  class="txtbox"  value="<?php echo $Date;?>"/>
					</td>
				
				  <td>
					 <input type="text" name="sampletype" id="sampletype"  class="txtbox"  value="<?php echo $sampletype;?>"/>
					</td>
				</tr>	
</table>
<?php
}
?>