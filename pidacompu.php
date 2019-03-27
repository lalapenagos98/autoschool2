


<?php 						

	$id = $_POST['id'];
	$hora = $_POST['hora'];



include("conexion.php")	;

$query2 = "SELECT est_computador FROM computadores WHERE id_computador = '$id'";
	$resultado2 = mysqli_query ($con,$query2); 

	while($res2=mysqli_fetch_array($resultado2)){
		$Desi2 = $res2['est_computador'];

	if ($Desi2 == '1') {
		
		echo "Este computador ya está reservado";


	}
	else{
 
$sql = "UPDATE computadores SET est_computador = 1 WHERE id_computador = '$id'" ; ;

mysqli_query($con,$sql);

$sql2 = "UPDATE computadores SET hor_computador = '$hora' WHERE id_computador = '$id'" ; ;

mysqli_query($con,$sql2);

	echo "El computador ha sido apartado hasta las ".$hora." ";
		}
 }

		?>
<br>
<br>

<input type="button" value="Volver" onclick="location='profesor.php'" />