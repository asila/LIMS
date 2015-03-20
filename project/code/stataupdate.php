<html>
<head>
<?php

require_once("../includes/initialize.php");

/**
 * @author:Cyrus Bondo 
 * @copyright 2014
 */
include("../style.php");
 ?>
 <img src="../print.jpg" alt="printer" onClick="javascript:window.print();" align="right"/>
<link rel="stylesheet" href="../stylesheets/protec.css">
<Table class="app_listing" style="width:100%;">
<tr>
<td>
<?php
include('../layouts/header.php');
?>
</td>
</tr>
	<tr align="center">
		<td>
			<link rel="stylesheet" href="../stylesheets/mstyle.css">
		<div id='vmenu'>
		<ul>
		<li>
			<a href="../index.php" class="app_listitem_key">Home<IMG SRC="../images/data.jpg" ALT="data" width="20" height="18"></A></a>
		</li>
		</ul>
		</div>
		</td>
	</tr>

</Table>	
<link rel="stylesheet" href="../js/jquery-ui.css">
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui-1.10.4.js"></script>
<script language="javascript">
function changeme1() {
$( "#progressbar1" ).progressbar({
value: 37
});
if(document.getElementById("rec1").checked==true)

{
document.getElementById("rec1").value=1;
}
else
{
document.getElementById("rec1").value=2;
}
};
</script>
<script language="javascript">
function changeme2() {
$( "#progressbar2" ).progressbar({
value: 100
});
if(document.getElementById("rec2").checked==true)

{
document.getElementById("rec2").value=1
}
else
{
document.getElementById("rec2").value=2
}
};
</script>
<script language="javascript">
function changeme3() {
$( "#progressbar3" ).progressbar({
value: 37
});
if(document.getElementById("log1").checked==true)

{
document.getElementById("log1").value=1
}
else
{
document.getElementById("log1").value=2
}
};
</script>
<script language="javascript">
function changeme4() {
$( "#progressbar4" ).progressbar({
value: 100
});
if(document.getElementById("log2").checked==true)

{
document.getElementById("log2").value=1
}
else
{
document.getElementById("log2").value=2
}
};
</script>
<script language="javascript">
function changeme5() {
$( "#progressbar5" ).progressbar({
value: 37
});
if(document.getElementById("bar1").checked==true)

{
document.getElementById("bar1").value=1
}
else
{
document.getElementById("bar1").value=2
}
};
</script>
<script language="javascript">
function changeme6() {
$( "#progressbar6" ).progressbar({
value: 100
});
if(document.getElementById("bar2").checked==true)

{
document.getElementById("bar2").value=1
}
else
{
document.getElementById("bar2").value=2
}
};
</script>
<script language="javascript">
function changeme7() {
$( "#progressbar7" ).progressbar({
value: 37
});
if(document.getElementById("sub1").checked==true)

{
document.getElementById("sub1").value=1
}
else
{
document.getElementById("sub1").value=2
}
};
</script>
<script language="javascript">
function changeme8() {
$( "#progressbar8" ).progressbar({
value: 100
});
if(document.getElementById("sub2").checked==true)

{
document.getElementById("sub2").value=1
}
else
{
document.getElementById("sub2").value=2
}
};
</script>
<script language="javascript">
function changeme11() {
$( "#progressbar11" ).progressbar({
value: 37
});
if(document.getElementById("mir1").checked==true)

{
document.getElementById("mir1").value=1
}
else
{
document.getElementById("mir1").value=2
}
};
</script>
<script language="javascript">
function changeme12() {
$( "#progressbar12" ).progressbar({
value: 100
});
if(document.getElementById("mir2").checked==true)

{
document.getElementById("mir2").value=1
}
else
{
document.getElementById("mir2").value=2
}
};
</script>
<script language="javascript">
function changeme13() {
$( "#progressbar13" ).progressbar({
value: 37
});
if(document.getElementById("nir1").checked==true)

{
document.getElementById("nir1").value=1
}
else
{
document.getElementById("nir1").value=2
}
};
</script>
<script language="javascript">
function changeme14() {
$( "#progressbar14" ).progressbar({
value: 100
});
if(document.getElementById("nir2").checked==true)

{
document.getElementById("nir2").value=1
}
else
{
document.getElementById("nir2").value=2
}
};
function changeme15() {
$( "#progressbar15" ).progressbar({
value: 37
});
if(document.getElementById("txrf1").checked==true)

{
document.getElementById("txrf1").value=1
}
else
{
document.getElementById("txrf1").value=2
}
};
</script>
<script language="javascript">
function changeme16() {
$( "#progressbar16" ).progressbar({
value: 100
});
if(document.getElementById("txrf2").checked==true)

{
document.getElementById("txrf2").value=1
}
else
{
document.getElementById("txrf2").value=2
}
};
</script>
<script language="javascript">
function changeme17() {
$( "#progressbar17" ).progressbar({
value: 37
});
if(document.getElementById("xrd1").checked==true)

{
document.getElementById("xrd1").value=1
}
else
{
document.getElementById("xrd1").value=2
}
};
</script>
<script language="javascript">
function changeme18() {
$( "#progressbar18" ).progressbar({
value: 100
});
if(document.getElementById("xrd2").checked==true)

{
document.getElementById("xrd2").value=1
}
else
{
document.getElementById("xrd2").value=2
}
};
</script>
<script language="javascript">
function changeme19() {
$( "#progressbar19" ).progressbar({
value: 37
});
if(document.getElementById("cno1").checked==true)

{
document.getElementById("cno1").value=1
}
else
{
document.getElementById("cno1").value=2
}
};
</script>
<script language="javascript">
function changeme20() {
$( "#progressbar20" ).progressbar({
value: 100
});
if(document.getElementById("cno2").checked==true)

{
document.getElementById("cno2").value=1

}
else
{
document.getElementById("cno2").value=2

}
};
</script>
<script language="javascript">
function changeme21() {
$( "#progressbar21" ).progressbar({
value: 37
});
if(document.getElementById("cnt1").checked==true)

{
document.getElementById("cnt1").value=1
}
else
{
document.getElementById("cnt1").value=2
}
};
</script>
<script language="javascript">
function changeme22() {
$( "#progressbar22" ).progressbar({
value: 100
});
if(document.getElementById("cnt2").checked==true)

{
document.getElementById("cnt2").value=1
}
else
{
document.getElementById("cnt2").value=2
}
};
</script>
<script language="javascript">
function changeme23() {
$( "#progressbar23" ).progressbar({
value: 37
});
if(document.getElementById("ldpsa1").checked==true)

{
document.getElementById("ldpsa1").value=1
}
else
{
document.getElementById("ldpsa1").value=2
}
};
</script>
<script language="javascript">
function changeme24() {
$( "#progressbar24" ).progressbar({
value: 100
});
if(document.getElementById("ldpsa2").checked==true)

{
document.getElementById("ldpsa2").value=1
}
else
{
document.getElementById("ldpsa2").value=2
}
};
</script>
<script language="javascript">
function changeme25() {
$( "#progressbar25" ).progressbar({
value: 37
});
if(document.getElementById("htxrf1").checked==true)

{
document.getElementById("htxrf1").value=1
}
else
{
document.getElementById("htxrf1").value=2
}
};
</script>
<script language="javascript">
function changeme26() {
$( "#progressbar26" ).progressbar({
value: 100
});
if(document.getElementById("htxrf2").checked==true)

{
document.getElementById("htxrf2").value=1
}
else
{
document.getElementById("htxrf2").value=2
}
};
</script> 
 <?php
if (isset($_POST['submit'])){
		//form has been submitted1
		//error_reporting(E_ALL^E_NOTICE);
		$service_no=trim($_POST['service_no']);
		$rec1=trim($_POST['rec1']);
		$rec2=trim($_POST['rec2']);
		$log1=trim($_POST['log1']);
		$log2=trim($_POST['log2']);
		$bar1=trim($_POST['bar1']);
		$bar2=trim($_POST['bar2']);
		$sub1=trim($_POST['sub1']);
      $sub2=trim($_POST['sub2']);
		$mir1=trim($_POST['mir1']);
		$mir2=trim($_POST['mir2']);
		$nir1=trim($_POST['nir1']);
		$nir2=trim($_POST['nir2']);
		$txrf1=trim($_POST['txrf1']);
		$txrf2=trim($_POST['txrf2']);
		$xrd1=trim($_POST['xrd1']);
		$xrd2=trim($_POST['xrd2']);
		$cno1=trim($_POST['cno1']);
		$cno2=trim($_POST['cno2']);
		$cnt1=trim($_POST['cnt1']);
		$cnt2=trim($_POST['cnt2']);
		$ldpsa1=trim($_POST['ldpsa1']);
		$ldpsa2=trim($_POST['ldpsa2']);
		$htxrf1=trim($_POST['htxrf1']);
		$htxrf2=trim($_POST['htxrf2']);
		
		
		if($rec1=='') $rec1=2;
		if($rec2=='') $rec2=2;
		if($log1=='') $log1=2;
		if($log2=='') $log2=2;
		if($bar1=='') $bar1=2;
		if($bar2=='') $bar2=2;
		if($sub1=='') $sub1=2;
      if($sub2=='') $sub2=2;
		if($mir1=='') $mir1=2;
		if($mir2=='') $mir2=2;
		if($nir1=='') $nir1=2;
		if($nir2=='') $nir2=2;
		if($txrf1=='') $txrf1=2;
		if($txrf2=='') $txrf2=2;
		if($xrd1=='') $xrd1=2;
		if($xrd2=='') $xrd2=2;
		if($cno1=='') $cno1=2;
		if($cno2=='') $cno2=2;
		if($cnt1=='') $cnt1=2;
		if($cnt2=='') $cnt2=2;
		if($ldpsa1=='') $ldpsa1=2;
		if($ldpsa2=='') $ldpsa2=2;
		if($htxrf1=='') $htxrf1=2;
		if($htxrf2=='') $htxrf2=2;
      $cond="scheduled";          
$query = "UPDATE `status` SET `stservice_no`='{$service_no}',`rec1`='{$rec1}',`rec2`='{$rec2}',`log1`='{$log1}',`log2`='{$log2}',`bar1`='{$bar1}',`bar2`='{$bar2}',`sub1`='{$sub1}',`sub2`='{$sub2}',`mir1`='{$mir1}',`mir2`='{$mir2}',`nir1`='{$nir1}',`nir2`='{$nir2}',`txrf1`='{$txrf1}',`txrf2`='{$txrf2}',`xrd1`='{$xrd1}',`xrd2`='{$xrd2}',`cno1`='{$cno1}',`cno2`='{$cno2}',`cnt1`='{$cnt1}',`cnt2`='{$cnt2}',`ldpsa1`='{$ldpsa1}',`ldpsa2`='{$ldpsa2}',`htxrf1`='{$htxrf1}',`htxrf2`='{$htxrf2}' WHERE  stservice_no='$service_no'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
if($result)
{
	$query="UPDATE formtb SET cond='{$cond}' WHERE  service_no='$service_no'";
	$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
}
	   	header("location:../index.php");	
					
	}else{
	$serviceno = $_REQUEST['id'];

$query = "SELECT  * FROM  status WHERE  stservice_no LIKE '%$serviceno%'";

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());			
			
$col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$service_no = $rows['stservice_no'];
		$rec1 = $rows['rec1'];
		$rec2 = $rows['rec2'];
		$log1 = $rows['log1'];
		$log2 = $rows['log2'];
		$bar1 = $rows['bar1'];
		$bar2 = $rows['bar2'];
		$sub1 = $rows['sub1'];
      $sub2 = $rows['sub2'];
		$mir1 = $rows['mir1'];
		$mir2 = $rows['mir2'];
		$nir1 = $rows['nir1'];
      $nir2	= $rows['nir2'];
		$txrf1 = $rows['txrf1'];
		$txrf2 = $rows['txrf2'];
		$xrd1 = $rows['xrd1'];
		$xrd2 = $rows['xrd2'];
		$cno1 = $rows['cno1'];
		$cno2 = $rows['cno2'];
		$cnt1 = $rows['cnt1'];
		$cnt2 = $rows['cnt2'];
		$ldpsa1 = $rows['ldpsa1'];
		$ldpsa2 = $rows['ldpsa2'];
		$htxrf1 = $rows['htxrf1'];
		$htxrf2= $rows['htxrf2'];
                         
	}
		
	}
?>

</head>
<body class=body>
<form action="stataupdate.php" method="post" target="_self">
<table width="100%" class="border2">
<tr>
	<td>SN:<input type="text" size="20" id="service_no" name="service_no"  value="<?php echo $service_no;?>" /></td>
	<td></td>
</tr>
<tr>
	<td class=cat>CATEGORY</td>
	<td class=cat>STARTED</td>
	<td class=cat>(tick)</td>
	<td class=cat>COMPLETE</td>
	<td class=cat>(tick)</td>
</tr>
<tr>
	<td class=subcat><label>Samples Reception:</label></td>
	<td ><div id="progressbar1" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="rec1" id="rec1" value="" onClick="changeme1()"<?php $a="1"; if(in_array($a,(array)$rec1)) echo 'checked="true"';?> /><?php $a="1"; if(in_array($a,(array)$rec1)) echo"<SCRIPT LANGUAGE='javascript'>changeme1();</SCRIPT>"; ?></td>
	<td><div id="progressbar2" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="rec2" id="rec2" value="" onClick="changeme2()"<?php $a="1"; if(in_array($a,(array)$rec2)) echo 'checked="true"'; ?> /><?php $a="1"; if(in_array($a,(array)$rec2)) echo"<SCRIPT LANGUAGE='javascript'>changeme2();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>Logging:</label></td>
	<td><div id="progressbar3" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="log1" id="log1" value="" onClick="changeme3()"<?php $a="1"; if(in_array($a,(array)$log1)) echo 'checked="true"'; ?> /><?php $a="1"; if(in_array($a,(array)$log1)) echo"<SCRIPT LANGUAGE='javascript'>changeme3();</SCRIPT>"; ?></td>
	<td><div id="progressbar4" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="log2" id="log2" value="" onClick="changeme4()"<?php $a="1"; if(in_array($a,(array)$log2)) echo 'checked="true"'; ?> /><?php $a="1"; if(in_array($a,(array)$log2)) echo"<SCRIPT LANGUAGE='javascript'>changeme4();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>Barcoding:</label></td>
	<td><div id="progressbar5" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="bar1" id="bar1" value="" onClick="changeme5()"<?php $a="1"; if(in_array($a,(array)$bar1)) echo 'checked="true"'; ?> /><?php $a="1"; if(in_array($a,(array)$bar1)) echo"<SCRIPT LANGUAGE='javascript'>changeme5();</SCRIPT>"; ?></td>
	<td><div id="progressbar6" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="bar2"  id="bar2" value="" onClick="changeme6()" <?php $a="1"; if(in_array($a,(array)$bar2)) echo 'checked="true"'; ?> /><?php $a="1"; if(in_array($a,(array)$bar2)) echo"<SCRIPT LANGUAGE='javascript'>changeme6();</SCRIPT>";?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>Sub Sampling:</label></td>
	<td><div id="progressbar7" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="sub1" id="sub1" value="" onClick="changeme7()"<?php $a="1"; if(in_array($a,(array)$sub1)) echo 'checked="true"'; ?> /><?php $a="1"; if(in_array($a,(array)$sub1)) echo"<SCRIPT LANGUAGE='javascript'>changeme7();</SCRIPT>"; ?></td>
	<td><div id="progressbar8" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="sub2" id="sub2" value="" onClick="changeme8()"<?php $a="1"; if(in_array($a,(array)$sub2)) echo 'checked="true"'; ?> /><?php $a="1"; if(in_array($a,(array)$sub2)) echo"<SCRIPT LANGUAGE='javascript'>changeme8();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>MIR:</label></td>
	<td><div id="progressbar11" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="mir1" id="mir1" value="" onClick="changeme11()"<?php $a="1"; if(in_array($a,(array)$mir1)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$mir1)) echo"<SCRIPT LANGUAGE='javascript'>changeme11();</SCRIPT>"; ?></td>
	<td><div id="progressbar12" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="mir2" id="mir2" value="" onClick="changeme12()"<?php $a="1"; if(in_array($a,(array)$mir2)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$mir2)) echo"<SCRIPT LANGUAGE='javascript'>changeme12();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>NIR:</label></td>
	<td><div id="progressbar13" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="nir1"id="nir1" value="" onClick="changeme13()"<?php $a="1"; if(in_array($a,(array)$nir1)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$nir1)) echo"<SCRIPT LANGUAGE='javascript'>changeme13();</SCRIPT>"; ?></td>
	<td><div id="progressbar14" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="nir2" id="nir2" value="" onClick="changeme14()"<?php $a="1"; if(in_array($a,(array)$nir2)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$nir2)) echo"<SCRIPT LANGUAGE='javascript'>changeme14();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>TXRF:</label></td>
	<td><div id="progressbar15" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="txrf1" id="txrf1" value="" onClick="changeme15()"<?php $a="1"; if(in_array($a,(array)$txrf1)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$txrf1)) echo"<SCRIPT LANGUAGE='javascript'>changeme15();</SCRIPT>"; ?></td>
	<td><div id="progressbar16" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="txrf2" id="txrf2" value="" onClick="changeme16()"<?php $a="1"; if(in_array($a,(array)$txrf2)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$txrf2)) echo"<SCRIPT LANGUAGE='javascript'>changeme16();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>XRD:</label></td>
	<td><div id="progressbar17" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="xrd1" id="xrd1" value="" onClick="changeme17()"<?php $a="1"; if(in_array($a,(array)$xrd1)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$xrd1)) echo"<SCRIPT LANGUAGE='javascript'>changeme17();</SCRIPT>"; ?></td>
	<td><div id="progressbar18" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="xrd2" id="xrd2" value="" onClick="changeme18()"<?php $a="1"; if(in_array($a,(array)$xrd2)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$xrd2)) echo"<SCRIPT LANGUAGE='javascript'>changeme18();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>CN Organic:</label></td>
	<td><div id="progressbar19" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="cno1" id="cno1" value="" onClick="changeme19()"<?php $a="1"; if(in_array($a,(array)$cno1)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$cno1)) echo"<SCRIPT LANGUAGE='javascript'>changeme19();</SCRIPT>"; ?></td>
	<td><div id="progressbar20" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="cno2" id="cno2" value="" onClick="changeme20()"<?php $a="1"; if(in_array($a,(array)$cno2)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$cno2)) echo"<SCRIPT LANGUAGE='javascript'>changeme20();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>CN Total:</label></td>
	<td><div id="progressbar21" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="cnt1" id="cnt1" value="" onClick="changeme21()"<?php $a="1"; if(in_array($a,(array)$cnt1)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$cnt1)) echo"<SCRIPT LANGUAGE='javascript'>changeme21();</SCRIPT>"; ?></td>
	<td><div id="progressbar22" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="cnt2" id="cnt2" value="" onClick="changeme22()"<?php $a="1"; if(in_array($a,(array)$cnt2)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$cnt2)) echo"<SCRIPT LANGUAGE='javascript'>changeme22();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>LDPSA:</label></td>
	<td><div id="progressbar23" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="ldpsa1" id="ldpsa1" value="" onClick="changeme23()"<?php $a="1"; if(in_array($a,(array)$ldpsa1)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$ldpsa1)) echo"<SCRIPT LANGUAGE='javascript'>changeme23();</SCRIPT>"; ?></td>
	<td><div id="progressbar24" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="ldpsa2" id="ldpsa2" value="" onClick="changeme24()"<?php $a="1"; if(in_array($a,(array)$ldpsa2)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$ldpsa2)) echo"<SCRIPT LANGUAGE='javascript'>changeme24();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
<tr>
	<td class=subcat><label>HHTXRF:</label></td>
	<td><div id="progressbar25" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="htxrf1" id="htxrf1" value="" onClick="changeme25()"<?php $a="1"; if(in_array($a,(array)$htxrf1)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$htxrf1)) echo"<SCRIPT LANGUAGE='javascript'>changeme25();</SCRIPT>"; ?></td>
	<td><div id="progressbar26" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="htxrf2" id="htxrf2" value="" onClick="changeme26()"<?php $a="1"; if(in_array($a,(array)$htxrf2)) echo 'checked="true"'; ?>/><?php $a="1"; if(in_array($a,(array)$htxrf2)) echo"<SCRIPT LANGUAGE='javascript'>changeme26();</SCRIPT>"; ?></td>
</tr>
<tr>
<td colspan="5" class=cat>
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="Save" align="right"/>
</td>
</tr>
</table>
</form>
</body>
</html>
