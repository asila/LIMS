<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
 function renderForm($first, $last, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>New Samples</title>
 </head>
 <body>
 <link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
         $(function() {
            $( "#tabs-9" ).tabs({
               event:"mouseover"
            });
         });
</script>
<style>
         #tabs-9{font-size: 14px; widows: 100%;}
         .ui-widget-header {
            background:#b9cd6d;
            border: 1px solid #b9cd6d;
            color: #FFFFFF;
            font-weight: bold;


         }
         #tabs-9 ul li  {
    margin-left: 450px;
             }
         #tabs-9 label  {
    font-size: 12px;
            }
</style>
<?php include 'stationtitle.php';?>
<?php include 'pro_dropdown_2.html';?>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 


 <table class="responsive" style="width:100%;">
<tr>
<td align="center"><a href="#" >Back</a><h2>Sample Details Entry </h2></td>
</tr>
 <tr>
<td>
<form id="search" action="#" method="POST" >
<input type="button" name="searchs" id="searchs" value="search"/>
</form>
</td>
</tr>
 <tr>
 <td>
<table class="app_listing" style="width:100%;">
      <tr>
         <th align="left" >SSN</th>
         <th align="left" >Or.SSN</th>
         <th align="left" >Job No</th>
         <th align="left" >Scientist</th>
         <th align="left" >Study</th>
         <th align="left" >Site</th>
          <th align="left" >Sampling</th>
         <th align="left" >Country</th>
         <th align="left" >Region</th>
         <th align="left" >Cluster</th>
         <th align="left" >Plot</th>
         <th align="left" >Depth_STD</th>
         <th align="left" >Top</th>
         <th align="left" >Bottom</th>
         <th align="left" >Treatment</th>
         <th align="left" >Depth_CUM</th>
          <th align="left" >Material</th>
          <th align="left" >Lab-analysis</th> 
         
          <?php
          
$job_no=$_REQUEST['id'];
$query = "SELECT  * FROM  sample_details  WHERE service_no='{$job_no}' order by ssn asc";
$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
// number of results to show per page
	$per_page = 1;
	
	// figure out the total pages in the database
	$total_results = mysql_num_rows($result1);
	$total_pages = ceil($total_results / $per_page);

	// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
	if (isset($_GET['page']) && is_numeric($_GET['page']))
	{
		$show_page = $_GET['page'];
		
		// make sure the $show_page value is valid
		if ($show_page > 0 && $show_page <= $total_pages)
		{
			$start = ($show_page -1) * $per_page;
			$end = $start + $per_page; 
		}
		else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page; 
		}		
	}
	else
	{
		// if page isn't set, show first set of results
		$start = 0;
		$end = $per_page; 
	}

echo "<p></b> ";
	for ($i = 1; $i <= $total_pages; $i++)
	{
		echo "&nbsp;<a href='yes.php?id=$job_no&amp;page=$i'>$i</a>&nbsp; ";
	}
	echo "</p>";
           ?>
         
         <th align="left"><input name="Totalsamples" type="text" size="10" value="" /></th>
         
         <?php
         for ($i = $start; $i < $end; $i++)
	{
		// make sure that PHP doesn't try to show results that don't exist
		if ($i == $total_results) { break; }
	
		// echo out the contents of each row into a table
		echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> '; @$odd = !$odd;
		echo "<tr>";
		echo '<td>' .$ssn=mysql_result($result1, $i, 'ssn');
		echo '</td><td>' .$ossn=mysql_result($result1, $i, 'ossn');
		echo '</td><td>' .$service_no=mysql_result($result1, $i, 'service_no');
		echo '</td><td>' .$scientist=mysql_result($result1, $i, 'scientist');
		echo '</td><td>' .$study=mysql_result($result1, $i, 'study');
		echo '</td><td>' .$site=mysql_result($result1, $i, 'site');
		echo '</td><td>' .$sdesign=mysql_result($result1, $i, 'sample_design');
		echo '</td><td>' .$country=mysql_result($result1, $i, 'country');
		echo '</td><td>' .$region=mysql_result($result1, $i, 'region');
		echo '</td><td>' .$cluster=mysql_result($result1, $i, 'cluster');
		echo '</td><td>' .$plot=mysql_result($result1, $i, 'plot');
		echo '</td><td>' .$Depth_std=mysql_result($result1, $i, 'Depth_std');
		echo '</td><td>' .$dtop=mysql_result($result1, $i, 'dtop');
		echo '</td><td>' .$dbottom=mysql_result($result1, $i, 'dbottom');
		echo '</td><td>' .$treat=mysql_result($result1, $i, 'treat');
		echo '</td><td>' .$Depth_cm=mysql_result($result1, $i, 'Depth_cm');
		echo '</td><td>' .$type=mysql_result($result1, $i, 'type');
		echo '</td><td>' .$lab=mysql_result($result1, $i, 'lab').'</td>';
		echo "</tr>"; 
	}

         //table content one item
        
      ?>
</td>
</table>
</td>
</tr>
</table>
<?php
$queryprima = "SELECT  * FROM  primary_table WHERE job_no='{$job_no}'";
$resultprima = mysql_query($queryprima) or die ("Error in query: $query. ".mysql_error());
$noinprima=mysql_num_rows($resultprima);
         for ($i = $start; $i < $noinprima; $i++)
	{	
 $job_nop=mysql_result($resultprima, $i, 'job_no');
 $lab_loggingp=mysql_result($resultprima, $i, 'lab_logging');
 $scientistp=mysql_result($resultprima, $i, 'scientist');
 $studyp=mysql_result($resultprima, $i, 'study');
 $regionp=mysql_result($resultprima, $i, 'region');
 $sitep=mysql_result($resultprima, $i, 'site');
 $countryp=mysql_result($resultprima, $i, 'country');
 $materialp=mysql_result($resultprima, $i, 'material');
 $total=mysql_result($resultprima, $i, 'total');
 $sdesign=mysql_result($resultprima, $i, 'sdesign');	
	}

         //table content one item
if($sdesign=="ldsf")
{
?>
<div id="tabs-9">
 <ul><li><a href="#tabs-11">Land Degradation Surveillance Framework(LDSF) </a></li> </ul>
            <div id="tabs-11" style="margin-left:30px;margin-top:45px;">
            <form id="ldsf" name="ldsf" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" onsubmit="setTimeout('parent.location.reload()',5); return true;">
            <input type="hidden" id="ssn" name="ssn" value="<?php echo $ssn; ?>"/>
            <input type="hidden" id="sdesign" name="sdesign" value="<?php echo $sdesign; ?>"/>
            <table>
               <tr><td>
               <label>Lab logging</label>
               <select id="loglab1" name="loglab1" style="width:120px;height:30px;">
               <option value="<?php echo $lab; ?>"></option>
               <option>ICRAF</option>
               <option>Arusha</option>
               </select>
                 </td><td>
               <label>SSN original</label>
               <input type="text" id="ossn1" name="ossn1" value="<?php echo $ossn; ?>" style="width:120px;height:30px; font-size:14px;"/>
                 </td><td> 
               <label>Cluster</label>
               <input type="text" id="cluster1" name="cluster1" value="<?php echo $cluster; ?>" style="width:120px;height:30px; font-size:14px;"/>
                 </td><td>
               <label>Plot</label>
               <input type="text" id="plot1" name="plot1" value="<?php echo $plot; ?>" style="width:120px;height:30px; font-size:14px;"/>
                 </td><td>
               <label>Depth STD</label>
               <select id="depstd1" name="depstd1"  style="width:120px;height:30px; font-size:14px;">
               <option value="<?php echo $depth_std;  ?>"></option>
               <option>Top Soil</option>
               <option>Sub Soil</option>
               </select>
                 </td><td>
               <label>top</label>
               <input type="text" id="deptop1" name="deptop1" value="<?php echo $dtop;  ?>" style="width:120px;height:30px; font-size:14px;"/>
                 </td><td>
               <label>bottom</label>
               <input type="text" id="depbottom1" name="depbottom1" value="<?php echo $dbottom;  ?>"style="width:120px;height:30px; font-size:14px;"/>
                </td><td>
               <label>sample type</label>
               <select id="mat1" name="mat1" style="width:120px;height:30px;">
               <option value="<?php echo $material;  ?>"></option>
               <option>Soil</option>
               <option>Plant</option>
               <option>Water</option>
               <option>Other</option>
               </select>
              </td>
              </tr>
              <tr>
              <td>
               <input type="submit" id="submit" name="submit" value="Save" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;" />
               </td>
               </tr>
               </table>
            </form>
         </div>
 </div>
 <?php
}
elseif($sdesign=="nldsf")
{
 ?>
<div id="tabs-9">
 <ul><li><a href="#tabs-11">Non Land Degradation Surveillance Framework(non-LDSF)</a></li> </ul>
            <div id="tabs-11" style="margin-left:30px;margin-top:45px;">
            <form id="nonldsf" name="nonldsf" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" onsubmit="setTimeout('parent.location.reload()',5); return true;">
            <input type="text" id="ssn2" name="ssn2" value="<?php echo $ssn; ?>"/>
            <input type="text" id="sdesign" name="sdesign" value="<?php echo $sdesign; ?>"/>
            <input type="text" id="total" name="total" value="<?php echo $total; ?>"/>
               <table>
               <tr><td>
               <label>Lab logging</label>
               <select id="loglab2" name="loglab2" style="width:120px;height:30px;">
               <option value="<?php echo $lab;  ?>"></option>
               <option>ICRAF</option>
               <option>Arusha</option>
               </select>
              </td><td>
              <label>SSN original</label>
              <input type="text" id="ossn2" name="ossn2" value="<?php echo $ossn;?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>Plot code</label>
              <input type="text" id="plotcd2" name="plotcd2" value="<?php echo $cluster;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>Plot name</label>
              <input type="text" id="plot2" name="plot2" value="<?php echo $plot;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>Treatment</label>
              <input type="text" id="treat2" name="treat2" value="<?php echo $treat;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>top</label>
              <input type="text" id="deptop2" name="deptop2" value="<?php echo $dtop;  ?>" style="width:120px;height:30px; font-size:14px;"/>
              </td><td>
              <label>bottom</label>
              <input type="text" id="depbottom2" name="depbottom2" value="<?php echo $dbottom;  ?>"style="width:120px;height:30px; font-size:14px;"/>
               </td><td>
               <label>sample type</label>
               <select id="mat2" name="mat2" style="width:120px;height:30px;">
               <option>Soil</option>
               <option>Plant</option>
               <option>Water</option>
               <option>Other</option>
               </select>
              </td>
              </tr>
              <tr>
              <td>
               <input type="submit" id="submit" name="submit" value="Save" style="background-color:#b9cd6d;border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;border: 2px solid #E0EBDF;width:100px; height:30px;" />
               </td>
               </tr>
               </table>
            </form>
         </div>
 </div>
  <?php
}
else
{
echo "Nothing";
}
?>
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 //include('connect-db.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 	if ($_POST['sdesign'] == 'ldsf'){
 $ssn = mysql_real_escape_string(htmlspecialchars($_POST['ssn1']));
 $loglab = mysql_real_escape_string(htmlspecialchars($_POST['loglab1']));
 $ossn = mysql_real_escape_string(htmlspecialchars($_POST['ossn1']));
 $cluster = mysql_real_escape_string(htmlspecialchars($_POST['cluster1']));
 $plot = mysql_real_escape_string(htmlspecialchars($_POST['plot1']));
 $depstd = mysql_real_escape_string(htmlspecialchars($_POST['depstd1']));
 $deptop = mysql_real_escape_string(htmlspecialchars($_POST['deptop1']));
 $depbottom = mysql_real_escape_string(htmlspecialchars($_POST['depbottom1']));
 $mat = mysql_real_escape_string(htmlspecialchars($_POST['mat1']));
}

if ($_POST['sdesign'] == 'nldsf'){
 $ssn = mysql_real_escape_string(htmlspecialchars($_POST['ssn2']));
 $loglab = mysql_real_escape_string(htmlspecialchars($_POST['loglab2']));
 $ossn = mysql_real_escape_string(htmlspecialchars($_POST['ossn2']));
 $plotcd = mysql_real_escape_string(htmlspecialchars($_POST['plotcd2']));
 $plot = mysql_real_escape_string(htmlspecialchars($_POST['plot2']));
 $treat = mysql_real_escape_string(htmlspecialchars($_POST['treat2']));
 $deptop = mysql_real_escape_string(htmlspecialchars($_POST['deptop2']));
 $depbottom = mysql_real_escape_string(htmlspecialchars($_POST['depbottom2']));
 $mat = mysql_real_escape_string(htmlspecialchars($_POST['mat2']));
 } 
 $queryst1="INSERT INTO sample_details (ssn,service_no,scientist,study,site,sample_design,country,region) VALUES ('{$ssn}','{$loglab}','{$ossn}','{$plotcd}','{$treat}','{$deptop}','{$depbottom}','{$mat}')";
 $resultst1 = mysql_query($queryst1) or die (mysql_error());     
$query = "UPDATE `sample_details` SET `ossn`='{$ossn}',`site`='{$total}',`cluster`='{$cluster}',`plot`='{$plot}',`depth_std`='{$depstd}',`dtop`='{$deptop}',`dbottom`='{$depbottom}',`type`='{$type}',`lab`='{$loglab}' WHERE  ssn='$ssn'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
 // check to make sure both fields are entered
 if ($firstname == '' || $lastname == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($firstname, $lastname, $error);
 }
 else
 {
 // save the data to the database
 $queryst1="INSERT INTO sample_details (ssn,service_no,scientist,study,site,sample_design,country,region) VALUES ('{$ssn}','{$loglab}','{$ossn}','{$plotcd}','{$treat}','{$deptop}','{$depbottom}','{$mat}')";
 $resultst1 = mysql_query($queryst1) or die (mysql_error());

 //mysql_query("INSERT sample_details SET site='$treat', cluster='$cluster'")
 //or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: view.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','');
 }
?>