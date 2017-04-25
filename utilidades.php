<?php

function cifrar($vpass_usu){
    $variable = 'g';
    $hashing = hash('mnz27',$vpass_usu,$variable);
    return $hashing;
}

function conexion(){
    $conexion = mysqli_connect("localhost","root","root","leagueofsigns") or die("cannot connect");
    return $conexion;
}

function cerrarSesion(){
    session_destroy;
}

function desconectar ($conexion){
    mysqli_close($conexion);
}


// FUNCION PARA CONTROLAR CUANTOS USUARIOS ACTIVO HAY EN LA PAGINA

//  PARA ACCEDER AL TOTAL DE USUARIOS: $active_users = usuarios_activos(); 
function allUsuarios(){
    $conexion = conexion();
    
    $query = "select * from usuario";
    
    $resultado = mysqli_query($conexion, $query);
    
    desconectar($conexion);
    
    return $resultado;
    
    
}

function usuarios_activos()
{
   //permitimos el uso de la variable portadora del numero ip en nuestra funcion
   global $REMOTE_ADDR;

   //asignamos un nombre memotecnico a la variable
   $ip = $REMOTE_ADDR;
   //definimos el momento actual
   $ahora = time();

   //conectamos a la base de datos
   $conexion = conexion();

   //actualizamos la tabla
   //borrando los registros de las ip inactivas (24 minutos)
   $limite = $ahora-24*60;
   $query = "delete from control_ip where fecha < ".$limite;
   mysql_query($query);

   //miramos si el ip del visitante existe en nuestra tabla
   $query = "select ip, fecha from control_ip where ip = '$ip'";
   $resultado = mysql_query($query);

   //si existe actualizamos el campo fecha
   if (mysql_num_rows($resultado) != 0) $ssql = "update control_ip set fecha = ".$ahora." where ip = '$ip'";
   //si no existe insertamos el registro correspondiente a la nueva sesion
   else $query = "insert into control_ip (ip, fecha) values ('$ip', $ahora)";

   //ejecutamos ll query
   mysql_query($query);

   //calculamos el numero de sesiones
   $query = "select ip from control_ip";
   $resultado = mysql_query($query);
   $usuarios = mysql_num_rows($resultado);

   //liberamos memoria
   mysql_free_result($resultado);

   //devolvemos el resultado
   return $usuarios;
}
?>