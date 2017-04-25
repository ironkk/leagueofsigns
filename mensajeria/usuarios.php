<?php

session_start();

// USAR html para hacer botino esta sección estara dentro de Mensajes !!

if(!isset($_SESSION['nombre_usu'])){
	header('Location: ');
	
}else{

$nombreusu = $_SESSION['nombre_usu'];
echo "Bienvenido , $nombreusu<br/>";
echo "<a href ='enviarmensaje.php'>Enviar Mensaje</a><br/>";
echo "<a href ='mensajesrecibidos.php'>Mensajes recibidos</a><br/>";
echo "<a href ='mensajesenviados.php'>Mensajes enviados</a><br/>";
}


?>