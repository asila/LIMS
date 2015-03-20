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
<link rel="stylesheet" href="../js/jquery-ui.css">
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui-1.10.4.js"></script>
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
			<a href="../project/request.php" class="app_listitem_key"><IMG SRC="../images/HG.PNG" ALT="data" width="20" height="18"></A></a>
		</td>
	</tr>

</Table>
<script language="javascript">
function changeme1() {
$( "#progressbar1" ).progressbar({
value: 37
});
if(document.getElementById("reportgen").checked==true)

{
document.getElementById("reportgen").value=1;
}
else
{
document.getElementById("reportgen").value=2;
}
};
</script>
<script language="javascript">
function changeme2() {
$( "#progressbar2" ).progressbar({
        value: 100
});
if(document.getElementById("reported").checked==true)

{
       document.getElementById("reported").value=1
}
else
{
       document.getElementById("reported").value=2
}
};
</script>


 <img src="../print.jpg" alt="printer" onClick="javascript:window.print();s" align="right"/>
 <link rel="stylesheet" href="../mstyle.css">
</head>

<body class=body>
  <?php
if (isset($_POST['submit'])){
      $service_no=trim($_POST['service_no']);
		$reportgen=trim($_POST['reportgen']);
		$reported=trim($_POST['reported']);
		$site=trim($_POST['site']);
		
		if($reportgen=='') $reportgen=2;
		if($reported=='') $reported=2;
		
		
		$query="UPDATE `reportb` SET `rpservice_no`='{$service_no}',`reportgen`='{$reportgen}',`reported`='{$reported}',`site`='{$site}' WHERE `rpservice_no`='{$service_no}'";
		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());	
	   if($result){
	   $success = "Form submitted and saved!";
			echo($success);
		header("location:../index.php");
			}else{
	   $fail = "submission failed!";
			echo($fail);
		header("location:../index.php");
			     }
			
	}else{
	$service_no = $_REQUEST['id'];

       $query = "SELECT  * FROM  reportb WHERE  rpservice_no LIKE '%$service_no%'";

      $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
if($result){		
      $col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$service_no = $rows['rpservice_no'];
		$reportgen = $rows['reportgen'];
		$reported = $rows['reported'];
		$site = $rows['site'];
		
		
							}
                         
	       }else{
      echo "Form status not created!";
			 }

		
	}
	
?>

<form action="report.php" method="post" name="reportform" id="reportform" >
<table width="100%" class="border2">
<tr>
	<td colspan="4">SN:<input type="text" size="20" id="service_no" name="service_no"  value="<?php echo $service_no ?>" /></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>

</tr>
<tr>
	<td class=cat>SITE</td>
	<td class=cat>REPORT GENERATION</td>
	<td class=cat>(tick)</td>
	<td class=cat>REPORTED</td>
	<td class=cat>(tick)</td>
</tr>
<tr>

<td><input type="text" size="20" id="site" name="site"  value="<?php echo $site ?>" /></td>

<td><div id="progressbar1" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="reportgen" id="reportgen" value="" onClick="changeme1()" <?php $a="1"; if(in_array($a,(array)$reportgen)) echo 'checked="true"';?> /><?php $a="1"; if(in_array($a,(array)$reportgen)) echo"<SCRIPT LANGUAGE='javascript'>changeme1();</SCRIPT>"; ?></td>

<td><div id="progressbar2" style="width:80px; height:10px;"></div></td><td><input type="checkbox" name="reported" id="reported" value="" onClick="changeme2()" <?php $a="1"; if(in_array($a,(array)$reported)) echo 'checked="true"'; ?> /><?php $a="1"; if(in_array($a,(array)$reported)) echo"<SCRIPT LANGUAGE='javascript'>changeme2();</SCRIPT>"; ?></td>

</tr>
<tr>
<td colspan="8" class=cat>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
<input type="submit" name="submit" value="Save" align="right"/>
</td>
</tr>
</table>
</form>
</body>
</html>
