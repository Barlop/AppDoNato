<?php
require "../../config.inc.php";
extract($_POST);

if ($caso == 1) {
	echo '<option value="" class="text-center">ELIJE UNA OPCIÓN</option>';
	$result = $mysqli -> query("SELECT id,UPPER(nombre) FROM municipios WHERE estado_id = $id ORDER BY nombre");
	while ($row = $result -> fetch_array()) {
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
	}
}

if ($caso == 2) {
	echo '<option value="" class="text-center">ELIJE UNA OPCIÓN</option>';
	$result = $mysqli -> query("SELECT id,UPPER(nombre) FROM localidades WHERE municipio_id = $id ORDER BY nombre");
	while ($row = $result -> fetch_array()) {
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
	}
}
?>