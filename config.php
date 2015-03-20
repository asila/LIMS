<?php
//We start sessions
session_start();

/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the members area
can work correctly.
******************************************************/

//We log to the DataBase
mysql_connect('localhost', 'root', 'Fx4*r!=Els1X');
mysql_select_db('svdesk');

//Webmaster Email
$mail_webmaster = 'bondocyrus@gmail.com';

//Top site root URL
$url_root = 'http://localhost/';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Home page file name
$url_home = 'index.php';

//Design Name
$design = 'default';
?>