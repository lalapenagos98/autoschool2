<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Autoschool</title>
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
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.html">Clases</a></h1>
							</div>

						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<div class="user-name">
													<p>ADMINISTRADOR</p>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="signin.html"><i class="fa fa-sign-out"></i> Salir</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->

<?php  

$fecha = $_POST['Id'];

include("conexion.php")	;
 
$sql = "SELECT * FROM clases2" ;

$result = mysqli_query($con,$sql);



?>

<table class="table table-striped">
  	
		<thead>
		<tr>

			<th>ID CLASE</th>
			<th>ALUMNO</th>
			<th>PROFESOR</th>
			<th>VEHICULO</th>
			<th>TELEFONO</th>
			<th>DIRECCION</th>
			<th>BARRIO</th>
			<th>FECHA</th>
			<th>HORA</th>

			<th> <a href="Buscarpor.php"> <button type="button" class="btn btn-info">Buscar por fecha</button> </a> </th>

		</tr>
		</thead>

  		<?php
      include ("conexion.php");
      $sentencia="SELECT * FROM clases2 WHERE Fecha_clase = '$fecha' ";
      $resultado=mysqli_query($con,$sentencia);
      while($filas=mysqli_fetch_assoc($resultado))
      {
        echo "<tr>";
        	echo "<td>"; echo $filas['Id_clase']; echo "</td>";
          echo "<td>"; echo $filas['Nom_estu']; echo "</td>";
          echo "<td>"; echo $filas['Profe_clase']; echo "</td>";
          echo "<td>"; echo $filas['Vehi_clase']; echo "</td>";
          echo "<td>"; echo $filas['Cel_estu']; echo "</td>";
          echo "<td>"; echo $filas['Direc_estu']; echo "</td>";
          echo "<td>"; echo $filas['Barrio_estu']; echo "</td>";
          echo "<td>"; echo $filas['Fecha_clase']; echo "</td>";
          echo "<td>"; echo $filas['Hora_clase']; echo "</td>";

          echo "<td> <a href='borrarclase.php?Id_clase=".$filas['Id_clase']."''><button type='button' style='width:85px; height:30px' class='btn btn-danger'>Borrar</button></a> </td>";
        echo "</tr>";
      }

      ?>
</table>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Inicio</span><div class="clearfix"></div></a></li>
										
										
										 <li href="http://www.cuandoenelmundo.com/calendario/colombia/2018" target="_blank"d="menu-academico" ><a href="Estudiantes.php"><i class="fa fa-envelope nav_icon"></i><span>Estudiantes</span><div class="clearfix"></div></a></li>
									<li><a href="Clases.php"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Clases</span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="http://www.cuandoenelmundo.com/calendario/colombia/2018" target="_blank"><i class="fa fa-bar-chart"></i><span>Calendario</span><div class="clearfix"></div></a></li>

								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>