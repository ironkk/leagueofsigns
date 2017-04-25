<?php
include_once '../utilidades.php';
session_start();
//conecto con la base de datos
$conexion = conexion();
//primero tengo que ver si el usuario está memorizado en una cookie
if (isset($_COOKIE["nombre_usu_dw"]) && isset($_COOKIE["marca_aleatoria_usuario_dw"])){
   //Tengo cookies memorizadas
   //además voy a comprobar que esas variables no estén vacías
   if ($_COOKIE["nombre_usu_dw"]!="" || $_COOKIE["marca_aleatoria_usuario_dw"]!=""){
      //Voy a ver si corresponden con algún usuario
      $ssql = "select * from usuario where nombre_usu=" . $_COOKIE["nombre_usu_dw"] . " and cookie='" . $_COOKIE["marca_aleatoria_usuario_dw"] . "' and cookie<>''";
      $rs = mysql_query($ssql);
      if (mysql_num_rows($rs)==1){
         echo "<b>Tengo un usuario correcto en una cookie</b>";
         $usuario_encontrado = mysql_fetch_object($rs);
      }
   }
}

if ($_POST){
   //es que estamos recibiendo datos por el formulario de autenticación (recibo de $_POST)

   //debería comprobar si el usuario es correcto
   $ssql = "select * from usuario where nombre_usu = '" . $_POST["nombre_usu"] . "' and pass_usu='" . $_POST["pass_usu"] . "'";
   //echo $ssql;
   $rs = mysql_query($ssql);
   if (mysql_num_rows($rs)==1){
      //TODO CORRECTO!! He detectado un usuario
      $usuario_encontrado = mysql_fetch_object($rs);
      //ahora debo de ver si el usuario quería memorizar su cuenta en este ordenador
      if ($_POST["guardar_clave"]=="1"){
         //es que pidió memorizar el usuario
         //1) creo una marca aleatoria en el registro de este usuario
         //alimentamos el generador de aleatorios
         mt_srand (time());
         //generamos un número aleatorio
         $numero_aleatorio = mt_rand(1000000,999999999);
         //2) meto la marca aleatoria en la tabla de usuario
         $ssql = "update usuario set cookie='$numero_aleatorio' where nombre_usu=" . $usuario_encontrado->nombre_usu;
         mysql_query($ssql);
         //3) ahora meto una cookie en el ordenador del usuario con el identificador del usuario y la cookie aleatoria
         setcookie("nombre_usu_dw", $usuario_encontrado->nombre_usu , time()+(60*60*24*365));
         setcookie("marca_aleatoria_usuario_dw", $numero_aleatorio, time()+(60*60*24*365));
      }
      echo "Autenticado correctamente";
      
   }else{
      echo "Fallo de autenticación!";
      echo "<p><a href='SignIn/login.php'>Volver</a>";
   }
   
}else{
    
    // FORMULARIO AQUI
}

    