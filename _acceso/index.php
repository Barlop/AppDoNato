<?php
include "../config.inc.php";
$smarty -> assign("usuario",$_SESSION['usuario']);

$result = $mysqli->query ("
	SELECT 
		empresas.id		AS empresa_id,
		empresas.nombre 			AS empresa_nombre,
		UPPER(estados.nombre) 		AS estado,
		UPPER(municipios.nombre) 	AS municipio,
		UPPER(localidades.nombre)	AS localidad,
		empresas.contacto AS contacto,
		empresas.direccion AS direccion,
		empresas.colonia AS colonia,
		empresas.cp AS cp,
		empresas.telefono AS telefono,
		empresas.email AS email,
		(SELECT COUNT(vacantes.id) FROM vacantes WHERE empresas.id = vacantes.empresa_id) AS ofertas,
		(SELECT SUM(vacantes.num_vacantes) FROM vacantes WHERE empresas.id = vacantes.empresa_id) AS num_vacantes
	FROM empresas
	LEFT JOIN estados ON
		empresas.id_estado = estados.id
	LEFT JOIN municipios ON
		empresas.id_municipio = municipios.id
	LEFT JOIN localidades ON
		empresas.id_localidad = localidades.id
	ORDER BY empresas.id DESC
");

while ($row = $result -> fetch_array()) {
	$loop[] = $row; 
}

$smarty -> assign("loop",$loop);
$smarty -> display(TEMPLATES."_acceso.tpl");
?>