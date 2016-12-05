<?php
require "../../config.inc.php";

sleep(1);

$usuario = $_POST['usuario'];
$password = sha1($_POST['password']);


$result = $mysqli->query("SELECT usuario,password
							FROM administradores 
							WHERE usuario = '$usuario' 
							AND password = '$password'");

$countResult = $result->num_rows;

if ($countResult == 1) {

	$_SESSION['logueado'] = "user_ok";
	$_SESSION['usuario'] = $usuario;
	echo "okAdministrador";

} else {

	echo "malLogin";

}

?>