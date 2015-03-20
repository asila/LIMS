<?php
$link = connectToDB();
  
  # Create column3d chart object using FusionCharts PHP Class
  $FCldpsas = new FusionCharts("Pie3D","450","450");

  # Set Relative Path of chart swf file.
  $FCldpsas->setSwfPath("../../FusionCharts/");

  //Store chart attributes in a variable for ease of use
  $strParam="caption=LDPSA Progress Output report;subCaption=By Sample status;pieSliceDepth=30; showBorder=1;showNames=1;formatNumberScale=0;numberSuffix= ;decimalPrecision=0";

  # Set chart attributes
  $FCldpsas->setChartParams($strParam);
  
  // Fetch all factory records using SQL Query
  // Store chart data values in 'total' column/field
  // and category names in 'FactoryName'
  $strQuery = "select ldpsa.priority, ldpsa.status, count(ldpsa.status) as cs from tblldpsataskactivity ldpsa  group by ldpsa.status";
  
  $result = mysql_query($strQuery) or die(mysql_error());

  //Pass the SQL Query result to the FusionCharts PHP Class function
  //along with field/column names that are storing chart values and corresponding category names
  //to set chart data from database
  if ($result)
  {
    $FCldpsas->addDataFromDatabase($result, "cs", "status");
  }
  
  mysql_close($link);

  # Render the chart
  $FCldpsas->renderChart();
  ?>