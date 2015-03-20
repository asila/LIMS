<?php
 // Connect to the Database
  $link = connectToDB();

  # Create column3d chart object using FusionCharts PHP Class
  $FC = new FusionCharts("Column3D","450","450");

  # Set Relative Path of chart swf file.
  $FC->setSwfPath("../../FusionCharts/");

  //Store chart attributes in a variable for ease of use
  $strParam="caption=Sites Output report;subCaption=By Sample Quantity;pieSliceDepth=30; showBorder=1;showNames=1;formatNumberScale=0;numberSuffix= ;decimalPrecision=0";

  # Set chart attributes
  $FC->setChartParams($strParam);

  // Fetch all factory records using SQL Query
  // Store chart data values in 'total' column/field
  // and category names in 'FactoryName'
  $strQuery = "select a.service_no, a.site, sum(a.soil+a.plant+a.water+a.other) as total from formtb a  group by a.site";
  
  $result = mysql_query($strQuery) or die(mysql_error());

  //Pass the SQL Query result to the FusionCharts PHP Class function
  //along with field/column names that are storing chart values and corresponding category names
  //to set chart data from database
  if ($result)
  {
    $FC->addDataFromDatabase($result, "total", "site");
  }
  
  mysql_close($link);

  # Render the chart
  $FC->renderChart();
  // Connect to the Database
  ?>