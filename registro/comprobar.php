<?php

function cNombreUsuario($vnombre_usu) {
    include_once('../utilidades.php');

    $conexion = conexion();

    $query = "select nombre_usu from usuario where nombre_usu = '$vnombre_usu'";
    $result = mysqli_query($conexion, $query);

    if ($result->num_rows >= 1) {
        $busuario = false;
        $pantalla = "Nombre de Usuario existente";
        include('../error/error.php');
    } else if (!preg_match("/^[a-zA-Z]+$/", $name)) {
        $busuario = false;
        $pantalla = "El Nombre de Usuario no contiene carácteros permitidos.<br>";
    } else {
        $busuario = true;
        if (strlen($vnombre_usu) < 15) {
            $busuario = true;
        } else {
            $busuario = false;
            $pantalla = "El Nombre de Usuario no cumple con los requisitos de longitud.</br>";
            include('../error/error.php');
        }
        // palabras ofensivas
    }

    return $busuario; // devolvemos el boolean si las comprobaciones son correctas o no
}

function cLongitudPassword($vpass_usu) {
    if (strlen($vpass_usu) < 30 && strlen($vpass_usu) > 4){
        $bpassword = true;
    }  else if(!preg_match("/^[0-9a-zA-Z]+$/", $vpass_usu)) {
        $bpassword = false;
        $pantalla = "El password no contiene carácteros permitidos.<br>";
    }
    else {
        $bpassword = false;
        $pantalla = "El Password no cumple con los requisitos de longitud.</br>";
        include('../error/error.php');
    }

    return $bpassword;
}

function cEmail($vemail) {
    include_once('../utilidades.php');

    $conexion = conexion();
    $query = "select email from usuario where email = '$vemail'";
    $resultado = mysqli_query($conexion, $query);
    if ($resultado->num_rows >= 1) {
        $bemail = false;
        $pantalla = "¡Este email ya está registrado! </br>";
        include('../error/error.php');
    } else if(!filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) {
        $bemail = false;
        $pantalla = "Este email no es válido.<br>";
    } else {
        $bemail = true;
    }

    return $bemail;
}

function cDni($vdni) {
    include_once('../utilidades.php');

    $conexion = conexion();

    $query = "select dni from usuario where dni = '$vdni'";
    $result = mysqli_query($conexion, $query);

    if ($result->num_rows >= 1) {
        $bdni = false;
        $pantalla = "DNI existente";
        include('../error/error.php');
    } else {
        $bdni = true;
    }

    return $bdni;
}

function cNumeroTelefono($vtelefono) {
    if (!ctype_digit($vtelefono)) {
        if (empty($vtelefono)) {
            $btelefono = true;
        } else {
            $btelefono = false;
            $pantalla = "¡El teléfono no puede contener carácteres que no sean númericos!.";
            include('../error/error.php');
        }
    } else
        $btelefono = true;

    return $btelefono;
}
