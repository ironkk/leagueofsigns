<?php
require_once '../utilidades.php';
session_start();
$conexion = conexion();
$idusuario = $_SESSION['nombre_usu'];
echo"
<table>
<tr>
<td>Texto</td>
</tr>
";
$query = "select texto from mensaje where emisor='$idusuario'";
$resultado = mysqli_query($conexion,$query);
while($fila = mysqli_fetch_array($resultado)){
	extract($fila);
echo"	
	<tr>
	 <td>$texto</td>
	</tr>
	
";
}
echo"
</table>
";
?>