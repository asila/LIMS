<?php session_start();
# Logging in with Google accounts requires setting special identity, so this example shows how to do it.
require 'require/openid.php';

try {
    # Change 'localhost' to your domain name.
    $openid = new LightOpenID('icraf@cgiar.org');
	
		$openid->required = array(
		'namePerson',
		'namePerson/first',
		'namePerson/last',
		'contact/email',
		);

    if(!$openid->mode) {
		
	if(@$_GET['auth']=="google")
    {
		$_SESSION['auth']="Google";
        $openid->identity = 'https://www.google.com/accounts/o8/id';
        header('Location: ' . $openid->authUrl());
	}elseif(@$_GET['auth']=="yahoo")
	{
		$_SESSION['auth']="Yahoo";
		$openid->identity ='yahoo.com';
		header("Location:".$openid->authUrl());
	}

    } elseif($openid->mode == 'cancel') {
        echo 'User has canceled authentication!';
    } else {
		 $external_login=$openid->getAttributes();
		 $_SESSION['name']=$external_login['namePerson/first']." ".$external_login['namePerson/last'];
		 $_SESSION['email']=$external_login['contact/email'];
		 header("Location:account-home.php");
		 exit();
		 
    }
} catch(ErrorException $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OpenID Login with with Google Account or Yahoo ID</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	color: #333;
	font-size: 11px;
}

input[type='text'],input[type='password']{ border:1px solid #CCC;}
.center {
	text-align: center;
}

-->
</style></head>
<body>
<h1 class="center">W3Lessons.com</h1>
<h2 class="center">Website Account Login with Google, Yahoo Demo</h2>
<table width="200" border="0" align="center" cellpadding="5" cellspacing="0" style="border:1px solid #CCC;">
  <tr>
    <td bgcolor="#D6D6D6"><strong>Account Login</strong></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td>E-mail address</td>
          <td><label>
            <input type="text" name="textfield" id="textfield" />
          </label></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><label>
            <input type="text" name="textfield2" id="textfield2" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" value="Submit" />
            </label></td>
        </tr>
        </table>
    </form></td>
  </tr>
  <tr>
    <td bgcolor="#F6F6F6"><img src="open_login.jpg" alt="OAuth Login" width="280" height="85" border="0" usemap="#Map" /></td>
  </tr>
</table>


<p>
  <map name="Map" id="Map">
    <area shape="rect" coords="13,45,162,75" href="index.php?auth=google" alt="Login with Google Account" />
    <area shape="rect" coords="171,46,269,74" href="index.php?auth=yahoo" alt="Login with Yahoo ID" />
  </map>
</p>
</body>
</html>