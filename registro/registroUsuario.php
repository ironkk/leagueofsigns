<html>
    <head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="strength.js"></script>
        <script type="text/javascript" src="js.js"></script>
        <script src="../jquery-1.12.1.js" type="text/javascript"></script>
        <script src="../registro/jquery/jquery.validate.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../registro/jquery/strength.js"></script>
        <script src="validarUsuario.js" type="text/javascript"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
            $(document).ready(function ($) {

                $('#myPassword').strength({
                    strengthClass: 'strength',
                    strengthMeterClass: 'strength_meter',
                    strengthButtonClass: 'button_strength',
                    strengthButtonText: 'Mostrar Contraseña',
                    strengthButtonTextToggle: 'Ocultar Contraseña'
                });

            });

        </script>
        <link href='../css/strength.css' rel='stylesheet'>
        <meta name="author" content="Javier Manzano">
        <meta name="generator" content="NetBeans">
        <meta name="classification" content="Football Game Leagues">
        <meta name="description" content="LeagueOfSigns - Football Game Leagues">
        <meta name="keywords" content="Football Game Leagues">
    </head>
    <body>
        <?php
        echo "
<div id=''>
<form method='post' action='registro.php' id=''>
    <p>Nombre usuario*:<input type='text' name='nombre_usu' required /><br/>
    <p>Password*: <input id='myPassword' type='password' name='pass_usu' required><br>
    <p>Nombre*:<input type='text' name='nombre' pattern='[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}' required /><br/>
    <p>Apellidos*:<input type='text'  name='apellidos'pattern='[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}' required/><br/>
    <p>Fecha nacimiento*: <input type='date' name='fecha_nacimiento' step='1'/>
    <p>Edad*:<input type='number' name='edad' size=8 maxlength=8 required/>  <br/>
    <p>DNI*: <input type='text' name='dni' size=9 minlength=9 maxlength=9 required/><br>
    <p>Email*:<input type='email' name='email' pattern='^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$' required/><br/>
    <p>Teléfono*:<input type='tel' name='telefono' required/><br/>
    <p>Sexo*:</p><div id='sexo'><input type='radio' name='sexo' value='h'/> Hombre <input type='radio'  name='sexo' value='m'/> Mujer </div></br>
    <p>País*: <input type'text' name='pais' required/><br>
    <p>Provincia*: <input type='text' NAME='provincia' size=20 maxlength=20 required/><br>
    <p>Localidad*: <input type'text' name='localidad' size=36 maxlength=36 required/><br>
    <p>Código Postal*: <input type'text' name='postal' size=5 maxlength=5 required/><br>
    <p>Domicilio*: <input type='text' name='domicilio' size=48 maxlength=48 required/>
    <p>Número*: <input type='number' name='numero' required/>
    <p>Bloque-Escalera: <input type='number' name='bloque'/>
    <p>Piso*: <input type='number' name='piso' required/>
    <p>Puerta*: <input type='number' name='puerta' required/><br><br>
    <p>Soy mayor de edad (18)*: <input type='checkbox' name='mayoredad' /><br><br>
    <!--CAPTCHA VERIFICACION DE QUE NO ERES UN ROBOOT
    <div class='g-recaptcha' data-sitekey='6Ler8QwUAAAAANDNirR9aWQuFyHSdBivXL0iz953'></div><br/> -->
    <input type ='submit' value='¡Regístrate!' name='enviar' class='' />
    </form>
    </div>
 <div>
        Registrándote, <a href='legal/terms-of-service-html'>Aceptas el aviso legal de términos y condiciones.</a>
        </div>

";

        mysqli_close($con);
        ?>
    </body>
</html>