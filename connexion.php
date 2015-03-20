<?php
include('config.php');
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
<?php
//If the user is logged, we log him out
if(isset($_SESSION['username']))
{
	//We log him out by deleting the username and userid sessions
	unset($_SESSION['username'], $_SESSION['userid']);
?>
<div class="message">You have successfuly been loged out.<br /><br />
<a href="<?php echo $url_home; ?>">Home</a>
</div>
<?php
}
else
{
	$ousername = '';
	//We check if the form has been sent
	if(isset($_POST['username'], $_POST['password']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = mysql_real_escape_string(stripslashes($_POST['username']));
			$password = stripslashes($_POST['password']);
		}
		else
		{
			$username = mysql_real_escape_string($_POST['username']);
			$password = $_POST['password'];
		}
		//We get the password of the user
		$req = mysql_query('select type,password,id from users where username="'.$username.'"');
		$dn = mysql_fetch_array($req);
		//We compare the submited password and the real one, and we check if the user exists
		if($dn['password']==$password and mysql_num_rows($req)>0)
		{
			//If the password is good, we dont show the form
			$form = false;
			//We save the user name in the session username and the user Id in the session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid'] = $dn['id'];
			$ustype=$dn['type'];
?>
<?php if(isset($_SESSION['username'])) ?>

<br />
<br />
&nbsp;&nbsp;<h1>SD4 Laboratory Information Management System</h1>
<br />
<br />
<?php
 //If the user is logged, we display links to edit his infos, to see his pms and to log out
if(isset($_SESSION['username']))
{ 
	switch ($ustype) 
{

 		  case 'admin' :
?>

<div align="center">
<a href="project/viewstatuscentre.php"><input type="button" value="LIMS"/></a>
<a href="edit_infos.php"><input type="button" value="Edit Account"/></a>
<a href="connexion.php"><input type="button" value="Logout"/></a>
</div>
<?php
 break;
 case 'prep':
 header("location:project/viewStatsampleSchedule2.php?id=1");
 break;
 case 'log':
 header("location:project/viewStatsampleSchedule2.php?id=2");
 break;
 case 'barcode':
 header("location:project/viewStatsampleSchedule2.php?id=3");
 break;
 case 'sub':
 header("location:project/viewStatsampleSchedule2.php?id=4");
 break;
 case 'ir':
 header("location:project/viewstatuscentre4.php");
 break;
 case 'ldpsa':
 header("location:project/viewStatsampleSchedule.php?id=5");
 break;
 case 'xrd':
 header("location:project/viewStatsampleSchedule.php?id=8");
 break;
 case 'txrf':
 header("location:project/viewStatsampleSchedule.php?id=9");
 break;
 case 'cn':
 header("location:project/viewstatuscentre3.php");
 break;
 case 'hhxrf':
 header("location:project/viewStatsampleSchedule.php?id=12");
 break;
		  default: header("location:connexion.php");
}

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
<?php
		}
		else
		{
			//Otherwise, we say the password is incorrect.
			$form = true;
			$message = 'The username or password is incorrect.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//We display a message if necessary
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//We display the form
?>
<div class="content">
    <form action="connexion.php" method="post">
            <div class="center">
            <label for="username">Username</label><input type="text" name="username" id="username" value="<?php echo htmlentities($ousername, ENT_QUOTES, 'UTF-8'); ?>" /><br />
            <label for="password">Password</label><input type="password" name="password" id="password" /><br />
            <a href="<?php echo $url_home; ?>"><input type="button" value="Back" class="submit" />
            <input type="submit" value="Log in" class="submit" />
		</div>
    </form>
</div>
<?php
	}
}
?>
		<div class="foot"><a href="<?php echo $url_home; ?>"></a> </div>
	</body>
</html>