<?php
	include "conexion.php";

	$Id_estu= ($_GET['Id_estu']);

	
		$sentencia="DELETE FROM estudiantes WHERE Id_estu='".$Id_estu."' ";
		mysqli_query($con,$sentencia);
	
?>

<script type="text/javascript">
	alert("Estudiante Eliminado exitosamente");
	window.location.href='verestudiantes.php';
</script>