


<?php 						

	$id = $_POST['id'];
	$hora = $_POST['hora'];



include("conexion.php")	;

$query2 = "SELECT est_sala FROM salas_computo WHERE id_sala = '$id'";
	$resultado2 = mysqli_query ($con,$query2); 

	while($res2=mysqli_fetch_array($resultado2)){
		$Desi2 = $res2['est_sala'];

	if ($Desi2 == '1') {
		
		echo "Esta sala ya está reservada";


	}
	else{
 
$sql = "UPDATE salas_computo SET est_sala = 1 WHERE id_sala = '$id'" ; ;

mysqli_query($con,$sql);

$sql2 = "UPDATE salas_computo SET hora_sala = '$hora' WHERE id_sala = '$id'" ; ;

mysqli_query($con,$sql2);

	echo "La sala ha sido apartada hasta las ".$hora." ";
		}
 }

		?>
<br>
<br>

<input type="button" value="Volver" onclick="location='profesor.php'" />