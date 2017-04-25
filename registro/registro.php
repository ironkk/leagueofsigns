<?php

session_start();
$vtipo = $_GET['tipo'];
include 'comprobar.php';
include_once('../utilidades.php');

$conexion = conexion();


if (isset($_POST['enviar'])) {
    $vnombre_usu = $_POST['nombre_usu'];
    $vpass_usu = $_POST['pass_usu'];
    $rpassword = cifrar($vpass_usu);
    $vnombre = $_POST ['nombre'];
    $vpais = $_POST ['pais'];
    $vsexo = $_POST ['sexo'];
    $vapellidos = $_POST ['apellidos'];
    $vcumpleanios = $_POST ['fecha_nacimiento'];
    $vedad = $_POST ['edad'];
    $vdni = $_POST ['dni'];
    $vlocalidad = $_POST ['localidad'];
    $vpostal = $_POST ['postal'];
    $vdomicilio = $_POST ['domicilio'];
    $vnumero = $_POST ['numero'];
    $vbloque = $_POST ['bloque'];
    $vpiso = $_POST ['piso'];
    $vpuerta = $_POST ['puerta'];
    $vprovincia = $_POST ['provincia'];
    $vemail = $_POST ['email'];
    $vtelefono = $_POST ['telefono'];
    $vtipo = $_POST ['tipo'];


    if (cNombreUsuario($vnombre_usu) & cLongitudPassword($vpass_usu) & cEmail($vemail) & cNumeroTelefono($vtelefono) & cDni($vdni)) {
        $altausuario = "insert into usuario (nombre_usu, pass_usu, nombre, apellidos, localidad, sexo, email, telefono, tipo, puntuacion, dni, postal, domicilio, pais, provincia, numero, bloque, puerta,piso, cash, fecha_nacimiento)
              values ('$vnombre_usu', '$rpassword', '$vnombre', '$vapellidos', '$vlocalidad', '$vsexo', '$vemail','$vtelefono', 1,0, '$vdni',  '$vpostal', '$vdomicilio', '$vpais', '$vprovincia', '$vnumero','$vbloque', '$vpiso', '$vpuerta', 0, '$vcumpleanios')";
        if (mysqli_query($conexion, $altausuario)) {
            echo "Usuario $vnombre_usu dado de alta";
        } else {
            echo mysqli_error($conexion);
        }
    } else {
       echo mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>