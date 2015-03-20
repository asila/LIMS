 <?php
include('config.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>LIMS</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
        <div class="content">
<?php
//We display a welcome message, if the user is logged, we display it username
?>
<?php if(isset($_SESSION['username'])) ?>
&nbsp;&nbsp;<h1>SD4 Laboratory Information Management System</h1>
<br />
<br />
<?php
//If the user is logged, we display links to edit his infos, to see his pms and to log out
if(isset($_SESSION['username']))
{
?>
<div align="center">
<a href="project/viewstatuscentre.php"><input type="button" value="LIMS"/></a>
<a href="edit_infos.php"><input type="button" value="Edit Account"/></a>
<a href="connexion.php"><input type="button" value="Logout"/></a>
</div>
<?php
}
else
{
//Otherwise, we display a link to log in and to Sign up
?>
<div align="center"><a href="sign_up.php"><input type="button" value="Sign up"/></a>
<a href="connexion.php"><input type="button" value="Log in"/></a></div>
<?php
}
?>
		</div>
		<div class="foot"><a href="<?php echo $url_home; ?>"></a> </div>
	</body>
</html>