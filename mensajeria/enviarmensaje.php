<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enviar Mensaje | LeagueOfsigns</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>



<div class="group">
  <form action="conexmensaje.php" method="POST">
  <h2><em>Enviar Mensaje</em></h2>
     
	 
	 <label for="mensaje">Mensaje<span><em>(Requerido)</em></span></label>
      <input type="text" name="mensaje" class="form-input" required/> 
	  
	  <select name ='fechahora'>
	  <?php
	 
	  ?>
	  </select>
	  
     <b>Enviar a</b> <select name ='receptor'>
         <p>
		 <?php
                 require_once '../utilidades.php';
		 $conexion = conexion();
		 $resultado = mysqli_query($conexion, "select * from usuario");
		 while($fila = mysqli_fetch_array($resultado)){
				extract($fila);
				echo "<option value='$nombre_usu'>$nombre</option>";
			}
		 ?>
		 </p>
		 </select> 
      <p>
	  
     <center> <input class="form-btn" name="submit" type="submit" value="Enviar" /></center>
    </p>
  </form>
</div>
</body>
</html>