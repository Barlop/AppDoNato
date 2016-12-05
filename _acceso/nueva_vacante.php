<?php
include "../config.inc.php";

$result = $mysqli -> query("SELECT id AS empresa_id FROM empresas");

while ($row = $result -> fetch_assoc()) {
	$id[] = $row;
}

$smarty -> assign("id",$id);

$smarty -> assign("usuario",$_SESSION['usuario']);
$smarty -> display(TEMPLATES."vacantes.tpl");
