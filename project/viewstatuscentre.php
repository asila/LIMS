
<?php
require_once("../project/includes/initialize.php");

include('../project/layouts/header.php');
?>

<style type="text/css">
  

#rhombus{
     width:500; 
     height:500; 
     background:silver;
    margin:1 auto;
     -webkit-transform: rotate(0deg);
     -moz-transform: rotate(0deg);
     -ms-transform: rotate(0deg);
     -o-transform: rotate(0deg);
     transform: rotate(0deg);
     -webkit-transform-origin: 0 100%;
     -moz-transform-origin: 0 100%;
     -ms-transform-origin: 0 100%;
     -o-transform-origin: 0 100%;
     transform-origin: 0 100%;
}
	</style>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<link rel="stylesheet" href="../js/jquery-ui.css">
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui-1.10.4.js"></script> 
<link rel="stylesheet" href="../js/jquery-ui.css">
<?php include 'stationtitle.php';?>;
<?php include 'pro_dropdown_2.html';?>

<div id="rhombus">
<table class="responsive" style="width:100% ;">
	<tr align="center">
		<td>
		</td>
	</tr>
<tr>
<td></td>
<td></td>
<td align="center"><h2>Submission</h2><a href="../project/request.php" class="centeredImage"><img SRC="image/soil.png" ALT="data" width="80" height="80" ></img></a></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td align="center"><h2>Scheduling</h2><a href="../project/viewschedules.php" class="centeredImage"><img SRC="image/req.png" ALT="data" width="80" height="80" ></img></a></td>
<td></td>
<td align="center"><h2>Samples</h2><a href="viewstatuscentre2.php?id=3" class="centeredImage"><img SRC="image/recc.png" ALT="data" width="80" height="80" ></img></a></td>
<td></td>
</tr>
<tr>
<td align="center"><h2>IR</h2><a href="viewstatuscentre4.php" class="centeredImage"><img SRC="image/mir.png" ALT="data" width="80" height="80" ></img></button></a></td>
<td></td>
<td align="center"><h2>LDPSA</h2><a href="viewStatsampleSchedule.php?id=5" class="centeredImage"><img SRC="image/ldpsa.png" ALT="data" width="80" height="80" ></img></a></td>
<td></td>
<td align="center"><h2>XRD</h2><a href="viewStatsampleSchedule.php?id=8" class="centeredImage"><img SRC="image/xrd.png" ALT="data" width="80" height="80" ></img></a></td>

</tr>
<tr>
<td></td>
<td align="center"><h2>TXRF</h2><a href="viewStatsampleSchedule.php?id=9" class="centeredImage"><img SRC="image/txrf.png" ALT="data" width="80" height="80" ></img></a></td>
<td></td>
<td align="center"><h2>HHXRF</h2><a href="viewStatsampleSchedule.php?id=12" class="centeredImage"><img SRC="image/hhtxrf.png" ALT="data" width="80" height="80" ></img></a></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td align="center"><h2>CN</h2><a href="viewstatuscentre3.php" class="centeredImage"><img SRC="image/cno.png" ALT="data" width="80" height="80" ></img></a></td>
<td></td>
<td></td>
</tr>

</table>

</div>

<div class="footer">
        
    </div>

