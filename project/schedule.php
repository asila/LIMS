<?php
require_once("../project/includes/initialize.php");

       if(isset($_POST['ref'])) {
      $ref=$_REQUEST['ref'];
      }
      if(isset($_POST['sitecomnts'])) {
      $sitecomnts=$_REQUEST['sitecomnts'];
      }
      if(isset($_POST['schedid'])) {
      $id=$_REQUEST['schedid'];
      }
      if(isset($_POST['statuspa'])) {
      $reca=$_REQUEST['statuspa'];
      }
      if(isset($_POST['statusleva'])) {
      $recb=$_REQUEST['statusleva'];
      }
      if(isset($_POST['anadepa'])) {
      $recc=$_REQUEST['anadepa'];
      }
      if(isset($_POST["recdate"])) {
      $recd=$_REQUEST["recdate"];
      }
      if(isset($_POST['taskestdatea'])) {
      $rece=$_REQUEST['taskestdatea'];
      $recf = date('Y-m-d', strtotime($recd. " + $rece days"));
      }
       if(isset($_POST['reccomnts'])) {
      $reccomnts=$_REQUEST['reccomnts'];
      }
      if(isset($_POST['statuspb'])) {
      $loga=$_REQUEST['statuspb'];
      }
      if(isset($_POST['statuslevb'])) {
      $logb=$_REQUEST['statuslevb'];
      }
      if(isset($_POST['anadepb'])) {
      $logc=$_REQUEST['anadepb'];
      }
      if(isset($_POST['logdate'])) {
      $logd=$_REQUEST['logdate'];
      }
      if(isset($_POST['taskestdateb'])) {
      $loge=$_REQUEST['taskestdateb'];
      $logf = date('Y-m-d', strtotime($logd. " + $loge days"));
      }
      if(isset($_POST['logcomnts'])) {
      $logcomnts=$_REQUEST['logcomnts'];
      }
      if(isset($_POST['statuspc'])) {
      $bara=$_REQUEST['statuspc'];
      }
      if(isset($_POST['statuslevc'])) {
      $barb=$_REQUEST['statuslevc'];
      }
      if(isset($_POST['anadepc'])) {
      $barc=$_REQUEST['anadepc'];
      }
      if(isset($_POST["bardate"])) {
      $bard=$_REQUEST["bardate"];
      }
      if(isset($_POST['taskestdatec'])) {
      $bare=$_REQUEST['taskestdatec'];
      $barf = date('Y-m-d', strtotime($bard. " + $bare days"));
      }
      if(isset($_POST['barcomnts'])) {
      $barcomnts=$_REQUEST['barcomnts'];
      }
      if(isset($_POST['statuspd'])) {
      $suba=$_REQUEST['statuspd'];
      }
      if(isset($_POST['statuslevd'])) {
      $subb=$_REQUEST['statuslevd'];
      }
      if(isset($_POST['anadepd'])) {
      $subc=$_REQUEST['anadepd'];
      }
      if(isset($_POST['subdate'])) {
      $subd=$_REQUEST['subdate'];
      }
      if(isset($_POST['taskestdated'])) {
      $sube=$_REQUEST['taskestdated'];
      $subf = date('Y-m-d', strtotime($subd. " + $sube days"));
      }
      if(isset($_POST['subcomnts'])) {
      $subcomnts=$_REQUEST['subcomnts'];
      }
      if(isset($_POST['statuspe'])) {
      $miraa=$_REQUEST['statuspe'];
      }
      if(isset($_POST["statusleve"])) {
      $mirab=$_REQUEST["statusleve"];
      }
      if(isset($_POST["anadepe"])) {
      $mirac=$_REQUEST["anadepe"];
      }
      if(isset($_POST["miradate"])) {
      $mirad=$_REQUEST["miradate"];
      }
      if(isset($_POST["taskestdatee"])) {
      $mirae=$_REQUEST["taskestdatee"];
      $miraf = date('Y-m-d', strtotime($mirad. " + $mirae days"));
      }
      if(isset($_POST['miracomnts'])) {
      $miracomnts=$_REQUEST['miracomnts'];
      }
	  if(isset($_POST['statuspz'])) {
      $mirha=$_REQUEST['statuspz'];
      }
      if(isset($_POST["statuslevz"])) {
      $mirhb=$_REQUEST["statuslevz"];
      }
      if(isset($_POST["anadepz"])) {
      $mirhc=$_REQUEST["anadepz"];
      }
      if(isset($_POST["mirhdate"])) {
      $mirhd=$_REQUEST["mirhdate"];
      }
      if(isset($_POST["taskestdatez"])) {
      $mirhe=$_REQUEST["taskestdatez"];
      $mirhf = date('Y-m-d', strtotime($mirhd. " + $mirhe days"));
      }
      if(isset($_POST['mirhcomnts'])) {
      $mirhcomnts=$_REQUEST['mirhcomnts'];
      }
      if(isset($_POST["statuspf"])) {
      $nira=$_REQUEST["statuspf"];
      }
      if(isset($_POST["statuslevf"])) {
      $nirb=$_REQUEST["statuslevf"];
      }
      if(isset($_POST["anadepf"])) {
      $nirc=$_REQUEST["anadepf"];
      }
      if(isset($_POST["nirdate"])) {
      $nird=$_REQUEST["nirdate"];
      }
      if(isset($_POST["taskestdatef"])) {
      $nire=$_REQUEST["taskestdatef"];
      $nirf = date('Y-m-d', strtotime($nird. " + $nire days"));
      }
      if(isset($_POST['nircomnts'])) {
      $nircomnts=$_REQUEST['nircomnts'];
      }
      if(isset($_POST["taskactdatef"])) {
      $nirf=$_REQUEST["taskactdatef"];
      }
      if(isset($_POST["statuspg"])) {
      $txrfa=$_REQUEST["statuspg"];
      }
      if(isset($_POST["statuslevg"])) {
      $txrfb=$_REQUEST["statuslevg"];
      }
      if(isset($_POST["anadepg"])) {
      $txrfc=$_REQUEST["anadepg"];
      }
      if(isset($_POST["txrfdate"])) {
      $txrfd=$_REQUEST["txrfdate"];
      }
      if(isset($_POST["taskestdateg"])) {
      $txrfe=$_REQUEST["taskestdateg"];
      $txrff = date('Y-m-d', strtotime($txrfd. " + $txrfe days"));
      }
      if(isset($_POST['txrfcomnts'])) {
      $txrfcomnts=$_REQUEST['txrfcomnts'];
      }
      if(isset($_POST)) {
      $xrda=$_REQUEST["statusph"];
      }
      if(isset($_POST["statuslevh"])) {
      $xrdb=$_REQUEST["statuslevh"];
      }
      if(isset($_POST["anadeph"])) {
      $xrdc=$_REQUEST["anadeph"];
      }
      if(isset($_POST["xrddate"])) {
      $xrdd=$_REQUEST["xrddate"];
      }
      if(isset($_POST["taskestdateh"])) {
      $xrde=$_REQUEST["taskestdateh"];
      $xrdf = date('Y-m-d', strtotime($xrdd. " + $xrde days"));
      }
      if(isset($_POST['xrdcomnts'])) {
      $xrdcomnts=$_REQUEST['xrdcomnts'];
      }
      if(isset($_POST["statuspi"])) {
      $cnoa=$_REQUEST["statuspi"];
      }
      if(isset($_POST["statuslevi"])) {
      $cnob=$_REQUEST["statuslevi"];
      }
      if(isset($_POST["anadepi"])) {
      $cnoc=$_REQUEST["anadepi"];
      }
      if(isset($_POST["cnodate"])) {
      $cnod=$_REQUEST["cnodate"];
      }
      if(isset($_POST["taskestdatei"])) {
      $cnoe=$_REQUEST["taskestdatei"];
       $cnof = date('Y-m-d', strtotime($cnod. " + $cnoe days"));
      }
      if(isset($_POST['cnocomnts'])) {
      $cnocomnts=$_REQUEST['cnocomnts'];
      }
      if(isset($_POST["statuspj"])) {
      $cnta=$_REQUEST["statuspj"];
      }
      if(isset($_POST["statuslevj"])) {
      $cntb=$_REQUEST["statuslevj"];
      }
      if(isset($_POST["anadepj"])) {
      $cntc=$_REQUEST["anadepj"];
      }
      if(isset($_POST["cntdate"])) {
      $cntd=$_REQUEST["cntdate"];
      }
      if(isset($_POST["taskestdatej"])) {
      $cnte=$_REQUEST["taskestdatej"];
      $cntf = date('Y-m-d', strtotime($cntd. " + $cnte days"));
      }
      if(isset($_POST['cntcomnts'])) {
      $cntcomnts=$_REQUEST['cntcomnts'];
      }
      if(isset($_POST["statuspk"])) {
      $ldpsaa=$_REQUEST["statuspk"];
      }
      if(isset($_POST["statuslevk"])) {
      $ldpsab=$_REQUEST["statuslevk"];
      }
      if(isset($_POST["anadepk"])) {
      $ldpsac=$_REQUEST["anadepk"];
      }
      if(isset($_POST["ldpsadate"])) {
      $ldpsad=$_REQUEST["ldpsadate"];
      }
      if(isset($_POST["taskestdatek"])) {
      $ldpsae=$_REQUEST["taskestdatek"];
       $ldpsaf = date('Y-m-d', strtotime($ldpsad. " + $ldpsae days"));
      }
      if(isset($_POST['ldpsacomnts'])) {
      $ldpsacomnts=$_REQUEST['ldpsacomnts'];
      }
      if(isset($_POST["statuspl"])) {
      $htxrfa=$_REQUEST["statuspl"];
      }
      if(isset($_POST["statuslevl"])) {
      $htxrfb=$_REQUEST["statuslevl"];
      }
      if(isset($_POST["anadepl"])) {
      $htxrfc=$_REQUEST["anadepl"];
      }
      if(isset($_POST["htxrfdate"])) {
      $htxrfd=$_REQUEST["htxrfdate"];
      }
      if(isset($_POST["taskestdatel"])) {
      $htxrfe=$_REQUEST["taskestdatel"];
      $htxrff = date('Y-m-d', strtotime($htxrfd. " + $htxrfe days"));
      }
      if(isset($_POST['htxrfcomnts'])) {
      $htxrfcomnts=$_REQUEST['htxrfcomnts'];
      }
$dbsql="SELECT service_no,site,soil,water,plant,indiv_ana FROM formtb WHERE service_no = '{$id}' ORDER BY service_no  DESC LIMIT 1";
$result = mysql_query($dbsql) or die (mysql_error());

if($result) {
global $q4;
global $indiv_ana1;
while($rows = mysql_fetch_array($result))
{
$service_no1 = $rows['service_no'];
$site1 = $rows['site'];
$q1 = number_format($rows['soil'],0);
$q2 = number_format($rows['water'],0);
$q3 = number_format($rows['plant'],0);
$q4 =$q1+$q2+$q3;
(array)$indiv_ana1 = explode(".",$rows['indiv_ana']);
}
       $a="xrd";
       $a1="New";
       $b1="Normal";
       $i="Reception";
       $j="Logging";
       $k="Barcoding";
       $l="Sub-sampling";
       $dt=date("yyyy/mm/dd");
      
if(in_array($a,$indiv_ana1))
{
$sqlxrd="SELECT taskid FROM tblxrdtaskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resultxrd = mysql_query($sqlxrd) or die (mysql_error());
if(mysql_num_rows($resultxrd)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblxrdtaskactivity SET site='{$site1}',priority='{$xrda}',status='{$xrdb}',assignto='{$xrdc}',sitecom='{$sitecomnts}',statcom='{$xrdcomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resultxrd)==0) {
	$query="INSERT IGNORE INTO tblxrdtaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$xrda}','{$xrdb}','{$xrdc}','{$xrdd}','{$xrde}','{$xrdf}','{$sitecomnts}','{$xrdcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
	$query="DELETE FROM tblxrdtaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
	} 

$b="mira";
if(in_array($b,$indiv_ana1))
{
$sqlmira="SELECT taskid FROM tblmirkbrtaskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resultmira = mysql_query($sqlmira) or die (mysql_error());
if(mysql_num_rows($resultmira)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblmirkbrtaskactivity SET site='{$site1}',priority='{$miraa}',status='{$mirab}',assignto='{$mirac}',sitecom='{$sitecomnts}',statcom='{$miracomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblmirznctaskactivity SET site='{$site1}',priority='{$miraa}',status='{$mirab}',assignto='{$mirac}',sitecom='{$sitecomnts}',statcom='{$miracomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resultmira)==0) {
$query="INSERT IGNORE INTO tblmirkbrtaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$miraa}','{$mirab}','{$mirac}','{$mirad}','{$mirae}','{$miraf}','{$sitecomnts}','{$miracomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblmirznctaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$miraa}','{$mirab}','{$mirac}','{$mirad}','{$mirae}','{$miraf}','{$sitecomnts}','{$miracomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
	$query="DELETE FROM tblmirkbrtaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
$query="DELETE FROM tblmirznctaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
	} 

	$bh="mirh";
if(in_array($bh,$indiv_ana1))
{
$sqlmirh="SELECT taskid FROM tblmirhtaskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resultmirh = mysql_query($sqlmirh) or die (mysql_error());
if(mysql_num_rows($resultmira)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblmirhtaskactivity SET site='{$site1}',priority='{$mirha}',status='{$mirhb}',assignto='{$mirhc}',sitecom='{$sitecomnts}',statcom='{$mirhcomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resultmirh)==0) {
	$query="INSERT IGNORE INTO tblmirhtaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$mirha}','{$mirhb}','{$mirhc}','{$mirhd}','{$mirhe}','{$mirhf}','{$sitecomnts}','{$mirhcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
	$query="DELETE FROM tblmirhtaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
	} 
	


$c="nir";
if(in_array($c,$indiv_ana1))
{
$sqlnir="SELECT taskid FROM tblnirasdtaskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resultnir = mysql_query($sqlnir) or die (mysql_error());
if(mysql_num_rows($resultnir)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblnirmpataskactivity SET site='{$site1}',priority='{$nira}',status='{$nirb}',assignto='{$nirc}',sitecom='{$sitecomnts}',statcom='{$nircomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblnirasdtaskactivity SET site='{$site1}',priority='{$nira}',status='{$nirb}',assignto='{$nirc}',sitecom='{$sitecomnts}',statcom='{$nircomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resultnir)==0) {
        $query="INSERT IGNORE INTO tblnirmpataskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$nira}','{$nirb}','{$nirc}','{$nird}','{$nire}','{$nirf}','{$sitecomnts}','{$nircomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblnirasdtaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$nira}','{$nirb}','{$nirc}','{$nird}','{$nire}','{$nirf}','{$sitecomnts}','{$nircomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
	$query="DELETE FROM tblnirasdtaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());
$query="DELETE FROM tblnirmpataskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());		
	} 
	
$d="ldpsa";
if(in_array($d,$indiv_ana1))
{
$sqlldpsa="SELECT taskid FROM tblldpsataskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resultldpsa = mysql_query($sqlldpsa) or die (mysql_error());
if(mysql_num_rows($resultldpsa)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblldpsataskactivity SET site='{$site1}',priority='{$ldpsaa}',status='{$ldpsab}',assignto='{$ldpsac}',sitecom='{$sitecomnts}',statcom='{$ldpsacomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resultldpsa)==0) {
	$query="INSERT IGNORE INTO tblldpsataskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$ldpsaa}','{$ldpsab}','{$ldpsac}','{$ldpsad}','{$ldpsae}','{$ldpsaf}','{$sitecomnts}','{$ldpsacomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
	$query="DELETE FROM tblldpsataskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
	} 
	
$e="txrf";
if(in_array($e,$indiv_ana1))
{
$sqltxrf="SELECT taskid FROM tbltxrftaskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resulttxrf = mysql_query($sqltxrf) or die (mysql_error());
if(mysql_num_rows($resulttxrf)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbltxrftaskactivity SET site='{$site1}',priority='{$txrfa}',status='{$txrfb}',assignto='{$txrfc}',sitecom='{$sitecomnts}',statcom='{$txrfcomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resulttxrf)==0) {
	$query="INSERT IGNORE INTO tbltxrftaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$txrfa}','{$txrfb}','{$txrfc}','{$txrfd}','{$txrfe}','{$txrff}','{$sitecomnts}','{$txrfcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
	$query="DELETE FROM tbltxrftaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
	} 
	
	
$f="cnO";
if(in_array($f,$indiv_ana1))
{
$sqlcno="SELECT taskid FROM tblcnotaskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resultcno = mysql_query($sqlcno) or die (mysql_error());
if(mysql_num_rows($resultcno)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblcnotaskactivity SET site='{$site1}',priority='{$cnoa}',status='{$cnob}',assignto='{$cnoc}',sitecom='{$sitecomnts}',statcom='{$cnocomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resultcno)==0) {
	$query="INSERT IGNORE INTO tblcnotaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$cnoa}','{$cnob}','{$cnoc}','{$cnod}','{$cnoe}','{$cnof}','{$sitecomnts}','{$cnocomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
	$query="DELETE FROM tblcnotaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
	} 
	
	
$g="cnT";
if(in_array($g,$indiv_ana1))
{
$sqlcnt="SELECT taskid FROM tblcnttaskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resultcnt = mysql_query($sqlcnt) or die (mysql_error());
if(mysql_num_rows($resultcnt)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblcnttaskactivity SET site='{$site1}',priority='{$cnta}',status='{$cntb}',assignto='{$cntc}',sitecom='{$sitecomnts}',statcom='{$cntcomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resultcnt)==0) {
	$query="INSERT IGNORE INTO tblcnttaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$cnta}','{$cntb}','{$cntc}','{$cntd}','{$cnte}','{$cntf}','{$sitecomnts}','{$cntcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
	$query="DELETE FROM tblcnttaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
	} 
$h="hhxrf";
if(in_array($h,$indiv_ana1))
{
$sqlhhtxrf="SELECT taskid FROM tblhhtxrftaskactivity WHERE taskid ='{$service_no1}' ORDER BY taskid  DESC LIMIT 1";
$resulthhtxrf = mysql_query($sqlhhtxrf) or die (mysql_error());
if(mysql_num_rows($resulthhtxrf)!=0){
$query = "UPDATE tblrectaskactivity SET site='{$site1}',priority='{$reca}',status='{$recb}',assignto='{$recc}',sitecom='{$sitecomnts}',statcom='{$reccomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tbllogtaskactivity SET site='{$site1}',total='{$q4}',priority='{$loga}',status='{$logb}',assignto='{$logc}',sitecom='{$sitecomnts}',statcom='{$logcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblbartaskactivity SET site='{$site1}',priority='{$bara}',status='{$barb}',assignto='{$barc}',sitecom='{$sitecomnts}',statcom='{$barcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblsubsampletaskactivity SET site='{$site1}',priority='{$suba}',status='{$subb}',assignto='{$subc}',sitecom='{$sitecomnts}',statcom='{$subcomnts}',ref='{$ref}'  WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
$query = "UPDATE tblhhtxrftaskactivity SET site='{$site1}',priority='{$htxrfa}',status='{$htxrfb}',assignto='{$htxrfc}',sitecom='{$sitecomnts}',statcom='{$htxrfcomnts}',ref='{$ref}' WHERE taskid LIKE '%$service_no1%'";
$result = mysql_query($query) or die(mysql_error());
}elseif(mysql_num_rows($resulthhtxrf)==0) {
	$query="INSERT IGNORE INTO tblhhtxrftaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$htxrfa}','{$htxrfb}','{$htxrfc}','{$htxrfd}','{$htxrfe}','{$htxrff}','{$sitecomnts}','{$htxrfcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblrectaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$reca}','{$recb}','{$recc}','{$recd}','{$rece}','{$recf}','{$sitecomnts}','{$reccomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tbllogtaskactivity (taskid,site,total,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$q4}','{$loga}','{$logb}','{$logc}','{$logd}','{$loge}','{$logf}','{$sitecomnts}','{$logcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblbartaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$bara}','{$barb}','{$barc}','{$bard}','{$bare}','{$barf}','{$sitecomnts}','{$barcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	$query="INSERT IGNORE INTO tblsubsampletaskactivity (taskid,site,priority,status,assignto,taskcreatedon,estimation,actualtime,sitecom,statcom,ref) VALUES ('{$service_no1}','{$site1}','{$suba}','{$subb}','{$subc}','{$subd}','{$sube}','{$subf}','{$sitecomnts}','{$subcomnts}','{$ref}')";
	$result = mysql_query($query) or die(mysql_error());
	}
}else {
$query="DELETE FROM tblhhtxrftaskactivity  WHERE  taskid ='$service_no1'";
$result = mysql_query($query) or die (mysql_error());	
	} 



$queryrec="SELECT service_no FROM scheduled WHERE   service_no = '$service_no1'";
$resultrec = mysql_query($queryrec) or die (mysql_error());  
	   $success = "Form submitted and saved!";
			echo($success);
			sleep(12);
            if(mysql_num_rows($resultrec)==0)
            {    
 $querylst="INSERT INTO scheduled SELECT * FROM formtb WHERE formtb.service_no ='$service_no1'";
 $resultlst = mysql_query($querylst) or die (mysql_error());  
   
}
$sql="DELETE FROM formtb WHERE formtb.service_no = '$service_no1'";
$result=mysql_query($sql);

			header("location:index.php");
			}else{
	   $fail = "submission failed!";
			echo($fail);
		header("location:schedule.php");
			 }		 
?>