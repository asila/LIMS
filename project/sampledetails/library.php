<?php
error_reporting(0);
mysql_connect("localhost", "root", "") or die ("Oops! Server not connected"); // Connect to the host
mysql_select_db("database") or die ("Oops! DB not connected"); // select the database
?>