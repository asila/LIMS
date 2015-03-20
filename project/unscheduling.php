<?php
require_once("includes/initialize.php");
include_layout_template_public('header.php');
// get value of id that sent from address bar
$id=$_GET['id'];
// Delete data in mysql from row that has this id
$queryrec="SELECT service_no FROM formtb WHERE   formtb.service_no = '$id'";
$resultrec = mysql_query($queryrec) or die (mysql_error());  
            if(mysql_num_rows($resultrec)==0)
            {    
 $querylst="INSERT INTO formtb SELECT * FROM scheduled WHERE scheduled.service_no ='$id'";
 $resultlst = mysql_query($querylst) or die (mysql_error());  
$sql="DELETE FROM tblrectaskactivity WHERE tblrectaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tbllogtaskactivity WHERE tbllogtaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblbartaskactivity WHERE tblbartaskactivity.taskid = '$id'";
$result=mysql_query($sql);

$sql="DELETE FROM tblsubsampletaskactivity WHERE tblsubsampletaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblxrdtaskactivity WHERE tblxrdtaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tbltxrftaskactivity WHERE tbltxrftaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblnirasdtaskactivity WHERE tblnirasdtaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblnirmpataskactivity WHERE tblnirmpataskactivity.taskid = '$id'";
$result=mysql_query($sql);

$sql="DELETE FROM tblmirznctaskactivity WHERE tblmirznctaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblmirkbrtaskactivity WHERE tblmirkbrtaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblmirhtaskactivity WHERE tblmirhtaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblcnotaskactivity WHERE tblcnotaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblcnttaskactivity WHERE tblcnttaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblhhtxrftaskactivity WHERE tblhhtxrfhtaskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM tblldpsataskactivity WHERE tblldpsataskactivity.taskid = '$id'";
$result=mysql_query($sql);
$sql="DELETE FROM scheduled WHERE scheduled.service_no = '$id'";
$result=mysql_query($sql);

echo "unschedule Successfully";
header("location:scheduled.php");				
}

else {
echo "ERROR";
header("location:scheduled.php");
}
// close connection
mysql_close();
?>