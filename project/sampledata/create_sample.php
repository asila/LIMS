<?php
/**

*/
	require_once("includes/initialize.php");
	include_layout_template_public('header.php');
	$countrydata = "select country from countries";
  $countryquery = mysql_query($countrydata);
	$analysisdata = "select name from site";
  $analysisquery = mysql_query($analysisdata);
$sitedata = "select name from site";
  $sitequery = mysql_query($sitedata);
$studydata = "select name from study";
  $studyquery = mysql_query($studydata);
$clusterdata = "select cluster from cluster";
  $clusterquery = mysql_query($clusterdata);
$plotdata = "select plotno from plot";
  $plotquery = mysql_query($plotdata);


	?>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
  $("#Country").change(function()
  {
    var pc_id = $(this).val();
	if(pc_id != '')  
	 {
	  $.ajax
	  ({
	     type: "POST",
		 url: "get_site.php",
		 data: "pc_id="+ pc_id,
		 success: function(option)
		 {
		   $("#Site").html(option);
		 }
	  });
	 }
	 else
	 {
	   $("#Site").html("<option value=''>-- No category selected --</option>");
	 }
	return false;
  });
});
</script>

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
		$Study= trim($_POST['Study']);
		$SSN= trim($_POST['SSN']);
		$Country = trim($_POST['Country']);
		$Site= trim($_POST['Site']);
                            $Cluster	= trim($_POST['Cluster']);
		$Plot	= trim($_POST['Plot']);
		$Dstd = trim($_POST['DStd']);
		$Dcm= trim($_POST['Dcm']);
		$sampletype= trim($_POST['sampletype']);
		$analysis= trim(implode(".", $_POST['analysis']));
		$Bay= trim($_POST['Bay']);
                            $Tray	= trim($_POST['Tray']);
		$Pos= trim($_POST['Pos']);
		$Wt= trim( $_POST['Wt']);
                            $Date = date("Y-m-d H:i:s");
		
		
		
		if($Study == ''){
			?>
				<script type="text/javascript">
					alert("Please Enter Study!");
					window.location = "create_sample.php";
				</script>
				<?php
		}elseif($SSN == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter SSN!");
					window.location = "create_sample.php";
				</script>
				<?php
				}elseif($analysis == ''){	
			?>
				<script type="text/javascript">
					alert("Please Check required analysis");
					window.location = "create_sample.php";
				</script>
				<?php
				}elseif($Country == ''){	
			?>
				<script type="text/javascript">
					alert("Enter Country!");
					window.location = "create_sample.php";
				</script>
				<?php
		}elseif($Site == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Site!");
					window.location = "create_sample.php";
				</script>
				<?php
                           }elseif($Cluster == ''){	
			?>
				<script type="text/javascript">
					alert("Enter Cluster!");
					window.location = "create_sample.php";
				</script>
				<?php
                         }elseif($Plot == ''){	
			?>
				<script type="text/javascript">
					alert("Please Enter Plot!");
					window.location = "create_sample.php";
				</script>
				<?php
                        }else{
			 $sample= new Sample();
			 $sample->Study		              = $Study;
			 $sample->SSN			= $SSN;
			 $sample->Country 		= $Country;
			 $sample->Site 			= $Site;
          $sample->Cluster		              = $Cluster;
			 $sample->Plot			= $Plot;
			 $sample->DStd 			= $DStd;
			 $sample->Dcm			= $Dcm;
          $sample->Date			= $Date;
          $sample->sampletype		= $sampletype;
			 $sample->analysis		= $analysis;
			$sample->Bay			= $Bay;
             $sample->Tray		= $Tray;
			 $sample->Pos		= $Pos;
			$sample->Wt		= $Wt;
			 $istrue = $sample->create();
			 if($istrue){?>
				<script type="text/javascript">
					alert("New sample has successfully added!");
					window.location = "index.php";
				</script>
				<?php
			}else{
				 echo "Inserting Failed!";
			 }
		}	
	}else{
		$Study	= "";
		$SSN	= "";
		$Country	= "";
		$Site	= "";
                            $Cluster	= "";
		$Plot	= "";
		$DStd	= "";
		$Dcm	= "";
                            $Date	= "";
                           $Bay	= "";
		$Tray	= "";
		$Pos	= "";
                            $Wt= "";
                           
	}

?>

<div id="content">
 
<form name="reg"  method="post" action="create_sample.php">


<table class="app_listing" width="51%">
	<tr>
		<th > <div class="app_title" align="left">&nbsp;&nbsp; Samples Details</div></th>
	</tr>
	<tr class="form" >
		<td class="form">
			<table class="app_form">
				
				<tr>
				   <td class="label" width="120">Study :: </td>
				  <td >
<select name="Study" id="Study"  >
<option value="" selected></option>
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
					 <input type="text" name="SSN" id="SSN"  class="txtbox" />
			</td>
			  </tr>	
<tr>
				   <td class="label" width="120">Country :: </td>
				  <td >
					<select name="Country" id="Country" >
<option selected value="" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($countryquery))
{ 
 $col++;
echo  '<option value=',$rows['country'],'>',ucfirst($rows['country']),'</option>';

 }
?>
 </select>
			</td>
			  </tr>	
<tr>
				   <td class="label" width="120">Site:: </td>
				  <td >
					 <select name="Site" id="Site" >
<option selected value="" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($sitequery))
{ 
 $col++;
echo  '<option value=',$rows['name'],'>',ucfirst($rows['name']),'</option>';

 }
?>

 </select>

			</td>
			  </tr>	
<tr>
				   <td class="label" width="120">Cluster:: </td>
				  <td >
					<select name="Cluster" id="Cluster" >
<option selected value="" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($clusterquery))
{ 
 $col++;
echo  '<option value=',$rows['cluster'],'>',ucfirst($rows['cluster']),'</option>';

 }
?>
 </select>
			</td>
			  </tr>	
<tr>
				   <td class="label" width="120">Plot :: </td>
				  <td >
					 <select name="Plot" id="Plot" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($plotquery))
{ 
 $col++;

echo  '<option value=',$rows['plotno'],'>',$rows['plotno'],'</option>';

 }
?>
<option value=""> <input type="text"  class="txtbox" /></option>
 </select>

			</td>
			  </tr>	
<tr>
				   <td class="label" width="120">DStd:: </td>
				  <td >
					 <select name="DStd" id="DStd" >
<option value="" selected></option>
<option value="TopSoil">TopSoil</option>
<option value="SubSoil">SubSoil</option>
<option value=""> <input type="text"    class="txtbox" /></option>
 </select>

			</td>
			  </tr>			
				<tr>
				   <td class="label">Dcm :: </td>
				  <td>
					 <input type="text" name="Dcm" id="Dcm"  class="txtbox" />
				  </td>
				</tr>
				<tr>
				   <td class="label">Date :: </td>
				  <td>
					 <input type="Date" name="Date" id="Date"  value="" class="txtbox" />
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

<table >
<tr>
<td rowspan="2"><input type="text" name="Bay" id="Bay" value="0" class="txtbox"/></td>
<td><input type="button" value=" /\ " onclick="this.form.Bay.value++;" style="font-size:8px;margin:0;padding:0;width:12px;height:10px;" / ></td>
</tr>
<tr>
<td><input type=button value=" \/ " onclick="this.form.Bay.value--;" style="font-size:8px;margin:0;padding:0;width:12px;height:10px;" /></td>
</tr>
</table>

			</td>
			
			  </tr>	
			  <tr>
				   <td class="label" width="120">Tray:: </td>
				  <td >
					
<table >
<tr>
<td rowspan="2"><input type="text" name="Tray" id="Tray" value="0" class="txtbox"/></td>
<td><input type="button" value=" /\ " onclick="this.form.Tray.value++;" style="font-size:8px;margin:0;padding:0;width:12px;height:10px;" / ></td>
</tr>
<tr>
<td><input type=button value=" \/ " onclick="this.form.Tray.value--;" style="font-size:8px;margin:0;padding:0;width:12px;height:10px;" /></td>
</tr>
</table>

			</td>
			  </tr>	
			  <tr>
				   <td class="label" width="120">Position:: </td>
				  <td >
					
<table >
<tr>
<td rowspan="2"><input type="text" name="Pos" id="Pos"  value="0" class="txtbox"/></td>
<td><input type="button" value=" /\ " onclick="this.form.Pos.value++;" style="font-size:8px;margin:0;padding:0;width:12px;height: 10px;" / ></td>
</tr>
<tr>
<td><input type=button value=" \/ " onclick="this.form.Pos.value--;" style="font-size:8px;margin:0;padding:0;width:12px;height:10px;" /></td>
</tr>
</table>

			</td>
			  </tr>	
			  <tr>
				   <td class="label" width="120">weight:: </td>
				  <td >
					 <input type="text" name="Wt" id="Wt"  class="txtbox" />
			</td>
			  </tr>	
				 <tr>
				 <td class="label">
				  Analyses: 
				  	   </td>
          <tr> <td class="label">IR	   </td><td><input type="checkbox" name="analysis[]" value="ir" > 	   </td> 	 </tr>
            <tr><td class="label">TXRF	   </td><td><input type="checkbox" name="analysis[]" value="txrf">	   </td> 	 </tr>
          <tr><td class="label"> XRD	   </td><td><input type="checkbox" name="analysis[]" value="xrd"> 	   </td> 	 </tr>
           <tr><td class="label">CN	   </td><td><input type="checkbox" name="analysis[]" value="cn"> 	   </td> 	 </tr>
          <tr><td class="label"> ATTERBERG	   </td><td><input type="checkbox" name="analysis[]" value="atterberg">	   </td> 	 </tr>
		  <tr> <td class="label">MOISTURE	   </td><td><input type="checkbox" name="analysis[]" value="moisture"> 	   </td> 	 </tr>
          <tr><td class="label"> WET CHEM	   </td><td><input type="checkbox" name="analysis[]" value="wetchem"> 		   </td>		   	 </tr>
			  	 </tr>
           <br>
          
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

  