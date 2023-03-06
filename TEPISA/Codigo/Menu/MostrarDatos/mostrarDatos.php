<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Resultados</title>
		<link rel="stylesheet" type="text/css" href="estilos/mireset.css"/>
		<link rel="stylesheet" type="text/css" href="css/examen6.css"/>
	</head> 
	<body>
	<div class="global"> <! TODA LA PAGINA >
	<div class="encabezados"> <! TODO LO DE ARRIBA>
	<div class="cabecera"> <! CABECERA >
	
	
				<p class="primero"><img src="imagenes/logo2web.png"/>   por RAP</p>
				<p class="segundo"><img class="movil" src="imagenes/movil.png"/>900 11 22 33</p>
			
	</div>
	<div class="menu">  <! MENU >
				<ul>
					<li class="lista"><a href="../../Menu/Inicio/index.html">inicio</a></li>
					<li class="lista"><a href="../../Menu/AltaLibro/index2.html">alta libro</a></li>
					<li class="lista"><a href="../../Menu/AltaAutor/index3.html">alta autor</a></li>
					<li class="lista"><a href="../../Menu/AltaGenero/index4.html">alta género</a></li>
					<li class="lista"><a href="../../Menu/MostrarDatos/mostrarDatos.php">mostrar datos</a></li>
		
				</ul>
	</div>
<div class="cuerpo"> <! CUERPO >
<div class="contenido"> <! CONTENIDO >	
<div class="segundo">

	<?php
	//METER LA CONEXIÓN A LA BASE DE DATOS biblioteca
	$estado_de_la_conexion = "";
	$USER= "root";
	$HOST= "localhost";
	$PASSWORD="";
	$NOMBRE_BBDD="biblioteca";
	
    $conector = @mysqli_connect($HOST, $USER, $PASSWORD, $NOMBRE_BBDD);
    if (mysqli_connect_errno()) {
      //echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  $estado_de_la_conexion = -1;
    }
	else
		$estado_de_la_conexion = 0;
			
		
	if ($estado_de_la_conexion == 0){ 	
		echo '<h1 class="center">Datos por categoría</h1></br>';
		include_once('mostrarAutores.php'); 
		include_once('mostrarLibros.php'); 
		include_once('mostrarGeneros.php'); 
	}
	else{
		echo "No se pudo conectar a la base de datos para consultar datos";
	}
	
	 ?>

	</div>
</div>	
</div>
    </body>
</html>