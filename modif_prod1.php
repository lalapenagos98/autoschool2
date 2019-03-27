<?php

  include ('conexion2.php');

 $consulta=ConsultarProducto($_GET['Id_estu']); 

  function ConsultarProducto($Id_est)
  {
    $sentencia="SELECT * FROM estudiantes WHERE Id_estu='".$Id_est."' ";
    $resultado=mysql_query($sentencia) ;
    $filas=mysql_fetch_assoc($resultado);
    return [
$filas['Id_estu'],      
$filas['Nom_estu'],
$filas['Fena_estu'],
$filas['Tel_estu'],
$filas['Email_estu'],
$filas['Direc_estu'],
$filas['Nivesc_estu'],
$filas['Rh_estu'],
$filas['Cel_estu'],
$filas['Barrio_estu'],
$filas['Cat_estu'],
$filas['Certimedico_estu']
    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Estudiante</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/auto.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Estudiante</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

     <input type="hidden" id="Id" name="Id" value="<?php echo $consulta[0] ?>" ><br>

  		<label>Nombre: </label>
  		<input type="text" id="Nombre" name="Nombre" value="<?php echo $consulta[1] ?>" ><br>
  		
  		<label>Fecha de nacimiento: </label>
  		<input type="date" id="Fena" name="Fena" value="<?php echo $consulta[2] ?>"><br>
  		
      <label>Telefono fijo: </label>
      <input type="text" id="Fijo" name="Fijo" value="<?php echo $consulta[3] ?>"><br> 

      <label>Email: </label>
      <input type="Email" id="Email" name="Email" value="<?php echo $consulta[4] ?>"><br>

      <label>Dirección: </label>
      <input type="text" id="Direc" name="Direc" value="<?php echo $consulta[5] ?>"><br>

      <label>RH: </label>
      <input type="text" id="RH" name="RH" value="<?php echo $consulta[6] ?>"><br> 

      <label>Nivel de escolaridad: </label>
      <input type="text" id="Nies" name="Nies" value="<?php echo $consulta[7] ?>"><br>

      <label>Celular: </label>
      <input type="text" id="Cel" name="Cel" value="<?php echo $consulta[8] ?>"><br>     

      <label>Barrio: </label>
      <input type="text" id="Bar" name="Bar" value="<?php echo $consulta[9] ?>"><br> 

      <label>Categoría: </label>
      <input type="text" id="Cat" name="Cat" value="<?php echo $consulta[10] ?>"><br> 

      <label>Certificado medico?: </label>
      <input type="text" id="CM" name="CM" value="<?php echo $consulta[11] ?>"><br> 

  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/" id="img2">
  	</div>

</div>


</body>
</html>