<?php
require_once '../utilidades.php';
session_start();
$conexion = conexion();
$idusuario = $_SESSION['nombre_usu'];
echo"
<table>
<tr>
<td>Texto</td>
<td>Receptor</td>
</tr>
";
$query= "select texto,receptor from mensaje where receptor='$idusuario'";
$resultado = mysqli_query($conexion,$query);
while($fila = mysqli_fetch_array($resultado)){
	extract($fila);
echo"	
	<tr>
	 <td>$texto</td>
	<td>$idusuario</td>
	</tr>
	
";
}
echo"
</table>
";
?>