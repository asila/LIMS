<html>
<head>
<title>Samples Analysis request Form
</title>
<link rel="stylesheet" href="../stylesheets/mstyle.css">
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
/**
 * @author:Cyrus Bondo 
 * @copyright 2014
 */

 ?>

  <?php
if (isset($_POST['submit'])){
		//form has been submitted1
		//error_reporting(E_ALL^E_NOTICE);
		$service_no= trim($_POST['serviceno']);
		$date_recieved= trim($_POST['Daterecieved']);
		$date_logged = trim($_POST['Datelogged']);
		$date_archive= trim($_POST['Datearchive']);
		$date_returned= trim($_POST['Datereturn']);
		$special_instruction= trim($_POST['specinstra']);
		$submit_by = trim($_POST['submitby']);
		$scientist= trim($_POST['scientist']);
        $organization= trim($_POST['organization']);
		$project= trim($_POST['project']);
		$report_to = trim($_POST['report2']);
		$site= trim($_POST['site']);
		$country= trim($_POST['country']);
		$invoice_to = trim($_POST['invoice2']);
		$phone= trim($_POST['phone']);
        $region	= trim($_POST['region']);
		$email	= trim($_POST['email']);
		$soil= trim($_POST['soil']);
		$water= trim($_POST['water']);
		$plant = trim($_POST['plant']);
		$other= trim($_POST['other']);
		
		if(isset($_POST['sample_status']))
		{ 
		$sample_status = trim(implode(".",$_POST['sample_status']));
		echo $sample_status;
		}
		if(isset($_POST['sample_design']))
		{ 
		$sample_design = trim(implode(".",$_POST['sample_design']));
		echo $sample_design;
		}
		if(isset($_POST['indiv_ana']))
		{ 
		$indiv_ana = trim(implode(".",$_POST['indiv_ana']));
		echo $indiv_ana;
		}
		if(isset($_POST['analytical_pack']))
		{ 
		$analytical_pack = trim(implode(".",$_POST['analytical_pack']));
		echo $analytical_pack;
		}
		if(isset($_POST['chem_suite']))
		{ 
		$chem_suite = trim(implode(".",$_POST['chem_suite']));
		echo $chem_suite;
		}
		if(isset($_POST['basic_sp']))
		{ 
		$basic_sp = trim(implode(".",$_POST['basic_sp']));
		echo $basic_sp;
		}
		if(isset($_POST['dispose']))
		{ 
		$dispose = trim(implode(".",$_POST['dispose']));
		echo $dispose;
		}
		$add_info= trim($_POST['add_info']);
        $author_by	= trim($_POST['authorz']);
		
				
		if($service_no == '' || $date_recieved == '' || $date_logged == '' || $date_archive == '' || $date_returned == '' || $submit_by == ''|| $scientist == ''|| $organization == '' || $project == '' || $report_to == '' || $site == '' || $invoice_to == '' || $phone == '' || $region == '' || $email == '' || $sample_design == '' || $dispose == '' || $author_by == '' || $country == '' ) {
		$warn = "";
		if($service_no == '') $warn .= " provide service number!";
		if($date_recieved == '') $warn .= " provide recieved date!";
		if($date_logged == '') $warn .= " provide date logged!";
		if($date_archive == '') $warn .= " provide archived date!";
		if($date_returned == '') $warn .= " provide return date!";
		if($submit_by == '') $warn .= " submitted by?";
		if($scientist == '') $warn .= " scientist?";
		if($organization == '') $warn .= " provide organization!";
		if($project == '') $warn .= " provide project!";
		if($date_recieved == '') $warn .= " reported to?";
		if($site == '') $warn .= " site?";
		if($invoice_to == '') $warn .= " invoiced to?";
		if($phone == '') $warn .= " phone no?!";
		//if($sample_design == '') $warn .= " provide sample design!";
		//if($dispose == '') $warn .= " provide method of disposal!";
		if($region == '') $warn .= " region?";
		if($email == '') $warn .= " provide email";
		if($author_by == '') $warn .= " authorized by?";
		if($country == '') $warn .= " country?";
		echo($warn);
                        }else{
			  $id =$_REQUEST['id']; 
$query = "UPDATE `formtb` SET `service_no`='{$service_no}',`date_recieved`='{$date_recieved}',`date_logged`='{$date_logged}',`date_archive`='{$date_archive}',`date_returned`='{$date_returned}',`special_instruction`='{$special_instruction}',`submit_by`='{$submit_by}',`scientist`='{$scientist}',`organization`='{$organization}',`project`='{$project}',`country`='{$country}',`region`='{$region}',`site`='{$site}',`report_to`='{$report_to}',`invoice_to`='{$invoice_to}',`phone`='{$phone}',`email`='{$email}',`sample_design`='{$sample_design}',`soil`='{$soil}',`water`='{$water}',`plant`='{$plant}',`other`='{$other}',`sample_status`='{$sample_status}',`indiv_ana`='{$indiv_ana}',`analytical_pack`='{$analytical_pack}',`chem_suite`='{$chem_suite}',`basic_sp`='{$basic_sp}',`add_info`='{$add_info}',`author_by`='{$author_by}',`dispose`='{$dispose}' WHERE  service_no='$id'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
	   		
	  if($result){
$sql="SELECT service_no,site,indiv_ana FROM formtb WHERE  service_no='$id' ORDER BY service_no  DESC LIMIT 1";
$result = mysql_query($sql) or die ("Error in query: $sql. ".mysql_error());
global $indiv_ana1;
while($rows = mysql_fetch_array($result))
{
$service_no1 = $rows['service_no'];
$site1 = $rows['site'];
$indiv_ana1 = explode(".",$rows['indiv_ana']);
}
$a2="2";
$a1="1";
$a="xrd";
if(in_array($a,(array)$indiv_ana1))
{
$query = "UPDATE `status` SET `xrd1`='{$a1}' WHERE  stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
}else{
$query = "UPDATE `status` SET `xrd1`='{$a2}' WHERE  stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());	
}
$b="mir";
if(in_array($b,(array)$indiv_ana1)){
$query = "UPDATE `status` SET `mir1`='{$a1}' WHERE  stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
}else{
$query = "UPDATE `status` SET `mir1`='{$a2}' WHERE  stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
}
$c="nir";
if(in_array($c,(array)$indiv_ana1)){
$query = "UPDATE `status` SET `nir1`='{$a1}' WHERE  stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
}else{
	$query = "UPDATE `status` SET `nir1`='{$a2}' WHERE  stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
}
$d="ldpsa";
if(in_array($d,$indiv_ana1)){
$query = "UPDATE status SET  ldpsa1='{$a1}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
}else{
$query = "UPDATE status SET  ldpsa1='{$a2}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
}
$e="txrf";
if(in_array($e,(array)$indiv_ana1)){
$query = "UPDATE status SET txrf1='{$a1}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
}else{
	$query = "UPDATE status SET txrf1='{$a2}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
}
$f="cnO";
if(in_array($f,(array)$indiv_ana1)){
$query = "UPDATE status SET cno1='{$a1}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
}else{
$query = "UPDATE status SET cno1='{$a2}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());	
}
$g="cnT";
if(in_array($g,(array)$indiv_ana1)){
$query = "UPDATE status SET cnt1='{$a1}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
}else{
	$query = "UPDATE status SET cnt1='{$a2}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
}
$h="hhtxrf";
if(in_array($h,(array)$indiv_ana1)){
$query = "UPDATE status SET htxrf1='{$a1}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
}else{
	$query = "UPDATE status SET htxrf1='{$a2}' WHERE stservice_no LIKE '$service_no1'";
$result = mysql_query($query) or die(mysql_error());
} 

	   $success = "Form updated and saved!";
			echo($success);
			header("location:../project/index.php");
			}else{
	   $fail = "submission failed!";
			echo($fail);
			 }
		}	
	}else{
	$serv = $_REQUEST['id'];

$query = "SELECT  * FROM  formtb WHERE  service_no='{$serv}'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

while($rows = mysql_fetch_array($result))
{
$col++;
		$service_no=$rows['service_no'];
		$date_recieved=$rows['date_recieved'];
		$date_logged=$rows['date_logged'];
		$date_archive=$rows['date_archive'];
		$date_returned=$rows['date_returned'];
		$special_instruction=$rows['special_instruction'];
		$submit_by=$rows['submit_by'];
		$scientist=$rows['scientist'];
      $organization=$rows['organization'];
		$project=$rows['project'];
		$country=$rows['country'];
		$site=$rows['site'];
		$region=$rows['region'];
		$report_to=$rows['report_to'];
		$invoice_to=$rows['invoice_to'];
		$phone=$rows['phone'];
		$email=$rows['email'];
		$sample_design=explode(".",$rows['sample_design']);
		$soil=$rows['soil'];
		$water=$rows['water'];
		$plant=$rows['plant'];
		$other=$rows['other'];
		$sample_status=explode(".",$rows['sample_status']);
		$indiv_ana=explode(".",$rows['indiv_ana']);
		$analytical_pack=explode(".",$rows['analytical_pack']);
		$chem_suite=explode(".",$rows['chem_suite']);
		$basic_sp=explode(".",$rows['basic_sp']);
		$add_info=$rows['add_info'];
        $author_by=$rows['author_by'];
		$dispose=explode(".",$rows['dispose']);
							}
                         
	}
		
	
?>
<link rel="stylesheet" href="../stylesheets/protec.css">
<link rel="stylesheet" href="../style.css">
<Table class="app_listing" style="width:100%;";
	<tr align="center">
		<td>
			
<br>
<br>
			Analysis Request Submission Form
		</td>
	</tr>
</Table>	
</head>
<body>
<form name="submission" id="submission" action="viewrequest.php" method="post" target="_self">
<hr>
<table name="tbl1" id="tbl1" width="100%" cellSpacing=0 cellPadding=5 width="100%" border=0 >
<tr>
<td >
<table name="tbl2" id="tbl2" cellSpacing=0 cellPadding=5 width="100%" border=0>
<tr>
	<td >For laboratory Use only</td>
	<td></td>
</tr>
<tr>
	<td >Date Recieved:</td>
	<td><input type="text" size="20" id="Daterecieved" name="Daterecieved"  value="<?php echo $date_recieved;?>" /><a href="javascript:showCal('Cal DR')"><img src="images/cal.gif" alt="cal"/></a></td>
</tr>
<tr>
	<td >Date logged:</td>
	<td><input type="text" size="20" id="Datelogged" name="Datelogged"  value="<?php echo $date_logged;?>" /><a href="javascript:showCal('Cal DL')"><img src="images/cal.gif" alt="cal"/></a></td>
</tr>
<tr>
	<td >Service No:</td>
	<td><input type="text" size="20" id="serviceno" name="serviceno"  value="<?php echo $service_no;?>" /></td>
</tr>
<tr>
	<td >Date Archived:</td>
	<td><input type="text" size="20" id="Datearchive" name="Datearchive"  value="<?php echo $date_archive;?>" /><a href="javascript:showCal('Cal DA')"><img src="images/cal.gif" alt="cal"/></a></td>
</tr>
<tr>
	<td >Date Return:</td>
	<td><input type="text" size="20" id="Datereturn" name="Datereturn"  value="<?php echo $date_returned;?>" /><a href="javascript:showCal('Cal DT')"><img src="images/cal.gif" alt="cal"/></a></td>
</tr>
<tr>
	<td >Special instructions:</td>
	<td><textarea rows=3 cols=40 maxlength="100" id="specinstra" name="specinstra" value="<?php echo $special_instruction;?>" ><?php echo $special_instruction;?></textarea></td>
</tr>
</table>
</td>
<td rowspan="3" >
<img src="joomla_black.jpg" alt="logo" name="logo" width="150" height="50" id="logo" />
</td>
</tr>
</table>
<hr>
<table name="tbl3" id="tbl3" width="100%" cellSpacing=1 cellPadding=5 width="100%" border=0>
<tr>
	<td colspan="2" ><h3 align="center">ICRAF SOIL-PLANT SPECTRAL DIAGNOSTICS LABORATORY: SAMPLE SUBMISSION AND SERVICES REQUEST FORM</h3></td>
</tr>
<tr>
	<td >
    Contact Details:<br />
    Telephone: +254 (20) 7224000/4235/4279/4163<br />
    Email: icraf-speclab@cgiar.org<br />
    Laboratory Manager, Mercy Nyambura (m.nyambura@cgiar.org)<br />
    Website: www. http://worldagroforestry.org/research/land-health
    </td>
    <td >
    Address Details:<br />
    World Agroforestry Centre,<br />
    Mailing: P.O Box 30677-00100 Nairobi, Kenya<br />
    Physical address: United Nations Avenue<br />
    Off Limuru Road, Gigiri, Nairobi, Kenya
    </td>
</tr>
<tr>
	<td colspan="2"><div align="center">Please refer to the shipping instructions and procedures (Page 3) for shipping requirement and contacts</div><input type="hidden" name="id" id="id"  class="txtbox"  value = "<?php echo $service_no;?>"/></td>
	
</tr>
</table>
<hr>
<table name="tbl4" id="tbl4" width="100%" cellSpacing=0 cellPadding=5 width="100%" border=0>
<tr>
	<td colspan="8" ><h3 align="center">Contact /Billing Information</h3></td>
    
</tr>
<tr>
	<td colspan="2" ><h4 align="center">Client/Report information</h4></td>
	<td colspan="6" ><h4 align="center">Project/Sampling information</h4></td>

</tr>
<tr>
	<td >Submitted by:</td>
	<td><input type="text" size="20" id="submitby" name="submitby"  value="<?php echo $submit_by;?>" /></td>
	<td >Scientist:</td>
	<td><input type="text" size="20" id="scientist" name="scientist"  value="<?php echo $scientist;?>" /></td>
</tr>
<tr>
	<td >Organization:</td>
	<td><input type="text" size="20" id="organization" name="organization"  value="<?php echo $organization;?>" /></td>
	<td >Project:</td>
	<td><input type="text" size="20" id="project" name="project"  value="<?php echo $project;?>" /></td>
</tr>
<tr>
	<td >Report to:</td>
	<td><input type="text" size="20" id="report2" name="report2"  value="<?php echo $report_to;?>" /></td>
	<td >Site:</td>
	<td><input type="text" size="20" id="site" name="site"  value="<?php echo $site;?>" /></td>
</tr>
<tr>
	<td >Invoice To:</td>
	<td><input type="text" size="20" id="invoice2" name="invoice2"  value="<?php echo $invoice_to;?>" /></td>
	<td >Country:</td>
	<td><input type="text" size="20" id="country" name="country" value="<?php echo $country;?>" /></td>
</tr>
<tr>
	<td >Phone:</td>
	<td><input type="text" size="20" id="phone" name="phone"  value="<?php echo $phone;?>" /></td>
	<td >Region:</td>
	<td><input type="text" size="20" id="region" name="region"  value="<?php echo $region;?>" /></td>
</tr>
<tr>
    <td >Email:</td>
	<td><input type="email" size="20" id="email" name="email"  value="<?php echo $email;?>" /></td>
	<td >Sampling Design:</td>
	<td><input type="radio"  name="sample_design[]" value="ldsf" <?php $ldsf="ldsf"; if(in_array($ldsf,(array)$sample_design)) echo 'checked="checked"'; ?> />LDSF<input type="radio"  name="sample_design[]" value="nldsf" <?php $nldsf="nldsf"; if(in_array($nldsf,(array)$sample_design)) echo 'checked="checked"'; ?> />NON-LDSF</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>


<table name="tbl5" id="tbl5" cellSpacing=1 cellPadding=5 width="100%" border=0>
<tr>
	<td colspan="12" ><h3 align="center">Samples Information</h3></td>
</tr>
<tr>
	<td colspan="2" >Samples Quantities (tick type)</td>
	
	<td colspan="10" >Samples Status (tick type)</td>
	
</tr>
<tr>
	<td><label>Soil:</label><input type="text" size="20" id="soil" name="soil"  value="<?php echo $soil;?>" /></td>
	<td><label>Water:</label><input type="text" size="20" id="water" name="water" value="<?php echo $water;?>" /></td>
	<td><label>Wet:</label><input type="checkbox" size="20" name="sample_status[]" value="wet" <?php $wet="wet"; if(in_array($wet, (array)$sample_status)) echo 'checked="checked"'; ?>/></td>
	<td><label>Dry:</label><input type="checkbox" size="20" name="sample_status[]" value="dry" <?php $dry="dry"; if(in_array($dry, (array)$sample_status)) echo 'checked="checked"'; ?>/></td>
</tr>
<tr>
	<td><label>Plant:</label><input type="text" size="20" id="plant" name="plant"  value="<?php echo $plant;?>" /></td>
    <td><label>Other:</label><input type="text" size="20" id="other" name="other"  value="<?php echo $other;?>" /></td>
	<td><label>Processed:</label><input type="checkbox" size="20" name="sample_status[]" value="processed" <?php $processed="processed"; if(in_array($processed,(array)$sample_status)) echo 'checked="checked"'; ?> /></td>
	<td><label>Unprocessed:</label><input type="checkbox" size="20" name="sample_status[]" value="unprocessed" <?php $unprocessed="unprocessed"; if(in_array($unprocessed, (array)$sample_status)) echo 'checked="checked"'; ?> /></td>
</tr>
<tr>
	<td colspan="6" align="center">Please indicate the quantity of sample in the box</td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>
<table name="tbl6" id="tbl6" cellSpacing=1 cellPadding=5 width="100%" border=0>
<tr>
	<td colspan="6" align="center" ><h5>*Items to include with the samples</h5></td>
</tr>
<tr>
	<td>
<ul>
    <li>Digital/soft sample inventory in MS excel compatible format</li>
    <li>Paper copy of above</li>
</ul>
</td>
</tr>
<tr>
	<td><div align="center">Please see instructions (Page 2) for each sample logging requirements to include in the inventory</div></td>
</tr>
</table>
<hr>
<table name="tbl7" id="tbl7" cellSpacing=1 cellPadding=5 width="100%" border=0>
<tr>
	<td colspan="16" ><h3 align="center">Laboratory Tests</h3></td>
	
</tr>
<tr>
	<td colspan="16"  align="center"><h5>Individual Analysis (tick test)</h5></td>
	
</tr>
<tr>
	<td><label>MIR</label><input type="checkbox" name="indiv_ana[]" value="mir" <?php $mir="mir"; if(in_array($mir, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
	<td><label>NIR</label><input type="checkbox" name="indiv_ana[]" value="nir" <?php $nir="nir"; if(in_array($nir, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
    <td><label>CN Organic</label><input type="checkbox" name="indiv_ana[]" value="cnO" <?php $cnO="cnO"; if(in_array($cnO, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
    <td><label>CN Total</label><input type="checkbox" name="indiv_ana[]" value="cnT" <?php $cnT="cnT"; if(in_array($cnT, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
    <td><label>LDPSA</label><input type="checkbox" name="indiv_ana[]" value="ldpsa" <?php $ldpsa="ldpsa"; if(in_array($ldpsa, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
</tr>
<tr>
	<td><label>TXRF</label><input type="checkbox" name="indiv_ana[]" value="txrf" <?php $txrf="txrf"; if(in_array($txrf, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
	<td><label>HHXRF</label><input type="checkbox" name="indiv_ana[]" value="hhtxrf" <?php $hhxrf="hhtxrf"; if(in_array($hhxrf, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
    <td><label>XRD</label><input type="checkbox" name="indiv_ana[]" value="xrd" <?php $xrd="xrd"; if(in_array($xrd, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
    <td><label>Other</label><input type="checkbox" name="indiv_ana[]" value="other" <?php $moisture="other"; if(in_array($other, (array)$indiv_ana)) echo 'checked="checked"'; ?>/></td>
    <td></td>
</tr>
<tr>
	<td colspan="16"  align="center"><h5>Analytical Packages (tick test)</h5></td>
	
</tr>
<tr>
	<td><label>Sentinel Soil Reference full</label><input type="checkbox" name="analytical_pack[]" value="ssrf" <?php $ssrf="ssrf"; if(in_array($ssrf, (array)$analytical_pack)) echo 'checked="checked"'; ?>/></td>
	<td><label>Sentinel Soil Reference light</label><input type="checkbox" name="analytical_pack[]" value="ssrl" <?php $ssrl="ssrl"; if(in_array($ssrl, (array)$analytical_pack)) echo 'checked="checked"'; ?>/></td>
    <td><label>Cummass</label><input type="checkbox" name="analytical_pack[]" value="cm" <?php $cm="cm"; if(in_array($cm, (array)$analytical_pack)) echo 'checked="checked"'; ?>/></td>
    <td><label>Engineering Properties Suite</label><input type="checkbox" name="analytical_pack[]" value="eps" <?php $eps="eps"; if(in_array($eps, (array)$analytical_pack)) echo 'checked="checked"'; ?>/></td>
    <td></td>
</tr>
<tr>
	<td><label>Sentinel Soil MIR</label><input type="checkbox" name="analytical_pack[]" value="ssm" <?php $ssm="ssm"; if(in_array($ssm, (array)$analytical_pack)) echo 'checked="checked"'; ?> /></td>
	<td><label>Full CRP6 Sentinel Landscapes</label><input type="checkbox" name="analytical_pack[]" value="fcsl" <?php $fcsl="fcsl"; if(in_array($fcsl, (array)$analytical_pack)) echo 'checked="checked"'; ?>/></td>
    <td><label>Other</label><input type="checkbox" name="analytical_pack[]" value="other" <?php $other="other"; if(in_array($other, (array)$analytical_pack)) echo 'checked="checked"'; ?>/></td>
	<td><label>Soil Physics Suite</label><input type="checkbox" name="analytical_pack[]" value="sps" <?php $sps="sps"; if(in_array($sps, (array)$analytical_pack)) echo 'checked="checked"'; ?>/></td>
	<td></td>
</tr>
<tr>
	<td ><label><h5>AfSIS wet chemistry suite:</h5></label></td>
	<td ><label>Soil:</label><input type="checkbox" name="chem_suite[]" value="soil" <?php $soil="soil"; if(in_array($soil, (array)$chem_suite)) echo 'checked="checked"'; ?>/></td>
    <td ><label>Plant:</label><input type="checkbox" name="chem_suite[]" value="plant" <?php $plant="plant"; if(in_array($plant, (array)$chem_suite)) echo 'checked="checked"'; ?>/></td>
    <td ><label>other:</label><input type="checkbox" name="chem_suite[]" value="other" <?php $other="other"; if(in_array($other, (array)$chem_suite)) echo 'checked="checked"'; ?> /></td>
</tr>
<tr>
     <td  ><label><h5>Basic soil processing:</h5></label></td>
    <td  ><label>Soil:</label><input type="checkbox" name="basic_sp[]" value="soil" <?php $soil="soil"; if(in_array($soil,(array)$basic_sp)) echo 'checked="checked"'; ?>/></td>
    <td  ><label>Plant:</label><input type="checkbox" name="basic_sp[]" value="plant" <?php $plant="plant"; if(in_array($plant, (array)$basic_sp)) echo 'checked="checked"'; ?>/></td>
    <td  ><label>other:</label><input type="checkbox" name="basic_sp[]" value="other" <?php $other="other"; if(in_array($other,(array)$basic_sp)) echo 'checked="checked"'; ?>/></td>
     
</tr>
<tr>
	<td colspan="16"  align="center">Please refer to the laboratory tests details (Page 2) for test names, cost and requirements.</td>

</tr>
<tr>
	<td colspan="11"><label>Additional Information:</label>
	  <textarea cols="40" rows="3" maxlength="100" id="add_info" name="add_info" value="<?php echo $add_info;?>"><?php echo $add_info;?></textarea></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>
<hr>
<table name="tbl8" id="tbl8" width="100%" cellSpacing=1 cellPadding=5 width="100%" border=0>
<tr>
	<td colspan="1" ><label>Testing Authorized by:</label></td>
	<td><input type="text" size="20" name="authorz" value="<?php echo $author_by;?>"/></td>
	<td ><label>*Disposal of Surplus Samples</label></td>
	
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="checkbox" name="dispose[]" value="Archive" <?php $Archive="Archive"; if(in_array($Archive, (array)$dispose)) echo 'checked="checked"'; ?> /><label>Archive at ICRAF Systems</label></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="checkbox" name="dispose[]" value="RTS" <?php $rts="RTS"; if(in_array($rts, (array)$dispose)) echo 'checked="checked"'; ?> /><label>Return To Sender</label></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="checkbox" name="dispose[]" value="Dispose" <?php $disposa="Dispose"; if(in_array($disposa, (array)$dispose)) echo 'checked="checked"'; ?>/><label>Dispose</label></td>
	<td></td>
</tr>
<tr>
	<td colspan="16"  align="center">Surplus foreign samples will be autoclaved before disposal</td>
	
</tr>
</table>

</form>
</body>
</html>
