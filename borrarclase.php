<?php
	include "conexion.php";

	$Id_clase= ($_GET['Id_clase']);

	
		$sentencia="DELETE FROM clases2 WHERE Id_clase='".$Id_clase."' ";
		mysqli_query($con,$sentencia);
	
?>

<script type="text/javascript">
	alert("Clase Eliminada exitosamente");
	window.location.href='verclase.php';
</script>