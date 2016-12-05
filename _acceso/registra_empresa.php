<?php
include "../config.inc.php";

extract($_POST);

$mysqli -> query(
	"INSERT INTO empresas 
		(nombre,id_estado,id_municipio,id_localidad,cp,telefono,email,contacto,direccion,giro,colonia)
	VALUES
		('$nombre',$estado,$municipio,$localidad,'$cp','$telefono','$email','$contacto','$direccion','$giro','$colonia')
");

$id = $mysqli->insert_id;

$archivo = "img_logos/".$id.".jpg";

if (move_uploaded_file($_FILES['input']['tmp_name'], $archivo)) {
	header("location:index.php");
} else {
	echo "Hubo un error al insertar el registro, volver a intentar";
}

?>