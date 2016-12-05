<?php
include "../config.inc.php";

$result = $mysqli -> query("SELECT id,UPPER(nombre) FROM estados ORDER BY nombre");

while ($row = $result -> fetch_array()) {
	$id[] 		= $row[0];
	$nombre[]	= $row[1];
}

$smarty -> assign("id",$id);
$smarty -> assign("nombre",$nombre);

$smarty -> assign("usuario",$_SESSION['usuario']);
$smarty -> display(TEMPLATES."nueva_empresa.tpl");
