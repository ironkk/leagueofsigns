<html>
    <head>
        
        <meta name="author" content="Javier Manzano">
        <meta name="generator" content="NetBeans">
        <meta name="classification" content="Football Game Leagues">
        <meta name="description" content="LeagueOfSigns - Football Game Leagues">
        <meta name="keywords" content="Football Game Leagues">
        
        <link href="registro.css" rel="stylesheet" type="text/css"/>
        <link href="strength.css" rel="stylesheet" type="text/css"/>
        
        <script src="scripts/jquery-1.12.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery.validate.min.js" type="text/javascript"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
        <script src="javascript/strength.js" type="text/javascript"></script>
        <script src="javascript/validate.js" type="text/javascript"></script>
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
        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  
    </head>
    <body>
        <div id="header">
            <img src="img/campoylogos.jpg" id="campo" alt=""/>
        </div>
        <div id="content">
        <?php
        echo "
    <div id='form'>
        <form method='post' action='registro.php' id=''>
                <div class='block'>
                    <input type='text' name='nombre' placeholder='Nombre' pattern='[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}' required />*</br>
                    <input type='text'  name='apellidos' placeholder='Apellidos' pattern='[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}' required/>*</br>
                    <input type='date' name='fecha_nacimiento' placeholder='Fecha Nacimiento' step='1'/>*</br>
                    <input type='text' name='edad' size=8 maxlength=8 placeholder='Edad' required/>*</br>
                    <input type='text' name='dni' placeholder='DNI' size=9 minlength=9 maxlength=9 required/>*</br>
                    <input type='email' name='email' placeholder='Email' pattern='^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$' required/>*</br>
                    <input type='tel' name='telefono' placeholder='Telefono' required/>*</br>
                    <div id='hm'><input type='radio' style='width:15px; height:18px;' name='sexo' value='h'/> Hombre<input type='radio' style='width:15px; height:18px;' name='sexo' value='m'/> Mujer</br></div>
                </div>
                <div class='block'>
                    <input type'text' name='pais' placeholder='Pais' required/>*</br>
                    <input type='text' name='provincia' placeholder='Provincia' size=20 maxlength=20 required/>*</br>
                    <input type='text' name='localidad' size=36 maxlength=36 placeholder='Localidad' required/>*</br>
                    <input type='text' name='postal' placeholder='Codigo Postal' size=5 maxlength=5 required/>*</br>
                    <input type='text' name='domicilio' placeholder='Domicilio' size=40 maxlength=40 required/>*</br>
                    <input type='text' name='numero' placeholder='Numero' required/>*</br>
                    <input type='text' name='bloque' placeholder='Bloque-Escalera'/></br>
                    <input type='text' name='piso' placeholder='Escalera' style='width:80px;' required/>* 
                    <input type='text' name='puerta' placeholder='Puerta' style='width:80px;' required/>*</br>
                </div>
                <div class='block'>
                    <input type='text' name='nombre_usu' placeholder='Nombre Usuario' required />*</br>
                    <input id='myPassword' type='password' name='pass_usu' placeholder='Contraseña' required>*</br>
                </div>

                    <p>Soy mayor de edad (18)* <input type='checkbox' name='mayoredad' /><br><br>
                    <div class='g-recaptcha' data-sitekey='6Ler8QwUAAAAANDNirR9aWQuFyHSdBivXL0iz953' style='width: 310px; margin: 0 auto;'></div><br/>
                    <input type ='submit' value='¡REGÍSTRATE!' name='enviar' id='btn' class='' />
            
                
                    <input type='checkbox' name='condiciones' /><a href='legal/terms-of-service-html' class='condiciones'>Acepto el aviso legal de términos y condiciones</a>
                   
                   
        </form>
    </div>
    

";

        mysqli_close($con);
        ?>
    </div>    
    <footer id="fotter">
        <img src="img/cesped.png" id="cesped" alt=""/>
            <div id="fijo">
                <div id="txtfotter">
                    <a class="btnfotter">Contacto</a>
                    <div class="space"></div>
                    <a class="btnfotter">Aviso Legal</a>
                    <div class="space"></div>
                    <a class="btnfotter">Funcionamiento</a>
                    <div class="space"></div>
                    <a class="btnfotter">Política de privacidad</a>
                    <div class="space"></div>
                    <a class="btnfotter">FAQ</a>
                     <img src="img/logosfooter.png" alt="" style="float: right; margin-right: 3px;"/>
                </div>
                <a class="copyright">© 2017 <strong>LEAGUE OF SIGNS</strong>. All rights reserved </a>
            </div>
        </footer>
        
        
    </body>
</html>
