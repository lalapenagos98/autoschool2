<?php


		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "autoschool";

		$con = mysqli_connect($host, $user, $pw) or die ("No se pudo concetar a base de datos");
		mysqli_select_db($con, $db)or die ("no se encontro la base de datos");
		

 
?>