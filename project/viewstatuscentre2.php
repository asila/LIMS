
<?php
require_once("../project/includes/initialize.php");

include('../project/layouts/header.php');
?>
<style type="text/css">
  .centeredImage
    {
    text-align:center;
   margin:45%;
    }

h2 {
	/*text-shadow: -1px -1px 1px #eee, 1px 1px 1px #000;*/
	color: #e71a0b;
	opacity: 0.9;
	font: 14px 'Museo700';
      text-align:center;
}
	</style>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<link rel="stylesheet" href="../js/jquery-ui.css">
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui-1.10.4.js"></script> 
<link rel="stylesheet" href="../js/jquery-ui.css">
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui-1.10.4.js"></script>

<?php include 'pro_dropdown_2.html';?>
 
<table class="responsive" style="width:100%;">
	<tr align="center">
		<td>
        <a href="viewstatuscentre.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	</tr>
<tr>
<td align="center" class="centeredImage"><h2><img SRC="image/rech.png" ALT="Reception" width="100" height="60" ></img></h2><a href="reception.php?id=14"><img SRC="image/reck.png" ALT="data" width="60" height="60" ></img></a></td>
<td align="center" class="centeredImage"><h2><img SRC="image/preph.png" ALT="Preparation" width="100" height="60" ></img></h2><a href="viewStatsampleSchedule.php?id=1"><img SRC="image/rec.png" ALT="data" width="60" height="60" ></img></a></td>
<td align="center"  class="centeredImage"><h2><img SRC="image/logh.png" ALT="Logging" width="100" height="60" ></img></h2><a href="viewStatsampleSchedule2.php?id=2"><img SRC="image/log.png" ALT="data" width="60" height="60" ></img></a></td>
<td align="center"  class="centeredImage"><h2><img SRC="image/barh.png" ALT="Barcoding" width="100" height="60" ></img></h2><a href="viewStatsampleSchedule.php?id=3"><img SRC="image/bar2.png" ALT="data" width="60" height="60" ></img></a></td>
<td align="center"  class="centeredImage"><h2><img SRC="image/subh.png" ALT="Sub-Sampling" width="100" height="60" ></img></h2><a href="viewStatsampleSchedule.php?id=4"><img SRC="image/sub.png" ALT="data" width="60" height="60" ></img></a></td>
</tr>
</table>

<div class="footer">
        
    </div>


