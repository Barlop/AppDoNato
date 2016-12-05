<?php
require_once "../config.inc.php";
$smarty->assign("usuario",$_SESSION['usuario']);

extract($_REQUEST);

switch ($caso) {

	case 1:
		$resultDetalles = $mysqli->query("
			SELECT 
				empresas.id	AS empresa_id,
				empresas.nombre AS empresa_nombre,
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

			while ($rowDetalles = $resultDetalles->fetch_assoc()) {
				$contador[] = $rowDetalles; 
			}

			$smarty->assign("contador", $contador);
	break;

	case 3: 
		$resultEliminar = $mysqli->query("
			DELETE FROM empresas WHERE id = $id
		");

		if($resultEliminar != null) {
			
			print "<script>alert(\"Empresa eliminada exitosamente.\");window.location='{$rooturl}_acceso';</script>";
		
		} else {
			
			print "<script>alert(\"No se pudo eliminar la empresa.\");window.location='{$rooturl}_acceso';</script>";

		}
	break;
	
}

$smarty->display(TEMPLATES."detalles.tpl");


