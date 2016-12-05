<?php
require_once "../config.inc.php";
$smarty->assign("usuario",$_SESSION['usuario']);

extract($_REQUEST);

switch ($caso) {

	case $caso == 2: 
		$resultEditar = $mysqli->query("
			SELECT 
				empresas.id	AS empresa_id,
				empresas.nombre AS empresa_nombre,
				empresas.giro AS giro,
				UPPER(estados.nombre) AS estado,
				UPPER(municipios.nombre) AS municipio,
				UPPER(localidades.nombre)	AS localidad,
				empresas.contacto AS contacto,
				empresas.direccion AS direccion,
				empresas.colonia AS colonia,
				empresas.cp AS cp,
				empresas.telefono AS telefono,
				empresas.email AS email
			FROM empresas
			INNER JOIN estados ON
				empresas.id_estado = estados.id
			INNER JOIN municipios ON
				empresas.id_municipio = municipios.id
			INNER JOIN localidades ON
				empresas.id_localidad = localidades.id
			WHERE empresas.id = $id");

			while ($rowEditar = $resultEditar->fetch_assoc()) {
				$editar[] = $rowEditar; 
			}
 
			$result = $mysqli -> query("SELECT id,UPPER(nombre) FROM estados ORDER BY nombre");

			while ($row = $result->fetch_array()) {
				$idemp[] = $row[0];
				$nombre[]= $row[1];
			}

			$smarty->assign("idemp",$idemp);
			$smarty->assign("nombre",$nombre);

			$smarty->assign("editar", $editar);	
		break;

}

$smarty -> display(TEMPLATES."editar.tpl");


