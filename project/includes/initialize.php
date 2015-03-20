<?php
/**
 * @author:Cyrus Bondo 
 * @copyright 2014
 */

//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
//create constant for directory seperator

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
//create constant for site root path
defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'lims/project');
//path constant for the includes
defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'includes');

// load config file first 
require_once(LIB_PATH.DS."config.php");
//load basic functions next so that everything after can use them
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."database.php");



?>