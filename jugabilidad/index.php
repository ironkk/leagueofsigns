<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="">
            Resultado Exacto
            <input type="number1" name="exacto1"> - <input type="number2" name="exacto2"> <br>

        </form>
        <form method="POST" action="">
            Quiniela
            //Select de los partidos

        </form>
        <form method  ="POST" action="resultados.php">

            Guardar Cambios
            <input type="submit" value="Enviar">
            <?php
            if (isset($_POST["exacto"])) {
                $exacto = $_POST["exacto"];

                //insert
                echo "<input type='submit' value=''>";
            }
            ?>

            Enviar Pronóstico

            <input type="submit" value="Enviar">
            <?php
            if (isset($_POST["exacto"])) {
                $exacto = $_POST["exacto"];

                //insert
                echo "<input type='submit' value=''>";
            }
            ?>


        </form>
    </body>
</html>