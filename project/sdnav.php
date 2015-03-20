<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Samples details</title>
<meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   padding: 0;
   a { color: red; text-decoration: none; border-bottom-style: solid; border-bottom-width: 1px }
a:link    { border-bottom-color: blue }
a:visited { border-bottom-color: purple }
a:hover   { border-bottom-color: green }
a:active  { border-bottom-color: red }
}
</style>
<link href="cupertino/jquery.ui.all.css" rel="stylesheet" type="text/css">
<link href="cupertino/sd.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.ui.core.min.js"></script>
<script type="text/javascript" src="jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="jquery.ui.button.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
   $("#Sample_details").button();
   $("#retrieve_details").button();
   $("#go_back").button();
   $("#sdnrecord").button();
   $("#sdsave").button();
   $("#sdpsrecord").button();
   $("#sdnxtrecord").button();
   $("#sddrecord").button();
   $("#sdexit").button();
});
</script>
</head>
<body>
<?php
require_once("includes/initialize.php");
?>
<?php

if (isset($_POST['submit'])){
      
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
      $region   = trim($_POST['region']);
      $email   = trim($_POST['email']);
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
        $author_by   = trim($_POST['authorz']);
      
            
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

$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$startPoint = $page - 1;
$querynr = "SELECT  * FROM  primary_table ";

$resultnr = mysql_query($querynr) or die ("Error in query: $query. ".mysql_error());
$nume=mysql_num_rows($resultnr);



$rowCount = $nume; 



$query = "SELECT  * FROM  primary_table  ORDER BY job_no ASC LIMIT $startPoint,1";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

while($rows = mysql_fetch_array($result))
{
$col++;
      $service_no=$rows['job_no'];
      $service_no=$rows['lab_logging'];
      $fssn=$rows['fssn'];
      $lssn=$rows['lssn'];
      $scientist=$rows['scientist'];
      $study=$rows['study'];
      $project=$rows['project'];
      $country=$rows['country'];
      $site=$rows['site'];
      $material=$rows['material'];
      $total=$rows['total'];
      $lab_analysis=explode(',',$rows['lab_analysis']);
      $lab_analysis=$rows['lab_analysis'];
      $soil=$rows['soil'];
      $country=$rows['country'];
      $region=$rows['region'];
      $request=$rows['requests'];
      $ref=$rows['ref'];
      $comment=$rows['comment'];
     
    }
                          
   }
?>
<div id="sdform" >
<form name="sampledetails" method="post" action="mailto:bondocyrus@gmail.com" enctype="text/plain" id="sampledetails">
<input type="button" id="Sample_details" name="Sample_details" value="Sample details" >
<input type="button" id="retrieve_details" name="retrieve_details" value="Retrieve study details" >
<a href="viewStatsampleSchedule2.php?id=2"><input type="button" id="go_back" name="go_back" value="Go back" ></a>
<hr id="Line1" >
<div id="study">
<span style="color:#000000;font-family:Arial;font-size:13px;">Study:</span></div>
<input type="text" id="sdstudy"  name="sdstudy" value="<?php echo $study; ?> ">
<div id="scientist">
<span style="color:#000000;font-family:Arial;font-size:13px;">Scientist:</span></div>
<input type="text" id="sdscientist"  name="sdscientist" value="<?php echo $scientist; ?>">
<div id="lablog" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Lab-logging:</span></div>
<input type="text" id="sdlablog"  name="sdlablog" value="<?php echo $lab_logging; ?>">
<div id="labana" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Lab-Analysis:</span></div>
<input type="text" id="sdlabanalysis"  name="sdlabanalysis" value="<?php echo $lab_analysis; ?>">
<div id="material" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Material:</span></div>
<input type="text" id="sdmaterials"  name="sdmaterials" value="<?php echo $material; ?>">
<div id="total" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Total:</span></div>
<input type="text" id="sdtotal"  name="sdtotal" value="<?php echo $total; ?>">
<div id="site">
<span style="color:#000000;font-family:Arial;font-size:13px;">Site:</span></div>
<input type="text" id="sdsite"  name="sdsite" value="<?php echo $site; ?>">
<div id="country" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Country:</span></div>
<input type="text" id="sdcountry"  name="sdcountry" value="<?php echo $country; ?>">
<div id="region" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Region:</span></div>
<input type="text" id="sdregion"  name="sdregion" value="<?php echo $region; ?>">
<div id="comment" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Comments:</span></div>
<textarea name="comm" id="comm" rows="1" cols="39" value="<?php echo $comment; ?>"></textarea>
<div id="lsampleid" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Last Sample ID</span></div>
<input type="text" id="sdlsampleid"  name="sdlsampleid" value="<?php echo $lssn; ?>">
<div id="fsampleid" >
<span style="color:#000000;font-family:Arial;font-size:13px;">First Sample ID</span></div>
<input type="text" id="sdfsampleid"  name="sdfsampleid" value="<?php echo $fssn; ?>">
<div id="logdate" >
<span style="color:#000000;font-family:Arial;font-size:13px;">Log Date</span>
</div>
<input type="date" id="sdlogdate"    name="sdlogdate" value="">
<a href="sdnav.php?page=1"><input type="button" id="sdnrecord" name="sdnrecord" value="First record"></a>
<input type="button" id="sdsave" name="sdsave" value="Save" >
<a href="sdnav.php?page=<?php echo  $page + 1;?>"><input type="button" id="sdnxtrecord" name="sdnxtrecord" value="Next record" ></a>
<a href="sdnav.php?page=<?php echo $rowCount;?>"><input type="button" id="sddrecord" name="sddrecord" value="Last record" ></a>
<input type="button" id="sdexit" name="sdexit" value="Exit" >
<input type="checkbox" id="Checkbox1" name="" value="xrd" <?php $mira="mira"; if(in_array($mira, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:680px;top:351px;z-index:35;">
<div id="wb_Text15" style="position:absolute;left:554px;top:353px;width:60px;height:16px;z-index:36;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">MIR Alpha</span></div>
<input type="checkbox" id="Checkbox5" name="" value="xrd" <?php $mirh="mirh"; if(in_array($mirh, (array)$lab_analysis)) echo 'checked="checked"'; ?>  style="position:absolute;left:680px;top:385px;z-index:37;">
<div id="wb_Text16" style="position:absolute;left:554px;top:390px;width:60px;height:16px;z-index:38;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">MIR Htsxt</span></div>
<input type="checkbox" id="Checkbox9" name="" value="nir" <?php $nir="nir"; if(in_array($nir, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:680px;top:425px;z-index:39;">
<div id="wb_Text17" style="position:absolute;left:554px;top:425px;width:56px;height:32px;z-index:40;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">NIR</span></div>
<input type="checkbox" id="Checkbox13" name="" value="xrd" <?php $other="other"; if(in_array($other, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:680px;top:466px;z-index:41;">
<div id="wb_Text18" style="position:absolute;left:554px;top:469px;width:70px;height:16px;z-index:42;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Other</span></div>
<input type="checkbox" id="Checkbox2" name="" value="xrd" <?php $ldpsa="ldpsa"; if(in_array($ldpsa, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:1280px;top:356px;z-index:69;">
<div id="wb_Text19" style="position:absolute;left:1150px;top:357px;width:56px;height:16px;z-index:43;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">LDPSA</span></div>
<input type="checkbox" id="Checkbox6" name="" value="txrf" <?php $txrf="txrf"; if(in_array($txrf, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:1280px;top:389px;z-index:44;">
<div id="wb_Text20" style="position:absolute;left:1150px;top:389px;width:56px;height:16px;z-index:45;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">TXRF</span></div>
<input type="checkbox" id="Checkbox10" name="" value="xrd" <?php $xrd="xrd"; if(in_array($xrd, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:1280px;top:424px;z-index:46;">
<div id="wb_Text21" style="position:absolute;left:1150px;top:430px;width:56px;height:16px;z-index:47;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">XRD</span></div>
<input type="checkbox" id="Checkbox14" name="" value="xrd" <?php $cnO="cnO"; if(in_array($cnO, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:1280px;top:463px;z-index:48;">
<div id="wb_Text22" style="position:absolute;left:1150px;top:471px;width:60 px;height:16px;z-index:48;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">CN Organic</span></div>
<input type="checkbox" id="Checkbox15" name="" value="hhxrf" <?php $hhxrf="hhxrf"; if(in_array($hhxrf, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:680px;top:508px;z-index:50;">
<div id="wb_Text23" style="position:absolute;left:554px;top:508px;width:56px;height:16px;z-index:51;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">HHXRF</span></div>
<input type="checkbox" id="Checkbox16" name="" value="cnT" <?php $cnT="cnT"; if(in_array($cnT, (array)$lab_analysis)) echo 'checked="checked"'; ?> style="position:absolute;left:1280px;top:500px;z-index:52;">
<div id="wb_Text24" style="position:absolute;left:1150px;top:506px;width:56px;height:16px;z-index:53;text-align:left;">
<span style="color:#000000;font-family:Arial;font-size:13px;">CN Total </span></div>
<div id="navig" style="background-color:blue">
</div>
</form>
</div>
<img src="images/img0001.jpg" id="Banner1" alt="Researcher,Study and Field Details" style="position:absolute;left:0px;top:0px;width:1933px;height:56px;border-width:0;z-index:65;">
<a href="sdnav.php?page=<?php echo $page = ($page>1) ? $page - 1 : 1; ?>"><input type="button" id="sdpsrecord" name="sdpsrecord" value="Previous record" ></a>
</div>
</body>
</html>