<?php
  //We've included ../Includes/FusionCharts_Gen.php, which contains
  //FusionCharts PHP Class to help us easily embed charts
  //We've also used ../Includes/DBConn.php to easily connect to a database.
  include("../Includes/FusionCharts_Gen.php");
  include("../Includes/DBConn.php");
?>

<HTML>
<HEAD>
  <TITLE>
    FusionCharts Free - Database Example
  </TITLE>

<?php
  //You need to include the following JS file, if you intend to embed the chart using JavaScript.
  //Embedding using JavaScripts avoids the "Click to Activate..." issue in Internet Explorer
  //When you make your own charts, make sure that the path to this JS file is correct.
  //Else, you would JavaScript errors.
?>
<SCRIPT LANGUAGE="Javascript" SRC="../../FusionCharts/FusionCharts.js"></SCRIPT>

</HEAD>
<BODY>

<?php
  //In this example, we show how to connect FusionCharts to a database.
  //For the sake of ease, we've used an MySQL databases containing two
  //tables.

 include("home.php");
 include("recs.php");
 include("recp.php");
 include("logs.php");
 include("logp.php");
 include("bars.php");
 include("barp.php");
 include("subs.php");
 include("subp.php");
 include("nirs.php");
 include("nirp.php");
 include("mirs.php");
 include("mirp.php");
 include("txrfs.php");
 include("txrfp.php");
 include("hhtxrfs.php");
 include("hhtxrfp.php");
 include("xrds.php");
 include("xrdp.php");
 include("ldpsas.php");
 include("ldpsap.php");
?>

</BODY>
</HTML>