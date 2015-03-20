<?php
require_once("../project/includes/initialize.php");
include('../project/layouts/header.php');
$sitedata = "select DISTINCT site from formtb";
  $sitequery = mysql_query($sitedata);
$priordata = "select * from tblproirity";
  $priorquery = mysql_query($priordata);
$statusdata = "select * from tblstatus";
  $statusquery = mysql_query($statusdata);
  $station=$_REQUEST['id'];
?>
<link rel="stylesheet" href="../formelement/css/foundation.css" />
<script src="../formelement/js/vendor/modernizr.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="../responsivetbls/responsive-tables.css" />
<script type="text/javascript" src="../responsivetbls/responsive-tables.js"></script>
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
<script>
    function submitForm(action)
    {
        document.getElementById('searchstation').action = action;
        document.getElementById('searchstation').submit();
    }
</script>

<?php include 'stationtitle.php';?>
<?php include 'pro_dropdown_2.html';?>
		<?php
		switch($station) {
case '1':
?> 
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre2.php"><img SRC="image/back.png" ALT="back" width="50" height="50" ></img></a>
		</td>
	
                 <td>    
<tr><td><h2>Preparation</h2></td></tr>
<?php
       break;

case '2': 
?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre2.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>      
<tr><td><h2>Logging</h2></td></tr>
<?php
       break;

case '3': 
?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre2.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>     
<tr><td><h2>Barcoding</h2></td></tr>
<?php
       break;

case '4':
?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre2.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>    
<tr><td><h2>Sub-Sampling</h2></td></tr>
<?php
       break;

case '5': 
?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>    
<tr><td><h2>LDPSA</h2></td></tr>
<?php
       break;

case '71': 
?> 
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre6.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>    
<tr><td><h2>ALPHA KBr</h2></td></tr>
<?php
       break;
case '72': 
?> 
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre6.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>   
<tr><td><h2>ALPHA ZnSe</h2></td></tr>
<?php
       break;
case '73': 
?> 
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre7.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>   
<tr><td><h2>vis.NIR ASD</h2></td></tr>
<?php
       break;
case '74': 
?> 
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre7.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>  
<tr><td><h2>NIR MPA</h2></td></tr>
<?php
       break;

case '8': 
?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>   
<tr><td><h2>XRD</h2></td></tr>
<?php
       break;

case '9':
?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>     
<tr><td><h2>TXRF</h2></td></tr>
<?php
       break;

case '12': 
?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>
<tr><td><h2>Hand-Held XRF</h2></td></tr>
<?php
       break;

		 case '6':
		 ?>   
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre4.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>  
<tr><td><h2>MIR-ALPHA</h2></td></tr>
<?php
       break;
       case '13': 
       ?>
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre5.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>  
<tr><td><h2>MIR HTS-XT</h2></td></tr>
<?php
       break;
		case '10':  
		?> 
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre3.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>  
<tr><td><h2>Carbon Nitrogen Organic</h2></td></tr>
<?php
       break;
       case '11': 
       ?>   
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre3.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>  
<tr><td><h2>Carbon Nitrogen Total</h2></td></tr>
<?php

       break;
        case '14': 
       ?>   
<table class="responsive" style="width:100%;">
	<tr align="center">
	<td>
        <a href="viewstatuscentre2.php"><img SRC="image/back.png" ALT="back" width="40" height="40" ></img></a>
		</td>
	
                 <td>  
<tr><td><h2><img SRC="image/rec1.png" ALT="back" width="100" height="40" ></h2></td></tr>
<?php

       break;
       default: 
       ?>
       <a href="viewstatuscentre.php"><img SRC="image/back.png" ALT="back" width="50" height="50" ></img></a>
       <?php
     }
        ?> </td></tr> 
<tr>
<td>
<form id="searchstation" action="searchstation.php" method="POST">
<ul class="inline-list">
<li>
<input type="image" name="submit" src="image/search.png" alt="Submit" ALT="search" width="40" height="20"  />
</li>
<li>
<label class=" radius label">Job No:</label>
</li>
<li>
<input type="text" name="servicefinda" id="servicefinda"/>
</li>
<li>
<label class=" radius label">Site:</label>
</li><li>
  <select name="sitefinda" id="sitefinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($sitequery))
{ 
 $col++;
echo  '<option value=',$rows['site'],'>',$rows['site'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class=" radius label">Priority:</label>
</li><li>
<select name="priorityfinda" id="priorityfinda" >
<option value="" selected></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($priorquery))
{ 
 $col++;

echo  '<option value=',$rows['priorityname'],'>',$rows['priorityname'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class=" radius label">Status:</label>
</li><li>
<select name="statusfinda" id="statusfinda" >
<option selected value="" ></option>
<?php
$col=0;
while ($rows = mysql_fetch_array($statusquery))
{ 
 $col++;

echo  '<option value=',$rows['statusname'],'>',$rows['statusname'],'</option>';

 }
?>
 </select>
</li>
<li>
<label class=" radius label">Date:</label>
</li>
<li>
<input type="text" name="drfinda" id="drfinda" value="">
</li>
<li>
<input type="hidden" name="statid" id="statid" value="<?php echo $station; ?>">
</li>
</form>
<br>
<li>

</li>
</ul>
</td>
</tr>
<tr>
  <td>
<table class="app_listing" style="width:100%;">
		<tr>
			<th align="left" >Job No</th>
			<th align="left" >Site</th>
			<th align="left" >Total</th>
			<th align="left" >Type</th>
			<th align="left" >Status</th>
			<th align="left" >Recieved by</th>
			<th align="left" >Date</th>   
			
<?php

			 
		function loadObject(){
			global $cur;
			global $dbtable;
			global $rlink;	
	?>
			
			<th align="center"><input name="Totalsamples" type="text" size="2" value="<?php echo count($cur); ?>" /></th>
		
			<?php
			foreach ($cur as $object){	
			
					   echo (@$odd == true) ? '<tr class="odd_row" >' : '<tr class="even_row">'; @$odd = !$odd;
						echo '<td >';
						echo '<a href="samples_details.php?id='.$object->job_no.'&amp;mydbtable='.$rlink.'" class="app_listitem_key">'.$object->job_no.'</a>';		
						echo ' </td><td > ';
						echo $object->site;						
						echo ' </td><td > ';
						echo $object->total;	
                        echo ' </td><td > ';
                        echo $object->type;	
						echo ' </td><td > ';
                        echo $object->status;	
						echo ' </td><td > ';
						echo $object->recby;					
						echo ' </td><td > ';
						echo $object->Recdate;
						echo ' </td><td > ';
						echo '<a href="receptionupdate.php?id='.$object->job_no.'&amp;mydbtable='.$dbtable.'" class="app_listitem_key"><IMG SRC="images/button_edit.PNG" ALT="Edit"></A></a>';	
						echo ' </td>';
					
			}
		
			return $cur;
		}			
switch($station) {
	  
 		  case '1' :
 		  $viewrecschedule = new Viewrecschedule();
			$cur = $viewrecschedule->allUsers();
			 $dbtable="tblrectaskactivity";
			 $rlink=$station;
			loadObject();
		  break;
		  case '2' :
 		  $viewlogschedule = new Viewlogschedule();
			$cur = $viewlogschedule->allUsers();
			$dbtable="tbllogtaskactivity";
			 $rlink=$station;
			loadObject();
		  break;
		  case '3' :
 		  $viewbarschedule = new Viewbarschedule();
			$cur = $viewbarschedule->allUsers();
			$dbtable="tblbartaskactivity";
			 $rlink=$station;
			loadObject();
		  break;
		  case '4' :
 		  $viewsubsampleschedule = new Viewsubsampleschedule();
			$cur = $viewsubsampleschedule->allUsers();
			$dbtable="tblsubsampletaskactivity";
			 $rlink=$station;
			loadObject();
		  break;
		  case '5' :
 		  $viewldpsaschedule = new Viewldpsaschedule();
			$cur = $viewldpsaschedule->allUsers();
			$dbtable="tblldpsataskactivity";
			$rlink=$station;
                loadObject();
		  break;
		  case '6' :
 		  $viewmiraschedule = new Viewmiraschedule();
			$cur = $viewmiraschedule->allUsers();
			$dbtable="tblmirataskactivity";
			$rlink=$station;
			loadObject();
		  break;
		  case '71' :
 		  $viewmirkbrschedule = new Viewmirkbrschedule();
			$cur = $viewmirkbrschedule->allUsers();
			$dbtable="tblmirkbrtaskactivity";
			$rlink=$station;
			loadObject();
		  break;
                  case '72' :
 		  $viewmirzncschedule = new Viewmirzncschedule();
			$cur = $viewmirzncschedule->allUsers();
			$dbtable="tblmirznctaskactivity";
			$rlink=$station;
			loadObject();
		  break;

                  case '73' :
 		  $viewnirasdschedule = new Viewnirasdschedule();
			$cur = $viewnirasdschedule->allUsers();
			$dbtable="tblnirasdtaskactivity";
			$rlink=$station;
			loadObject();
		  break;
                  case '74' :
 		  $viewnirmpaschedule = new Viewnirmpaschedule();
			$cur = $viewnirmpaschedule->allUsers();
			$dbtable="tblnirmpataskactivity";
			$rlink=$station;
			loadObject();
		  break;

		  case '8' :
 		  $viewxrdschedule = new Viewxrdschedule();
			$cur = $viewxrdschedule->allUsers();
			$dbtable="tblxrdtaskactivity";
			$rlink=$station;
			loadObject();
		  break;
		  case '9' :
 		  $viewtxrfschedule = new Viewtxrfschedule();
			$cur = $viewtxrfschedule->allUsers();
			$dbtable="tbltxrftaskactivity";
			$rlink=$station;
			loadObject();
		  break;
		  case '10' :
 		  $viewcnoschedule = new Viewcnoschedule();
			$cur = $viewcnoschedule->allUsers();
			$dbtable="tblcnotaskactivity";
			$rlink=$station;
			loadObject();
		  break;
		  case '11' :
 		  $viewcntschedule = new Viewcntschedule();
			$cur = $viewcntschedule->allUsers();
			$dbtable="tblcnttaskactivity";
			$rlink=$station;
			loadObject();
		  break;
		  case '12' :
 		  $viewhhtxrfschedule = new Viewhhtxrfschedule();
			$cur = $viewhhtxrfschedule->allUsers();
			$dbtable="tblhhtxrftaskactivity";
			$rlink=$station;
			loadObject();
		  break;

                  case '13' :
 		  $viewmirhschedule = new Viewmirhschedule();
			$cur = $viewmirhschedule->allUsers();
			$dbtable="tblmirhtaskactivity";
			$rlink=$station;
			loadObject();
		  break;
		  case '14' :
 		  $requestsrec = new Requestsrec();
			$cur = $requestsrec->allUsers();
			$dbtable="reception";
			$rlink=$station;
			loadObject();
		  break;
		  default: header("location:viewstatuscentre.php");
		  }
		?>
		</tr>
		</table>
</td>
</tr>
</table>
<div class="footer">
        
    </div>