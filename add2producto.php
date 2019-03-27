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


$id= $_POST['Id'];
$nombre= $_POST['Nombre'];
$fecha= $_POST['Fena'];
$direccion= $_POST['Direccion'];
$fijo= $_POST['Fijo'];
$email= $_POST['Email'];
$nivel= $_POST['Nivel'];
$rh= $_POST['Rh'];
$celular= $_POST['Celular'];
$barrio= $_POST['Barrio'];
$categoria= $_POST['Categoria'];
$certificado= $_POST['Certificado'];


include("conexion.php")	;
 
$sql = "INSERT INTO estudiantes VALUES ('$id', '$nombre', '$fecha', '$fijo', '$email', '$direccion', '$nivel', '$rh', '$celular', '$barrio', '$categoria', '$certificado')" ;

mysqli_query($con,$sql);


	echo " sus datos han sido insertados!!"


?>
<br>
<br>

<div class="back">
						<a href="Verestudiantes.php">Ir a estudiantes</a>
				</div>