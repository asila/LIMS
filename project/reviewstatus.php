<html>
<head>
<?php
include("style.php");
require_once("../project/includes/initialize.php");
include_layout_template_public('header.php');
global $id;
$id=$_REQUEST['id'];
$sql="SELECT service_no,scientist,site,indiv_ana FROM formtb WHERE service_no LIKE '{$id}' ORDER BY service_no  DESC LIMIT 1";
$result = mysql_query($sql) or die (mysql_error());
if($result) {
global $indiv_ana1;
while($rows = mysql_fetch_array($result))
{	
$service_no1 = $rows['service_no'];
$scientist=$rows['scientist'];
$site1 = $rows['site'];
(array)$indiv_ana1 = explode(".",$rows['indiv_ana']);
}
}
 ?>
 
<?php

require_once("includes/initialize.php");

$query = "SELECT  * FROM  status WHERE  stservice_no LIKE '$id'";

      $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
if($result){		
      $col=0;
while($rows = mysql_fetch_array($result))
{
$col++;
		$recst = $rows['rec1'];
		$logst = $rows['log1'];
		$barst = $rows['bar1'];
		$subst = $rows['sub1'];
		$mirst = $rows['mir1'];
		$nirst = $rows['nir1'];
		$txrfst = $rows['txrf1'];
		$xrdst = $rows['xrd1'];
		$cnost = $rows['cno1'];
		$cntst = $rows['cnt1'];
		$ldpsast = $rows['ldpsa1'];
		$htxrfst = $rows['htxrf1'];
				
							}
                         
	       }	
	      
?>

<link rel="stylesheet" href="mstyle.css">
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link rel="stylesheet" href="js/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.js"></script>
<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <style>
         .ui-widget-header {
            background: #cedc98;
            border: 1px solid #DDDDDD;
            color: #333333;
            font-weight: bold;
         }
         .progress-label {
            position: absolute;
            left: 50%;
            top: 13px;
            font-weight: bold;
            text-shadow: 1px 1px 0 #fff;
         }
      </style>
    
 <script type="text/javascript">
      
      function scheduleProg() {  
      var id=document.schedule.elements["schedid"].value;
        var progressbar = $( "#progressbar-5" );
         var progressLabel = $( "#progress-label" );
         
         $( "#progressbar-5" ).progressbar({
            value: false,
            change: function() {
               progressLabel.text(progressbar.progressbar( "value" ) + "%" );
            },
            complete: function() {      	
            progressLabel.text( "Schedule Completed!" );
             }
         });
         function progress() {
            var val = progressbar.progressbar( "value" ) || 0;
            progressbar.progressbar( "value", val + 1 );
            if ( val < 99 ) {
               setTimeout( progress, 100 );
            }
         }
         setTimeout( progress, 1000 );
      }; 
    
   </script>
</head>
<body> 
<?php include 'pro_dropdown_2.html';?> 
<form name="schedule" id="schedule" action="schedule.php" method="POST" enctype="multipart/form-data" onsubmit="return scheduleProg()">
<input type="hidden" size="20" id="schedid" name="schedid"  value="<?php echo $id;?>" />
<table width="100%" class="responsive">
<tr>
<td><a href="index.php?id=<?php echo $id;?>" >Back</a></td>
<td>Site :   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $site1;?></td>
<td>Job.No :   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $id;?></td>
<td>Scientist :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $scientist;?></td>
</tr>
<tr>
	<td class=subcat colspan="8"><div id="progressbar-5"><div id="progress-label">
       
         </div></div></td>
	<td align="center">
	<div id="createarea"></div>
	</td>
</tr>
<tr>
	<td class=cat>STATION</td>
	<td class=cat>STATION</td>
	<td class=cat>PRIORITY</td>
	<td class=cat>STATUS</td>
	<td class=cat>START DATE</td>
	<td class=cat>EST.TIME(days)</td>
	<td class=cat>COMMENTS for STATION </td>
</tr>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblrectaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$rec="Reception";
			

						$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepa" id="anadepa" >';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($rec==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td>';
						
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspa" id="statuspa">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statusleva" id="statusleva">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text"  size="20" id="recdate" name="recdate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTrec')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatea" name="taskestdatea"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
					    <input type="text" size="20" id="reccomnts" name="reccomnts"  value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
</tr>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tbllogtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$log="Logging";

						$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepb" id="anadepb">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($log==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';			
			
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspb" id="statuspb">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevb" id="statuslevb">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="logdate" name="logdate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTlog')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdateb" name="taskestdateb"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="logcomnts" name="logcomnts" value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						
</td>
</tr>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblbartaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$bar="Barcoding";
			
						$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepc" id="anadepc">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($bar==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';			
			
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspc" id="statuspc">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevc" id="statuslevc">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="bardate" name="bardate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTbar')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatec" name="taskestdatec"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="barcomnts" name="barcomnts"  value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
	</tr>
<tr>
	<td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblsubsampletaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$sub="Sub-sampling";
			
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepd" id="anadepd">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($sub==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspd" id="statuspd">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevd" id="statuslevd">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="subdate" name="subdate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTsub')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdated" name="taskestdated"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="subcomnts" name="subcomnts" value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
</tr>
<?php
$a="mira";
if(in_array($a,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblmirataskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepe" id="anadepe">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($a==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspe" id="statuspe">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statusleve" id="statusleve">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="miradate" name="miradate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTmir')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatee" name="taskestdatee"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="miracomnts" name="miracomnts"  value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
	<tr>
<?php
}else {}
$aha="mirh";
if(in_array($aha,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblmirhtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepz" id="anadepz">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($aha==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspz" id="statuspz">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevz" id="statuslevz">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="mirhdate" name="mirhdate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DWs')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatez" name="taskestdatez"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="mirhcomnts" name="mirhcomnts"  value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
	<tr>
<?php
}else {}

$b="nir";
if(in_array($b,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblnirtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepf" id="anadepf">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($b==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspf" id="statuspf">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevf" id="statuslevf">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="nirdate" name="nirdate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTnir')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatef" name="taskestdatef"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="nircomnts" name="nircomnts"  value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
</tr>
<?php
}else {}

$c="txrf";
if(in_array($c,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tbltxrftaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepg" id="anadepg">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($c==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspg" id="statuspg">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevg" id="statuslevg">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="txrfdate" name="txrfdate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTtxrf')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdateg" name="taskestdateg"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="txrfcomnts" name="txrfcomnts"  value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
</tr>
<?php
}else {}

$d="xrd";
if(in_array($d,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblxrdtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadeph" id="anadeph">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($d==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statusph" id="statusph">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevh" id="statuslevh">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="xrddate" name="xrddate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTxrd')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdateh" name="taskestdateh"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="xrdcomnts" name="xrdcomnts" value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td> ';
						?>
						
</td>
</tr>
<?php
}else {}

$e="cnO";
if(in_array($e,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblcnotaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepi" id="anadepi">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($e==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspi" id="statuspi" >';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevi" id="statuslevi">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="cnodate" name="cnodate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTcno')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatei" name="taskestdatei"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="cnocomnts" name="cnocomnts" value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td> ';
						?>
						

</td>
</tr>
<?php
}else {}

$f="cnT";
if(in_array($f,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblcnttaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepj" id="anadepj">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($f==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspj" id="statuspj">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevj" id="statuslevj">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="cntdate" name="cntdate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTcnt')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatej" name="taskestdatej"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="cntcomnts" name="cntcomnts" value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
</tr>
<?php
}else {}

$g="ldpsa";
if(in_array($g,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblldpsataskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepk" id="anadepk">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($g==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspk" id="statuspk">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevk" id="statuslevk">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="ldpsadate" name="ldpsadate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DTldpsa')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatek" name="taskestdatek"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="ldpsacomnts" name="ldpsacomnts" value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>
						

</td>
</tr>
<?php
}else {}

$h="hhxrf";
if(in_array($h,$indiv_ana1))
{
?>
<tr>
   <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblhhtxrftaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
			<?php
			$query = "SELECT  * FROM  tblanalysis";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

echo '<select name="anadepl" id="anadepl">';
//echo '<option  value="'.$rows['assignto'].'">'.$rows['assignto'].'</option>';	
while($rows3 = mysql_fetch_array($result3))

{
$col++;
		if($h==$rows3['analysis']) {
		echo '<option  value="'.$rows3['analysis'].'">'.$rows3['analysis'].'</option>';
		}
							}
						echo ' </td><td> ';
						$query = "SELECT  * FROM  tblproirity";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuspl" id="statuspl">';
		//echo '<option  value="'.$rows['priority'].'">'.$rows['priority'].'</option>';	
while($rows1 = mysql_fetch_array($result1))
{
$col++;
		
		echo '<option value='.$rows1['priorityname'].'>'.$rows1['priorityname'].'</option>';
							}
						echo '</select>';
                  echo ' </td><td> ';
$query = "SELECT  * FROM  tblstatus";

$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;

		echo '<select name="statuslevl" id="statuslevl">';
		//echo '<option  value="'.$rows['status'].'">'.$rows['status'].'</option>';	
while($rows2 = mysql_fetch_array($result2))
{
$col++;
		
		echo '<option value='.$rows2['statusname'].'>'.$rows2['statusname'].'</option>';
							}
						echo '</select>';
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="htxrfdate" name="htxrfdate"  value="<?php echo $rows['taskcreatedon'];?>" onclick="javascript:showCal('Cal DThtxrf')" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="taskestdatel" name="taskestdatel"  value="<?php echo $rows['estimation'];?>" required/>
						<?php
						echo ' </td><td> ';
						?>
						<input type="text" size="20" id="htxrfcomnts" name="htxrfcomnts" value="<?php echo $rows['statcom'];?>"/>
						<?php
						echo ' </td>';
						?>

</td>
</tr>
<?php
}else {}
?>
<tr>
<td colspan="2">
<td><label>No References:</label><input type="text" size="20"  name="ref" id="ref" value=""/></td>
<td><label>Site Comments:</label><textarea cols="30" rows="3" maxlength="100" id="sitecomnts" name="sitecomnts"></textarea></td>
<td><input type="submit" size="60" maxlength="60" name="Schedule" id="Schedule" value="Save"/></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="viewstatus.php?id=<?php echo $id;?>" ><input type="button" value="View Schedule"/></a></td>
</tr>
</table>

</form>
</body>
</html>
