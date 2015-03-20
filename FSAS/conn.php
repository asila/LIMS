<?php
// set database server access variables:
$host = "localhost";
$user = "root";
$pass = "Fx4*r!=Els1X";
$db = "svdesk";

// open connection
$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database
mysql_select_db($db) or die ("Unable to select database!");
