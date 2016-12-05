<?php
require "../config.inc.php";
$_SESSION = array();
session_unset();
session_destroy();
header("location:{$rooturl}");
?>