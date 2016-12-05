<?php
////////////////// SESION //////////////////
@session_start();

////////////////// MYSQL ///////////////////
$host 		= "localhost";
$db_user 	= "root";
$db_pass 	= "super";
$db 		= "tescha_vinculacion";

$mysqli 	= new mysqli($host, $db_user, $db_pass, $db);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->set_charset("utf8");

////////////////// ROOTURL /////////////////
$rooturl = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].'/app_donato/';
//$rooturl = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].'/test/';

/////////////////// RUTAS ///////////////////
define('ROOTPATH',  dirname(__FILE__));
define('TEMPLATES',  ROOTPATH . '/templates/');

////////////////// SMARTY //////////////////
require "include/smarty/Smarty.class.php";
$smarty = new Smarty;

//////////////////////////////////////////////////////////////////////
$smarty -> assign("rooturl",$rooturl);
$smarty -> assign("templates",TEMPLATES);
?>