<?php
include_once '../utilidades.php';
function generarLinkTemporal($nombre_usu) {
    // Se genera una cadena para validar el cambio de contraseña
    $cadena = $nombre_usu . rand(1, 9999999) . date('Y-m-d');
    $token = sha1($cadena);

    $conexion = conexion();
    // Se inserta el registro en la tabla tblreseteopass
    $sql = "INSERT INTO tblreseteopass (nombre_usu, token, creado) VALUES('$nombre_usu','$token',NOW());";
    $resultado = $conexion->query($sql);
    if ($resultado) {
        // Se devuelve el link que se enviara al usuario
        $enlace = $_SERVER["SERVER_NAME"] . '/pass/restablecer.php?idusuario=' . sha1($nombre_usu) . '&token=' . $token;
        return $enlace;
    } else
        return FALSE;
}

function enviarEmail($email, $link) {
    $mensaje = '<html>
     <head>
        <title>Restablece tu contraseña</title>
     </head>
     <body>
       <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
       <p>Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>
       <p>
         <strong>Enlace para restablecer tu contraseña</strong><br>
         <a href="' . $link . '"> Restablecer contraseña </a>
       </p>
     </body>
    </html>';

    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'From: Codedrinks <mimail@codedrinks.com>' . "\r\n";
    // Se envia el correo al usuario
    mail($email, "Recuperar contraseña", $mensaje, $cabeceras);
}


$email = $_POST['email'];
 
$respuesta = new stdClass();
 
if( $email != "" ){
   $conexion = conexion();
   $sql = " SELECT * FROM usuarios WHERE email = '$email' ";
   $resultado = $conexion->query($sql);
   if($resultado->num_rows > 0){
      $usuario = $resultado->fetch_assoc();
      $linkTemporal = generarLinkTemporal( $usuario['id'], $usuario['nombre_usu'] );
      if($linkTemporal){
        enviarEmail( $email, $linkTemporal );
        $respuesta->mensaje = '<div class="alert alert-info"> Un correo ha sido enviado a su cuenta de email con las instrucciones para restablecer la contraseña </div>';
      }
   }
   else
      $respuesta->mensaje = '<div class="alert alert-warning"> No existe una cuenta asociada a ese correo. </div>';
}
else
   $respuesta->mensaje= "Debes introducir el email de la cuenta";
 echo json_encode( $respuesta );
