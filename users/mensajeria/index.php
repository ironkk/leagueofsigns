<?php include('../utilidades.php'); ?>
<?php
if (isset($_GET["borrar"])) {
    mysql_query("DELETE FROM mensajes WHERE id = '$_GET[borrar]'");
    echo "<script>alert('El mensaje número $_GET[borrar] ha sido eliminado'); document.location=('index.php')</script>";
}
?>
<?php
if (isset($_GET["id"])) {
    $sql = mysql_query("SELECT * FROM mensajes WHERE id = '$_GET[id]'");
    $fetch = mysql_fetch_array($sql);
    echo"<table><tr><td>
	                  De: $fetch[emisor]
	                  </td></tr><tr><td>
	                  Para: $fetch[receptor]
	                  </td></tr><tr><td>
	                  Mensaje: $fetch[mensaje]
	                  </td></tr></table><hr>[<a href='index.php'>Volver</a> | <a href='index.php?borrar=$fetch[id]'>Eliminar</a>]";
} else {
    ?>
    <?php
    $query = mysql_query("SELECT * FROM mensajes WHERE receptor = '$_COOKIE[usuario]' ORDER BY id DESC");
    if (mysql_num_rows($query)) {
        while ($row = mysql_fetch_array($query)) {
            echo "<table><tr><td>
	                  De: $row[emisor]
	                  </td></tr><tr><td>
	                  Para: $row[receptor]
	                  </td></tr><tr><td>
	                  [<a href='index.php?id=$row[id]'>Leer mensaje</a>]
	                  </td></tr></table>
					  <hr>";
        }
    } else {
        echo'No hay mensajes<hr>';
    }
    ?>
    [<a href="enviar.php">Enviar Mensaje</a>]
<?php } ?>