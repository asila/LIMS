<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
$id =$_REQUEST['id'];
?>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script>

$(function() {
   $( "#taskdate" ).datepicker();
});
</script>
<table class="responsive" style="width:100%;">
	<tr align="center">
		<td>
       <a href="viewStatsampleSchedule2.php?id=2"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	</tr>

  <tr>
  <td>
<table class="app_listing" style="width:100%;">
		<tr>
			<th align="left" >Job No</th>
			<th align="left" >Lab logging</th>
			<th align="left" >Fssn</th>
			<th align="left" >Lssn&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Cssn&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Scientist &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Study &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Site &nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Sampling&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Material&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left" >Total</th>
			<th align="left" >Lab Analysis</th>
            <th align="left" >Country</th>
            <th align="left" >Region</th>
            <th align="left" >Request</th>
            <th align="left" >Reference</th>
            <th align="left" >Comments</th>
  <?php
global $ssnmax;
global $lssnmax;
global $cssnmax;
global $plssnmax;
global $pcssnmax;

$querymax = "SELECT ssn FROM  sample_details order by ssn desc limit 1";
$resultmax = mysql_query($querymax) or die ("Error in query: $query. ".mysql_error());
$start=0;
while($rows = mysql_fetch_array($resultmax))
	{	
		$ssnmax=$rows['ssn'];
	
		$start++;
		}

$querymax2 = "SELECT  service_no FROM  sample_details where ssn='{$ssnmax}'";
$resultmax2 = mysql_query($querymax2) or die ("Error in query: $query. ".mysql_error());
while($rows = mysql_fetch_array($resultmax2))
	{	
		     $servicemax=$rows['service_no'];
		     $lssnprima=$rows['lssn'];
		    
		$start++;
		}
$querymax3 = "SELECT  lssn,cssn FROM  primary_table where job_no='{$servicemax}'";
$resultmax3 = mysql_query($querymax3) or die ("Error in query: $query. ".mysql_error());
while($rows = mysql_fetch_array($resultmax3))
	{	
		$lssnmax=$rows['lssn'];
		 $cssnmax=$rows['cssn'];
		$start++;
		}

		$querymax4 = "SELECT lssn,cssn FROM  primary_table order by lssn desc limit 1";
$resultmax4 = mysql_query($querymax4) or die ("Error in query: $query. ".mysql_error());
$start=0;
while($rows = mysql_fetch_array($resultmax4))
	{	
		$plssnmax=$rows['lssn'];
		$pcssnmax=$rows['cssn'];
	
		$start++;
		}
if (isset($_POST['submit']) )
{
		//form has been submitted1
		//error_reporting(E_ALL^E_NOTICE);
$jobno = $_POST['jobno'];
$lablog = $_POST['lablog'];
$fssn = $_POST['fssn'];
$lssn = $_POST['lssn'];
$scientist = $_POST['scientist'];
$study = $_POST['study'];
$site = $_POST['site'];
$sdesign = $_POST['sdesign'];
$material = $_POST['material'];
$total = $_POST['total'];
$labanalysis = $_POST['lab_ana'];
$country = $_POST['country'];
$region = $_POST['region'];
$requests = $_POST['requests'];
$ref = $_POST['ref'];
$comment = $_POST['comment'];
$cssn = $_POST['cssn'];
	// Escape User Input to help prevent SQL Injection
$jobno = mysql_real_escape_string($jobno);
$lablog = mysql_real_escape_string($lablog);
$fssn = mysql_real_escape_string($fssn);
$lssn = mysql_real_escape_string($lssn );
$scientist= mysql_real_escape_string($scientist);
$study= mysql_real_escape_string($study);
$site= mysql_real_escape_string($site);
$sdesign= mysql_real_escape_string($sdesign);
$material= mysql_real_escape_string($material);
$$total = mysql_real_escape_string($total );
$labanalysis = mysql_real_escape_string($labanalysis);
$country = mysql_real_escape_string($country);
$region = mysql_real_escape_string($region);
$requests= mysql_real_escape_string($requests);
$ref = mysql_real_escape_string($ref);
$comment = mysql_real_escape_string($comment);
$cssn = mysql_real_escape_string($cssn);

$query = "UPDATE primary_table SET job_no='{$jobno}',lab_logging='{$lablog}',fssn='{$fssn}',lssn='{$lssn}',cssn='{$cssn}',scientist='{$scientist}',study='{$study}',site='{$site}',sdesign='{$sdesign}',material='{$material}',total='{$total}',lab_analysis='{$labanalysis}',country='{$country}',region='{$region}',requests='{$requests}',ref='{$ref}',comment='{$comment}' WHERE job_no LIKE '%$jobno%'";
	//Execute query
$result = mysql_query($query) or die(mysql_error());
if(mysql_affected_rows()>0)	
		{
	  if($result){
            $id=$jobno;
	  	         header("location:create_site.php?id=" . $id);
			         }
			           else
		 	                {
		 	                $id=$jobno;
	                           header("location:viewStatsampleSchedule2.php?id=2");
			                           }
			                       }
			                       else
			                          {
$jobno = $jobno;
$lablog = $lablog;
$fssn = $fssn;
$lssn = $lssn ;
$scientist= $scientist;
$study= $study;
$site= $site;
$sdesign= $sdesign;
$material= $material;
$$total = $total;
$labanalysis = $labanalysis;
$country = $country;
$region = $region;
$requests= $requests;
$ref = $ref;
$comment = $comment;
$query2="INSERT INTO primary_table (job_no,lab_logging,fssn,lssn,cssn,scientist,study,site,sdesign,material,total,lab_analysis,country,region,requests,ref,comment) VALUES ('{$jobno}','{$lablog}','{$fssn}','{$lssn}','{$cssn}','{$scientist}','{$study}','{$site}','{$sdesign}','{$material}','{$total}','{$labanalysis}','{$country}','{$region}','{$requests}','{$ref}','{$comment}')";
$result2 = mysql_query($query2) or die (mysql_error());
header("location:logging_details.php");
			                                              }
			
	}
else
{
$id =$_REQUEST['id'];
$query = "SELECT  * FROM  primary_table WHERE  job_no='{$id}'";
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$rowCount=mysql_num_rows($result);
global $col;
$col=0;
if($rowCount==1)
{
?>
<th align="left"><input  type="text" name="Totalsamples" size="8" value="<?php echo $rowCount; ?>" align="right" /></th>
<?php
$querysd = "SELECT  * FROM  sample_details";
$resultsd = mysql_query($querysd) or die ("Error in query: $query. ".mysql_error());
$rowCountsd=mysql_num_rows($resultsd);

while($rows = mysql_fetch_array($result))
             {
 $job_no=$rows['job_no'];
 $lab_logging=$rows['lab_logging'];
 $scientist=$rows['scientist'];
 $study=$rows['study'];
 $country=$rows['country'];
 $region=$rows['region'];
 $site=$rows['site'];
 $sdesign=$rows['sdesign'];
 $material=$rows['material'];
 $total=$rows['total'];
 $lab_analysis=$rows['lab_analysis'];
 $requests=$rows['requests'];
 $Comment=$rows['Comment'];
 $ref=$rows['ref'];
 $fssn=$rows['fssn'];
      $fssn=explode(",",$fssn);
      $lssn=$rows['lssn'];
      $lssn=explode(",",$lssn);
      $a=sizeof($lssn);
 $cssn=$rows['cssn'];
 //$q4=$total;
//$start=$rowCountsd;
//$end=$rowCountsd+$q4;
//$fssn=array_map(function($q4){return sprintf('icrs%06d',$q4);},range($start, $end));
//$fssn=$fssn[1];
//$lssn=array_map(function($q4){return sprintf('icrs%06d',$q4);},range($start, $end));
//$lssn=$lssn[$end-$start];
	                  ?>
			<form name="myform" id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="hidden" name="id" id="id" value='<?php echo $rows['job_no'];?>' />
			<input type="hidden" name="idtbl" id="idtbl" value='<?php echo $dbtable;?>' />
			<?php
					   echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td>';
						?>
						<input type="text" size="20" id="jobno" name="jobno"  value="<?php echo $job_no;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="lablog" name="lablog"  value="<?php echo $lab_logging;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="fssn" name="fssn"  value="<?php echo $fssn[1];?>" />
						<?php
						echo ' </td><td> ';
                        ?>
						<input type="text" size="20" id="lssn" name="lssn"  value="<?php echo $lssn[$a];?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="cssn" name="cssn"  value="<?php echo $cssn;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="scientist" name="scientist"  value="<?php echo $scientist;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="study" name="study"  value="<?php echo $study;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="site" name="site"  value="<?php echo $site;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="sdesign" name="sdesign"  value="<?php echo $sdesign;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="material" name="material"  value="<?php echo $material;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="total" name="total"  value="<?php echo $total;?>" />
						<?php
						echo ' </td><td> ';
                        ?>
						<input type="text" size="20" id="lab_ana" name="lab_ana"  value="<?php echo $lab_analysis;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="country" name="country"  value="<?php echo $country;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="region" name="region"  value="<?php echo $region;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="requests" name="requests"  value="<?php echo $requests;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="ref" name="ref"  value="<?php echo $ref;?>" />
						<?php
						echo ' </td><td> ';
                        ?>
						<input type="textarea" size="50" id="comment" name="comment" style="width: 150px; height: 43px;" value="<?php echo $rows['comment'];?>" />
						<?php
						echo ' </td><td> ';
						echo '<a href="viewStatsampleSchedule2.php?id=2"><input type="button" name="exit" id="exit" value="Exit"/></a>';
						echo '<input type="submit" name="submit" id="submit" value="Save &nbsp;'.$id.'"/>';	
						echo ' </td>';					   
			}
			?>
</form>
</tr>
</table>
</td>
</tr>
<table>
<?php
}
else
{


$dbsql="SELECT * From scheduled  Inner Join tbllogtaskactivity On `taskid` = `service_no` Where `service_no` = '{$id}'";
$result = mysql_query($dbsql) or die (mysql_error());
global $q4;
global $service_no;
global $scientist;
global $study;
global $site;
global $country;
global $fssn;
global $lssn;
global $rowCount;
$querysd = "SELECT  * FROM  sample_details";
$resultsd = mysql_query($querysd) or die ("Error in query: $query. ".mysql_error());
$rowCount=mysql_num_rows($resultsd);
$rowCount;
if($result && mysql_num_rows($result)==1) 
{
$col1=0;
while ($rows = mysql_fetch_array($result))
{ 
 $service_no=$rows['service_no'];
 $scientist=$rows['scientist'];
 $study=$rows['project'];
 $country=$rows['country'];
 $study=$rows['project'];
 $region=$rows['region'];
 $site=$rows['site'];
 $sdesign=$rows['sample_design'];
$q1 = number_format($rows['soil'],0);
$q2 = number_format($rows['water'],0);
$q3 = number_format($rows['plant'],0);
$lab_analysis=$rows['indiv_ana'];
$q4=number_format($rows['total'],0);
$start=$rowCount;
$end=$start+$q4;
$fssn1=array_map(function($q4){return sprintf('%06d',$q4);},range($start, $end));
$fssn=implode(",", $fssn1);
//$fssn=$fssn[1];
//$lssn=array_map(function($q4){return sprintf('%06d',$q4);},range($start, $end));
//$lssn=$lssn[$q4];
$lssn=$fssn;
$sitecom=$rows['sitecom'];
$ref=$rows['ref'];
if($q1>0)
{
	$material='soil';
}
elseif ($q2>0) {
	$material='water';
}
elseif ($q3>0) {
	$material='plant';
}
else
{
	$material='others';
}
//choose logging lab
$lab_logging='ICRAF';
$request='';

$col1++;

if ($ssnmax==$lssnmax && $lssnmax==$cssnmax && $plssnmax==$pcssnmax) {

				?>
<form name="myform" id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="hidden" name="id" id="id" value='<?php echo $rows['job_no'];?>' />
			<input type="hidden" name="idtbl" id="idtbl" value='<?php echo $dbtable;?>' />
			<?php
					   echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td>';
						?>
						<input type="text" size="20" id="jobno" name="jobno"  value="<?php echo $service_no;?>"/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="lablog" name="lablog"  value="<?php echo $lab_logging;?>"/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="hidden" size="20" id="fssn" name="fssn"  value="<?php echo $fssn;?>"/>
						<?php
						echo $fssn1[1];
						echo ' </td><td> ';
                        ?>
						<input type="hidden" size="20" id="lssn" name="lssn"  value="<?php echo $lssn;?>"/>
						<?php
							echo $fssn1[$q4];
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="cssn" name="cssn"  value=""/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="scientist" name="scientist"  value="<?php echo $scientist;?>"/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="study" name="study"  value="<?php echo $study;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="site" name="site"  value="<?php echo $site;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="sdesign" name="sdesign"  value="<?php echo $sdesign;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="material" name="material"  value="<?php echo $material;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="total" name="total"  value="<?php echo $q4;?>" />
						<?php
						echo ' </td><td> ';
                        ?>
						<input type="text" size="20" id="lab_ana" name="lab_ana"  value="<?php echo $lab_logging; ?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="country" name="country"  value="<?php echo $country;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="region" name="region"  value="<?php echo $region;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="requests" name="requests"  value="<?php echo $lab_analysis;?>" />
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="ref" name="ref"  value="<?php echo $ref;?>" />
						<?php
						echo ' </td><td> ';
                        ?>
						<input type="textarea" size="50" id="comment" name="comment" style="width: 150px; height: 43px;" value="<?php echo $rows['comment'];?>" />
						<?php
						echo ' </td><td> ';
						echo '<a href="viewStatsampleSchedule2.php?id=2"><input type="button" name="exit" id="exit" value="Exit"/></a>';	
						echo '<input type="submit" name="submit" id="submit" value="Save &nbsp;'.$id.'"/>';	
						echo ' </td>';
						?>
</form>
<?php

					}
					else
					{
						header("location:viewStatsampleSchedule2.php?id=2");
					}
}
				}					   
			}
}
?>
</tr>
</table>
</td>
</tr>
<table>