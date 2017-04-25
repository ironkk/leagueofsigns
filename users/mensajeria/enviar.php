<?php
include('../utilidades.php');
$conexion = conexion();
?>
<?php
if (isset($_POST["enviar"])) {
    $titulo = $_POST["titulo"];
    $receptor = $_POST["receptor"];
    $emisor = $_POST["emisor"];
    $mensaje = $_POST["mensaje"];
    $query = mysql_query("INSERT INTO mensajes (titulo, receptor, emisor, mensaje) VALUES ('$titulo','$receptor','$emisor','$mensaje')") or die(mysql_error());
    echo '<script>alert("El mensaje se envio exitosamente a ' . $_POST["receptor"] . '")</script>';
}
?>
<form name="mp" method="post" action="">
    <!-- Interesante que muestre el nombre de usuario el cual esta logueado ya, envez de hacer un campo-->
    <p>Nombre usuario:<br>
        <input type="text" name="emisor" id="emisor">
    </p>
    <!-- Desplegable con los contactos que tiene en la lista para poder enviar mensaje o simplemente mostrar el contacto que ha elegido anteriormente-->
    <p>Receptor:<br>
        <input type="text" name="receptor" id="receptor">
    </p>
    <p>Título:<br>
        <input type="text" name="titulo" id="titulo">
    </p>
    <p>Mensaje:<br>
        <textarea name="mensaje" id="mensaje" cols="45" rows="5"></textarea>
    </p>
    <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </p>
</form>