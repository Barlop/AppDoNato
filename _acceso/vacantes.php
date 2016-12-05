<?php

require_once "../config.inc.php";

extract($_REQUEST);

$mysqli->query("
	INSERT INTO vacantes
		(empresa_id,cargo,sueldo,descripcion,fecha_publicacion,fecha_cierre,num_vacantes)
	VALUES
		($id,'$cargo',$sueldo,'$descripcion','$fecha_publicacion','$fecha_cierre',$num_vacantes)
");

if ($mysqli != null) {

	print "<script>alert(\"Oferta y vacantes agregadas exitosamente.\");window.location='{$rooturl}_acceso';</script>";

} else {
	
	print "<script>alert(\"Error al registrar oferta y vacante.\");window.location='{$rooturl}_acceso';</script>";

}
