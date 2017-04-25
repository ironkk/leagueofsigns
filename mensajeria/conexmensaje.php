<?php 
session_start();
include_once '../utilidades.php';
$conexion=conexion();

if (!isset($_SESSION['nombre_usu'])) {
    header('Location: ');
} else {
	
$idusuario = $_SESSION['nombre_usu'];
$receptor=$_POST['receptor'];
$mensaje=$_POST['mensaje'];

}
$insert = "insert into mensajes (emisor,receptor,texto,fechahora)
				values ($nombre_usu, '$receptor', '$mensaje', curtime())";
				
 	if (mysqli_query($conexion, $insert)){
		echo "mensaje enviado con éxito";
	} else {
		mysqli_error($conexion);
	}


?>