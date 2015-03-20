<html>
<head>
<?php
include("style.php");
require_once("../project/includes/initialize.php");
global $id;
$id=$_REQUEST['id'];
$sql="SELECT service_no,scientist,site,indiv_ana FROM scheduled WHERE service_no LIKE '{$id}' ORDER BY service_no  DESC LIMIT 1";
$result = mysql_query($sql) or die ("Error in query: $sql. ".mysql_error());
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
include_layout_template_public('header.php');

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
		$mirast = $rows['mira1'];
		$mirhst = $rows['mirh1'];
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
      
</head>
<body>  
<?php include 'pro_dropdown_2.html';?> 

<form name="schedule" id="schedule" action="schedule.php" method="POST" enctype="multipart/form-data" onsubmit="return scheduleProg()">
<input type="hidden" size="20" id="schedid" name="schedid"  value="<?php echo $id;?>" />
<table width="100%" class="responsive">
<tr>
<td><a href="scheduled.php?id=<?php echo $id;?>" >Back</a></td>
<td>Site :   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $site1;?></td>
<td>Job.No :   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $id;?></td>
<td>Scientist :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $scientist;?></td></tr>
<tr>
        <td class=cat>STATION</td>
	<td class=cat>STATION</td>
	<td class=cat>PRIORITY</td>
	<td class=cat>STATUS</td>
	<td class=cat>START DATE</td>
	<td class=cat>EST.TIME</td>
	<td class=cat>DUE DATE</td>
	<td class=cat>COMMENT for STATION</td>
</tr>
			<?php
						$query = "SELECT  * FROM  tblrectaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result1 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result1)!=0){
while($rows1 = mysql_fetch_array($result1))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblrectaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto1" name="assignto1"  value="<?php echo $rows1['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority1" name="priority1"  value="<?php echo $rows1['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status1" name="status1"  value="<?php echo $rows1['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate1" name="recdate1"  value="<?php echo $rows1['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea1" name="taskestdatea1"  value="<?php echo $rows1['estimation'];?>"/>
						 </td><td> 
						<input type="text" size="20" id="taskactdatea1" name="taskactdatea1"  value="<?php echo $rows1['actualtime'];?>" style="<?php echo ($rows1['actualtime']<date("Y-m-d") AND $rows1['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="reccomnts" name="reccomnts" value="<?php echo $rows1['statcom'];?>"/>
						</td>
</tr>
						<?php
						global $a;
						$a=$rows1['sitecom'];
						global $b;
						$b=$rows1['ref'];
						}
					}			   
                 


						$query = "SELECT  * FROM  tbllogtaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";
						
$result2 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result2)!=0){
while($rows2 = mysql_fetch_array($result2))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tbllogtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto2" name="assignto2"  value="<?php echo $rows2['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority2" name="priority2"  value="<?php echo $rows2['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status2" name="status2"  value="<?php echo $rows2['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate2" name="recdate2"  value="<?php echo $rows2['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea2" name="taskestdatea2"  value="<?php echo $rows2['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea2" name="taskactdatea2"  value="<?php echo $rows2['actualtime'];?>" style="<?php echo ($rows2['actualtime']<date("Y-m-d") AND $rows2['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="logcomnts" name="logcomnts" value="<?php echo $rows2['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}			   
                  
						$query = "SELECT  * FROM  tblbartaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result3 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result3)!=0){
while($rows3 = mysql_fetch_array($result3))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblbartaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto3" name="assignto3"  value="<?php echo $rows3['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority3" name="priority3"  value="<?php echo $rows3['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status3" name="status3"  value="<?php echo $rows3['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate3" name="recdate3"  value="<?php echo $rows3['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea3" name="taskestdatea3"  value="<?php echo $rows3['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea3" name="taskactdatea3"  value="<?php echo $rows3['actualtime'];?>" style="<?php echo ($rows3['actualtime']<date("Y-m-d") AND $rows3['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="barcomnts" name="barcomnts" value="<?php echo $rows3['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}			   
                  
						$query = "SELECT  * FROM  tblsubsampletaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result4 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result4)!=0){
while($rows4 = mysql_fetch_array($result4))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblsubsampletaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto4" name="assignto4"  value="<?php echo $rows4['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority4" name="priority4"  value="<?php echo $rows4['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status4" name="status4"  value="<?php echo $rows4['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate4" name="recdate4"  value="<?php echo $rows4['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea4" name="taskestdatea4"  value="<?php echo $rows4['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea4" name="taskactdatea4"  value="<?php echo $rows4['actualtime'];?>" style="<?php echo ($rows4['actualtime']<date("Y-m-d") AND $rows4['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="subcomnts" name="subcomnts" value="<?php echo $rows4['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}			   
                  
						$query = "SELECT  * FROM  tblmirkbrtaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result51 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result51)!=0){
while($rows51 = mysql_fetch_array($result51))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblmirkbrtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto51" name="assignto5"  value="<?php echo $rows51['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority51" name="priority51"  value="<?php echo $rows51['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status51" name="status51"  value="<?php echo $rows51['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate51" name="recdate51"  value="<?php echo $rows51['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea51" name="taskestdatea51"  value="<?php echo $rows51['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea51" name="taskactdatea51"  value="<?php echo $rows51['actualtime'];?>" style="<?php echo ($rows51['actualtime']<date("Y-m-d") AND $rows51['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="mirkbrcomnts" name="mirkbrcomnts" value="<?php echo $rows51['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}	


						$query = "SELECT  * FROM  tblmirznctaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result52 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result52)!=0){
while($rows52 = mysql_fetch_array($result52))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblmirznctaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto52" name="assignto52"  value="<?php echo $rows52['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority52" name="priority52"  value="<?php echo $rows52['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status52" name="status52"  value="<?php echo $rows52['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate52" name="recdate52"  value="<?php echo $rows52['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea52" name="taskestdatea52"  value="<?php echo $rows52['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea52" name="taskactdatea52"  value="<?php echo $rows52['actualtime'];?>" style="<?php echo ($rows52['actualtime']<date("Y-m-d") AND $rows52['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="mirznccomnts" name="mirznccomnts" value="<?php echo $rows52['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}		  	   
                  $query = "SELECT  * FROM  tblmirhtaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result15 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result15)!=0){
while($rows15 = mysql_fetch_array($result15))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblmirhtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto15" name="assignto15"  value="<?php echo $rows15['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority15" name="priority15"  value="<?php echo $rows15['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status15" name="status15"  value="<?php echo $rows15['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate15" name="recdate15"  value="<?php echo $rows15['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea15" name="taskestdatea15"  value="<?php echo $rows15['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea15" name="taskactdatea15"  value="<?php echo $rows15['actualtime'];?>" style="<?php echo ($rows15['actualtime']<date("Y-m-d") AND $rows15['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="mirhcomnts" name="mirhcomnts" value="<?php echo $rows15['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}		   
						$query = "SELECT  * FROM  tblnirasdtaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result61 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result61)!=0){
while($rows61 = mysql_fetch_array($result61))
{
$col++;
						?>
   <tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblnirasdtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto6" name="assignto61"  value="<?php echo $rows61['assignto'];?>"/>
						</td><td> 
						<input type="text"  size="20" id="priority61" name="priority61"  value="<?php echo $rows61['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status61" name="status61"  value="<?php echo $rows61['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate61" name="recdate61"  value="<?php echo $rows61['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea61" name="taskestdatea61"  value="<?php echo $rows61['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea61" name="taskactdatea61"  value="<?php echo $rows61['actualtime'];?>" style="<?php echo ($rows61['actualtime']<date("Y-m-d") AND $rows61['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="nirasdcomnts" name="nirasdcomnts" value="<?php echo $rows61['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}		   
                  

$query = "SELECT  * FROM  tblnirmpataskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result62 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result62)!=0){
while($rows62 = mysql_fetch_array($result62))
{
$col++;
						?>
   <tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblnirmpataskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto62" name="assignto62"  value="<?php echo $rows62['assignto'];?>"/>
						</td><td> 
						<input type="text"  size="20" id="priority62" name="priority62"  value="<?php echo $rows62['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status62" name="status62"  value="<?php echo $rows62['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate62" name="recdate62"  value="<?php echo $rows62['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea62" name="taskestdatea62"  value="<?php echo $rows62['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea62" name="taskactdatea62"  value="<?php echo $rows62['actualtime'];?>" style="<?php echo ($rows62['actualtime']<date("Y-m-d") AND $rows62['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="nirmpacomnts" name="nirmpacomnts" value="<?php echo $rows62['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}		   
						$query = "SELECT  * FROM  tbltxrftaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result7 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result7)!=0){
while($rows7 = mysql_fetch_array($result7))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tbltxrftaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto7" name="assignto7"  value="<?php echo $rows7['assignto'];?>"/>
						</td><td> 
						<input type="text"  size="20" id="priority7" name="priority7"  value="<?php echo $rows7['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status7" name="status7"  value="<?php echo $rows7['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate7" name="recdate7"  value="<?php echo $rows7['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea7" name="taskestdatea7"  value="<?php echo $rows7['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea7" name="taskactdatea7"  value="<?php echo $rows7['actualtime'];?>" style="<?php echo ($rows7['actualtime']<date("Y-m-d") AND $rows7['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="txrfcomnts" name="txrfcomnts" value="<?php echo $rows7['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}		   
                  $query = "SELECT  * FROM  tblxrdtaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result8 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result8)!=0){
while($rows8 = mysql_fetch_array($result8))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblxrdtaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto8" name="assignto8"  value="<?php echo $rows8['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority8" name="priority8"  value="<?php echo $rows8['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status8" name="status8"  value="<?php echo $rows8['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate8" name="recdate8"  value="<?php echo $rows8['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea8" name="taskestdatea8"  value="<?php echo $rows8['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea8" name="taskactdatea8"  value="<?php echo $rows8['actualtime'];?>" style="<?php echo ($rows8['actualtime']<date("Y-m-d") AND $rows8['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="xrdcomnts" name="xrdcomnts" value="<?php echo $rows8['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}		   
                  
						$query = "SELECT  * FROM  tblcnotaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result9 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result9)!=0){
while($rows9 = mysql_fetch_array($result9))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblcnotaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto9" name="assignto9"  value="<?php echo $rows9['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority9" name="priority9"  value="<?php echo $rows9['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status9" name="status9"  value="<?php echo $rows9['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate9" name="recdate9"  value="<?php echo $rows9['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea9" name="taskestdatea9"  value="<?php echo $rows9['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea9" name="taskactdatea9"  value="<?php echo $rows9['actualtime'];?>" style="<?php echo ($rows9['actualtime']<date("Y-m-d") AND $rows9['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="cntcomnts" name="cntcomnts" value="<?php echo $rows9['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}	   
                  
						$query = "SELECT  * FROM  tblcnttaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result10 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result10)!=0){
while($rows10 = mysql_fetch_array($result10))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblcnttaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto10" name="assignto10"  value="<?php echo $rows10['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority10" name="priority10"  value="<?php echo $rows10['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status10" name="status10"  value="<?php echo $rows10['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate10" name="recdate10"  value="<?php echo $rows10['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea10" name="taskestdatea10"  value="<?php echo $rows10['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea10" name="taskactdatea10"  value="<?php echo $rows10['actualtime'];?>" style="<?php echo ($rows10['actualtime']<date("Y-m-d") AND $rows10['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="cntcomnts" name="cntcomnts" value="<?php echo $rows10['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}			   
                  
						$query = "SELECT  * FROM  tblldpsataskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result11 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result11)!=0){
while($rows11 = mysql_fetch_array($result11))
{
$col++;
						?>
						<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblldpsataskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto11" name="assignto11"  value="<?php echo $rows11['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority11" name="priority11"  value="<?php echo $rows11['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status11" name="status11"  value="<?php echo $rows11['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate11" name="recdate11"  value="<?php echo $rows11['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea11" name="taskestdatea11"  value="<?php echo $rows11['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea11" name="taskactdatea11"  value="<?php echo $rows11['actualtime'];?>" style="<?php echo ($rows11['actualtime']<date("Y-m-d") AND $rows11['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="ldpsacomnts" name="ldpsacomnts" value="<?php echo $rows11['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}			   
                  
						$query = "SELECT  * FROM  tblhhtxrftaskactivity WHERE taskid ='{$id}' ORDER BY taskid  DESC LIMIT 1";

$result12 = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
$col=0;
if(mysql_num_rows($result12)!=0){
while($rows12 = mysql_fetch_array($result12))
{
$col++;
						?>
	<tr>
 <td align="center" ><a href="statsampleupdatea.php?id=<?php echo $id;?>&amp;mydbtable=tblhhtxrftaskactivity"><IMG SRC="images/button_edit.PNG" ALT="Edit"></a></td>
	<td>
	               <input type="text" size="20" id="assignto12" name="assignto12"  value="<?php echo $rows12['assignto'];?>"/>
						 </td><td> 
						<input type="text"  size="20" id="priority12" name="priority12"  value="<?php echo $rows12['priority'];?>" />
					   </td><td> 
						<input type="text" size="20" id="status12" name="status12"  value="<?php echo $rows12['status'];?>" />
						</td><td> 
						<input type="text"  size="20" id="recdate12" name="recdate12"  value="<?php echo $rows12['taskcreatedon'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskestdatea12" name="taskestdatea12"  value="<?php echo $rows12['estimation'];?>" />
						 </td><td> 
						<input type="text" size="20" id="taskactdatea12" name="taskactdatea12"  value="<?php echo $rows12['actualtime'];?>" style="<?php echo ($rows12['actualtime']<date("Y-m-d") AND $rows12['status']!="Complete")? "background:silver; color:red;":"";?>"/>
						 </td><td> 
						<input type="text" size="20" id="htxrfcomnts" name="htxrfcomnts" value="<?php echo $rows12['statcom'];?>"/>
						</td>
</tr>
						<?php
						}
					}		   
                  ?>
</td>
</tr>
<tr>
<td colspan="4"></td>
<td><label>No References:</label><input type="text" size="20"  name="ref" id="ref" value="<?php echo $b;?>"/></td>
<td><label>Site Comments:</label><textarea cols="30" rows="3" maxlength="100" id="comnts" name="comnts" value="<?php echo $a;?>"><?php echo $a;?></textarea></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="scheduled.php?id=<?php echo $id;?>" ><input type="button" value="OK"/></a></td>

<td></td>
</tr>
</table>
</form>
</body>
</html>
