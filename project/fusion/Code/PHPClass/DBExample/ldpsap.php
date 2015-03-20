<?php
$link = connectToDB();
  
  # Create column3d chart object using FusionCharts PHP Class
  $FCldpsap = new FusionCharts("Pie3D","450","450");

  # Set Relative Path of chart swf file.
  $FCldpsap->setSwfPath("../../FusionCharts/");

  //Store chart attributes in a variable for ease of use
  $strParam="caption=LDPSA Progress Output report;subCaption=By Sample priority;pieSliceDepth=30; showBorder=1;showNames=1;formatNumberScale=0;numberSuffix= ;decimalPrecision=0";

  # Set chart attributes
  $FCldpsap->setChartParams($strParam);
  
  // Fetch all factory records using SQL Query
  // Store chart data values in 'total' column/field
  // and category names in 'FactoryName'
  $strQuery = "select ldpsa.priority, ldpsa.status, count(ldpsa.status) as cs from tblldpsataskactivity ldpsa  group by ldpsa.priority";
  
  $result = mysql_query($strQuery) or die(mysql_error());

  //Pass the SQL Query result to the FusionCharts PHP Class function
  //along with field/column names that are storing chart values and corresponding category names
  //to set chart data from database
  if ($result)
  {
    $FCldpsap->addDataFromDatabase($result, "cs", "priority");
  }
  
  mysql_close($link);

  # Render the chart
  $FCldpsap->renderChart();
  ?>