<?php
include '../utilidades.php';
//conexion a la base de datos
$conexion = conexion();

//si la variable imagen no ha sido definida nos dara un advertencia.
$id = $_GET['imagen'];

//vamos a crear nuestra consulta SQL
$query = "SELECT imagen FROM imagenes WHERE imagen_id = $id";
//con mysql_query la ejecutamos en nuestra base de datos indicada anteriormente
//de lo contrario mostraremos el error que ocaciono la consulta y detendremos la ejecucion.
$resultado= @mysql_query($query) or die(mysql_error());

//si el resultado fue exitoso
//obtendremos el dato que ha devuelto la base de datos
$datos = mysql_fetch_assoc($resultado);
//ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
$ruta = "imagenes/" . $datos['imagen'];

//ahora solamente debemos mostrar la imagen
echo "<img src='$ruta' />";

?>