<?php

require_once("includes/initialize.php");
include_layout_template_public('header.php');
$sitedata = "select name from site";
  $sitequery = mysql_query($sitedata);
$studydata = "select name from study";
  $studyquery = mysql_query($studydata);
$clusterdata = "select cluster from cluster";
  $clusterquery = mysql_query($clusterdata);
$countrydata = "select Name from country";
  $countryquery = mysql_query($countrydata);
$plotdata = "select plotno from plot";
  $plotquery = mysql_query($plotdata);
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
		$Study	= trim($_POST['Study']);
		$SSN	= trim($_POST['SSN']);
		$Country = trim($_POST['Country']);
		$Site	= trim($_POST['Site']);
        $Cluster	= trim($_POST['Cluster']);
		$Plot	= trim($_POST['Plot']);
		$DStd	= trim($_POST['DStd']);
		$Dcm	= trim($_POST['Dcm']);
        $Date	= trim($_POST['Date']);
        $sampletype	= trim($_POST['sampletype']);
		$analysis= trim(implode(".", $_POST['analysis']));
		$Bay= trim($_POST['Bay']);
        $Tray	= trim($_POST['Tray']);
		$Pos= trim($_POST['Pos']);
		$Wt= trim( $_POST['Wt']);
		if (empty($Date))
{
 $Date = date("Y-m-d H:i:s");
}
else
{
$Date=$Date;
}

		if($Study ==''){
			?>
				<script type="text/javascript">
					alert("Please Enter Study!");
					window.location = "index.php";
				</script>
				<?php
		}elseif($SSN == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter SSN!");
					window.location = "index.php";
				</script>
				<?php
		}elseif($Country == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Country!");
					window.location = "index.php";
				</script>
				<?php
		}elseif($Site == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Site!");
					window.location = "index.php";
				</script>
				<?php
                           }elseif($Cluster == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Cluster!");
					window.location = "index.php";
				</script>
				<?php
                         }elseif($Plot == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Plot!");
					window.location = "index.php";
				</script>
				<?php
                        }elseif($sampletype == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Material Type!");
					window.location = "index.php";
				</script>
				<?php
		}else{
                          
		                  $id =$_REQUEST['id']; 
$query = "UPDATE sample SET Study='{$Study}',SSN='{$SSN}', Country='{$Country}',Site='{$Site}', Cluster='{$Cluster}',Plot='{$Plot}', DStd='{$DStd}',Dcm='{$Dcm}',sampletype='{$sampletype}',Date='{$Date}' ,analysis='{$analysis}' , Bay='{$Bay}',Tray='{$Tray}',Pos='{$Pos}',Wt='{$Wt}' WHERE SSN='$id'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			 if($result){?>
				<script type="text/javascript">
					alert("sample has successfully update!");
					window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "Sample being edited not updated!";
			 }
		}	
	}else{


$site = $_REQUEST['id'];

$query = "SELECT  * FROM  sample WHERE  SSN='{$site}'";

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
		 $analysis= explode(".",$rows['analysis']);
		 $Bay	= $rows['Bay'];
		$Tray	= $rows['Tray'];
		$Pos	= $rows['Pos'];
		$wt	= $rows['Wt'];
							}
                         
	}

?>

<div id="content">
 
<form  method="post" action="edit_sample.php">


<table class="app_listing" width="50%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp;Samples Details</div></th>
	</tr>
	<tr class="form">
		<td class="form">
			<table class="app_form">
				<input type="hidden" name="id" id="id"  class="txtbox"  value = "<?php echo $site;?>"/>

				<tr>
				   <td class="label" width="120">Study :: </td>
				  <td >
					 <select name="Study" id="Study" >
<option value="<?php echo $Study;?>" selected><?php echo $Study;?></option>

<?php
$col=0;
while ($rows = mysql_fetch_array($studyquery))
{ 
 $col++;

echo  '<option value=',$rows['name'],'>',$rows['name'],'</option>';

 }
?>
 </select>
					</td>
				</tr>		
<tr>
				   <td class="label" width="120">SSN :: </td>
				  <td >
					 <input type="text" name="SSN" id="SSN"  class="txtbox"  value="<?php echo $SSN;?>"/>
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Country :: </td>
				  <td >
					 <select name="Country" id="Country" >
<option selected value="<?php echo $Country;?>" ><?php echo $Country;?></option>
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
				   <td class="label" width="120">Site:: </td>
				  <td >
					  <select name="Site" id="Site" >
<option value="<?php echo $Site;?>" selected><?php echo $Site;?></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($sitequery))
{ 
 $col++;
echo  '<option value=',$rows['name'],'>',$rows['name'],'</option>';

 }
?>
 </select>
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Cluster:: </td>
				  <td >
					 <select name="Cluster" id="Cluster" >
<option value="<?php echo $Cluster;?>" selected><?php echo $Cluster;?></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($clusterquery))
{ 
 $col++;

echo  '<option value=',$rows['cluster'],'>',$rows['cluster'],'</option>';

 }
?>
 </select>
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">Plot :: </td>
				  <td >
					 <select name="Plot" id="Plot" >
<option value="<?php echo $Plot;?>" selected><?php echo $Plot;?></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($plotquery))
{ 
 $col++;

echo  '<option value=',$rows['plotno'],'>',$rows['plotno'],'</option>';

 }
?>
 </select>
					</td>
				</tr>	
<tr>
				   <td class="label" width="120">DStd:: </td>
				  <td >
					<select name="DStd" id="DStd" >
					 <option value="<?php echo $DStd;?>" selected><?php echo $DStd;?></option>
					  <option value="Top Soil">Top Soil</option>
					  <option value="Sub Soil">Sub Soil</option>
					
				  </select>
					</td>
				</tr>			
				<tr>
				   <td class="label">Dcm :: </td>
				  <td>
					 <input type="text" name="Dcm" id="Dcm"  class="txtbox"  value= "<?php echo $Dcm;?>"/>
					</td>
				</tr>
				<tr>
				   <td class="label">Date :: </td>
				  <td>
					 <input type="Date" name="Date" id="Date"  class="txtbox"  value="<?php echo $Date;?>"/>
					</td>
				</tr>
				<tr>
				   <td class="label">Material Type :: </td>
				  <td>
					 <select name="sampletype" id="sampletype" >
					  <option value="soil">soil</option>
					  <option value="plant">plant</option>
					
				  </select>
					</td>
				</tr>	
				<tr>
				   <td class="label" width="120">Bay:: </td>
				  <td >
					 <input type="text" name="Bay" id="Bay"  class="txtbox"  value= "<?php echo $Bay;?>"/>
			</td>
			  </tr>	
			  <tr>
				   <td class="label" width="120">Tray:: </td>
				  <td >
					 <input type="text" name="Tray" id="Tray"  class="txtbox" value= "<?php echo $Tray;?>"/>
			</td>
			  </tr>	
			  <tr>
				   <td class="label" width="120">Position:: </td>
				  <td >
					 <input type="text" name="Pos" id="Pos"  class="txtbox"  value= "<?php echo $Pos;?>" />
			</td>
			  </tr>	
			  <tr>
				   <td class="label" width="120">weight:: </td>
				  <td >
					 <input type="text" name="Wt" id="Wt"  class="txtbox"  value= "<?php echo $wt;?>"/>
			</td>
			  </tr>	
				<tr>
				 <td class="label">
				  Analyses: 
				  	   </td>
          <tr> <td class="label">IR	   </td><td><input type="checkbox" name="analysis[]" value="ir"  <?php $ir="ir"; if(in_array($ir,$analysis)) echo 'checked="checked"'; ?>  />   </td> 	 </tr>
            <tr><td class="label">TXRF	   </td><td><input type="checkbox" name="analysis[]" value="txrf"<?php $txrf="txrf"; if(in_array($txrf, $analysis)) echo 'checked="checked"'; ?>/>	   </td> 	 </tr>
          <tr><td class="label"> XRD	   </td><td><input type="checkbox" name="analysis[]" value="xrd"<?php $xrd="xrd"; if(in_array($xrd, $analysis)) echo 'checked="checked"'; ?>/> 	   </td> 	 </tr>
           <tr><td class="label">CN	   </td><td><input type="checkbox" name="analysis[]" value="cn"<?php  $cn="cn";if(in_array($cn, $analysis)) echo 'checked="checked"'; ?>/> 	   </td> 	 </tr>
          <tr><td class="label"> ATTERBERG	   </td><td><input type="checkbox" name="analysis[]" value="atterberg"<?php $atterberg="atterberg"; if(in_array($atterberg, $analysis)) echo 'checked="checked"'; ?>/>	   </td> 	 </tr>
		  <tr> <td class="label">MOISTURE	   </td><td><input type="checkbox" name="analysis[]" value="moisture"<?php $moisture="moisture"; if(in_array($moisture, $analysis)) echo 'checked="checked"'; ?>/> 	   </td> 	 </tr>
          <tr><td class="label"> WET CHEM	   </td><td><input type="checkbox" name="analysis[]" value="wetchem"<?php $wetchem="wetchem"; if(in_array($wetchem, $analysis)) echo 'checked="checked"'; ?>/> 		   </td>		   	 </tr>
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

  