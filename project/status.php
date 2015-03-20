 <html>
<head>
<link rel="stylesheet" href="js/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.js"></script>
<script language="javascript">
function changeme1() {
$( "#progressbar1" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme2() {
$( "#progressbar2" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme3() {
$( "#progressbar3" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme4() {
$( "#progressbar4" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme5() {
$( "#progressbar5" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme6() {
$( "#progressbar6" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme7() {
$( "#progressbar7" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme8() {
$( "#progressbar8" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme9() {
$( "#progressbar9" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme10() {
$( "#progressbar10" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme11() {
$( "#progressbar11" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme12() {
$( "#progressbar12" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme13() {
$( "#progressbar13" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme14() {
$( "#progressbar14" ).progressbar({
value: 100
});
};
function changeme15() {
$( "#progressbar15" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme16() {
$( "#progressbar16" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme17() {
$( "#progressbar17" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme18() {
$( "#progressbar18" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme19() {
$( "#progressbar19" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme20() {
$( "#progressbar20" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme21() {
$( "#progressbar21" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme22() {
$( "#progressbar22" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme23() {
$( "#progressbar23" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme24() {
$( "#progressbar24" ).progressbar({
value: 100
});
};
</script>
<script language="javascript">
function changeme25() {
$( "#progressbar25" ).progressbar({
value: 37
});
};
</script>
<script language="javascript">
function changeme26() {
$( "#progressbar26" ).progressbar({
value: 100
});
};
</script>

<?php
require_once("includes/initialize.php");
include_layout_template_public('header.php');
?>

<link rel="stylesheet" href="mstyle.css">
</head>
<body>
<form action="status.php" method="post" target="_self" >
<table width="100%" class="app_listing">
<tr>
	<td>CATEGORY</td>
	<td>STARTED</td>
	<td></td>
	<td>COMPLETE</td>
	<td></td>
</tr>
<tr>
	<td><label>Samples Reception:</label></td>
	<td ><div id="progressbar1" style="width:80px; height:10px;"></div></td><td><input type="radio" name="sample_recep" value="" onClick="changeme1()"/></td>
	<td><div id="progressbar2" style="width:80px; height:10px;"></div></td><td><input type="radio" name="sample_recep" value="" onClick="changeme2()"/></td>
</tr>
<tr>
	<td><label>Logging:</label></td>
	<td><div id="progressbar3" style="width:80px; height:10px;"></div></td><td><input type="radio" name="logging" value="" onClick="changeme3()"/></td>
	<td><div id="progressbar4" style="width:80px; height:10px;"></div></td><td><input type="radio" name="logging" value="" onClick="changeme4()"/></td>
</tr>
<tr>
	<td><label>Barcoding:</label></td>
	<td><div id="progressbar5" style="width:80px; height:10px;"></div></td><td><input type="radio" name="barcode" value="" onClick="changeme5()"/></td>
	<td><div id="progressbar6" style="width:80px; height:10px;"></div></td><td><input type="radio" name="barcode" value="" onClick="changeme6()"/></td>
</tr>
<tr>
	<td><label>Sub Sampling:</label></td>
	<td><div id="progressbar7" style="width:80px; height:10px;"></div></td><td><input type="radio" name="sample_sub" value="" onClick="changeme7()"/></td>
	<td><div id="progressbar8" style="width:80px; height:10px;"></div></td><td><input type="radio" name="sample_sub" value="" onClick="changeme8()"/></td>
</tr>
<tr>
	<td><label>Loading:</label></td>
	<td><div id="progressbar9" style="width:80px; height:10px;"></div></td><td><input type="radio" name="load" value="" onClick="changeme9()"/></td>
	<td><div id="progressbar10" style="width:80px; height:10px;"></div></td><td><input type="radio" name="load" value="" onClick="changeme10()"/></td>
</tr>
<tr>
	<td><label>MIR:</label></td>
	<td><div id="progressbar11" style="width:80px; height:10px;"></div></td><td><input type="radio" name="mir" value="" onClick="changeme11()"/></td>
	<td><div id="progressbar12" style="width:80px; height:10px;"></div></td><td><input type="radio" name="mir" value="" onClick="changeme12()"/></td>
</tr>
<tr>
	<td><label>NIR:</label></td>
	<td><div id="progressbar13" style="width:80px; height:10px;"></div></td><td><input type="radio" name="nir" value="" onClick="changeme13()"/></td>
	<td><div id="progressbar14" style="width:80px; height:10px;"></div></td><td><input type="radio" name="nir" value="" onClick="changeme14()"/></td>
</tr>
<tr>
	<td><label>TXRF:</label></td>
	<td><div id="progressbar15" style="width:80px; height:10px;"></div></td><td><input type="radio" name="txrf" value="" onClick="changeme15()"/></td>
	<td><div id="progressbar16" style="width:80px; height:10px;"></div></td><td><input type="radio" name="txrf" value="" onClick="changeme16()"/></td>
</tr>
<tr>
	<td><label>XRD:</label></td>
	<td><div id="progressbar17" style="width:80px; height:10px;"></div></td><td><input type="radio" name="xrd" value="" onClick="changeme17()"/></td>
	<td><div id="progressbar18" style="width:80px; height:10px;"></div></td><td><input type="radio" name="xrd" value="" onClick="changeme18()"/></td>
</tr>
<tr>
	<td><label>CN Organic:</label></td>
	<td><div id="progressbar19" style="width:80px; height:10px;"></div></td><td><input type="radio" name="cnorganic" value="" onClick="changeme19()"/></td>
	<td><div id="progressbar20" style="width:80px; height:10px;"></td><td></div><input type="radio" name="cnorganic" value="" onClick="changeme20()"/></td>
</tr>
<tr>
	<td><label>CN Total:</label></td>
	<td><div id="progressbar21" style="width:80px; height:10px;"></td><td></div><input type="radio" name="cntotal" value="" onClick="changeme21()"/></td>
	<td><div id="progressbar22" style="width:80px; height:10px;"></td><td></div><input type="radio" name="cntotal" value="" onClick="changeme22()"/></td>
</tr>
<tr>
	<td><label>LDPSA:</label></td>
	<td><div id="progressbar23" style="width:80px; height:10px;"></td><td></div><input type="radio" name="ldpsa" value="" onClick="changeme23()"/></td>
	<td><div id="progressbar24" style="width:80px; height:10px;"></td><td></div><input type="radio" name="ldpsa" value="" onClick="changeme24()"/></td>
</tr>
<tr>
	<td><label>HHTXRF:</label></td>
	<td><div id="progressbar25" style="width:80px; height:10px;"></td><td></div><input type="radio" name="htxrf" value="" onClick="changeme25()"/></td>
	<td><div id="progressbar26" style="width:80px; height:10px;"></td><td></div><input type="radio" name="htxrf" value="" onClick="changeme26()"/></td>
</tr>
</table>
</form>
</body>
</html>
