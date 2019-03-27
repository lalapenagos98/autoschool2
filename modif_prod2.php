<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Clases autoschool</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->

<?php
	include 'conexion.php';

	$Nombre= $_POST['Nombre'];
	$Fena= $_POST['Fena'];
	$Fijo= $_POST['Fijo'];
	$Email= $_POST['Email'];
	$Direc= $_POST['Direc'];
	$RH= $_POST['RH'];
	$Nies= $_POST['Nies'];
	$Cel= $_POST['Cel'];
	$Bar= $_POST['Bar'];
	$Cat= $_POST['Cat'];
	$CM= $_POST['CM'];
	$ID= $_POST['Id'];

		$sentencia="UPDATE estudiantes SET Nom_estu='".$Nombre."', Fena_estu= '".$Fena."', Tel_estu='".$Fijo."', Email_estu= '".$Email."', Direc_estu= '".$Direc."', Rh_estu= '".$RH."', Nivesc_estu= '".$Nies."', Cel_estu= '".$Cel."', Barrio_estu= '".$Bar."', Cat_estu= '".$Cat."', Certimedico_estu= '".$CM."' WHERE Id_estu='".$ID."' ";
		mysqli_query($con,$sentencia);
	
?>

<script type="text/javascript">
	alert("Producto Modificado exitosamente");
	window.location.href='Verestudiantes.php';
</script>