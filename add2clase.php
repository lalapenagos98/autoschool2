<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->



<?php 						

$direccion= $_POST['Direc'];
$barrio= $_POST['Barrio'];
$celular= $_POST['Cel'];
$nombre= $_POST['Nombre'];

$id= $_POST['Id'];
$fecha= $_POST['Fecha'];
$hora= $_POST['Hora'];
$vehi= $_POST['Vehi'];
$profe= $_POST['Profe'];



include("conexion.php")	;
 
$sql = "INSERT INTO clases2 VALUES ('', '$profe', '$vehi', '$fecha', '$hora', '$id', '$direccion', '$barrio', '$celular', '$nombre')" ;

  mysqli_query($con,$sql);


	echo " sus datos han sido insertados!!"


?>
<br>
<br>

<div class="back">
						<a href="verclase.php">Ir a clases</a>
				</div>