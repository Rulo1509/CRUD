<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Biblioteca</title>
		<link set="stylesheet" type="text/css" href="estilos/mireset.css"/>
		<link rel="stylesheet" type="text/css" href="estilos/examen.css"/>
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
					<li class="lista"><a href="#">mostar datos</a></li>
		
				</ul>
	</div> 
	</div>

	<div class="titulo"> <! TITULO >
	
	
				<h1>Bienvenid@ al sistema de administracion de Tepisa</h1>
				<br>
				<p>Navega entre las diferentes pestañas para realizar agregados y mostrar los datos agregados.
					</p>
	</div>
	
	
	<div class="cuerpo"> <! CUERPO >
	
	<div class="contenido"> <! CONTENIDO >
	
	
				<h1 class="primero">Iniciación</h1>

				<div class="fecha">		</div>
						<p class="si">Bienvenido a la página de administración de nuestra biblioteca. Aquí podrá acceder a una amplia variedad de herramientas y recursos que le permitirán gestionar de manera eficiente y organizada su biblioteca. <br>
						¡Empecemos a explorar las posibilidades que tenemos a nuestra disposición para hacer de nuestra biblioteca un lugar más eficiente y acogedor para todos! <a href="#" title="Nome do traballo">(leer más)</a></p>
					
						<h1 class="segundo">Resumen básico</h1>
					<div class="fecha">	Controla tu entorno</div>
						<p class="si">Podemos observar un ejemplo de como se archivarán los datos proporcionados en la las ventanas de administración.<a href="#" title="Galería completa"></a></p>
						
						<table>
							<tr class="fondo">
								<th class="naranja">Id</th>
								<th class="naranja">Título</th>
								<th class="naranja">Autor</th>
								<th class="naranja">Género</th>
								<th class="naranja">Borrar</th>

							</tr>
							<tr>
								<td>1</td>
								<td>Libro 1</td>
								<td>Autor 1</td>
								<td><a href="#">Editar</a></td>
								<td><a href="#">Borrar</a></td>
							</tr>
							<tr class="fondo" >
								<td>2</td>
								<td>Libro 2</td>
								<td>Autor 2</td>
								<td><a href="#">Editar</a></td>
								<td><a href="#">Borrar</a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Libro 3</td>
								<td>Autor 3</td>
								<td><a href="#">Editar</a></td>
								<td><a href="#">Borrar</a></td>
							</tr>
							<tr class="fondo" >
								<td>4</td>
								<td>Libro 4</td>
								<td>Autor 4</td>
								<td><a href="#">Editar</a></td>
								<td><a href="#">Borrar</a></td>
							</tr>
						</table>
										
					<h1 class="primero"></h1>
					
					

						<img alt="Material" src="imagenes/lab.jpg">
						<p class="textofoto"> <a href="#" title="Galería completa"></a>
						</p>
		</div>
								
		<div class="formulario">	<! IMAGEN DEL FORMULARIO >					
			<img alt="Succesfull" src="imagenes/login.png">
		</div>
		
		<div class="enlaces"> <! ENLACES >
					<h2>Que puedes realizar?</h2>
					<ul>
							<li class="lista"><a href="#">Añadir clientes</a></li>
							<li class="lista"><a href="#">Borrar clientes </a></li>
							<li class="lista"><a href="#">Añadir libros</a></li>
							<li class="lista"><a href="#">Borrar libros</a></li>
							<li class="lista"><a href="#">Añadir categorias</a></li>
							<li class="lista"><a href="#">Borrar categorias</a></li>
							<li class="lista"><a href="#">Mostrar los datos</a></li>
					</ul>
		</div>
	</div>
	
	<div class="pie"> <! PIE >
	
				<a href="#">&#169;IAW 2023</a>
				<a class="paredes" href="#">contacto</a>
				<a href="#">nota legal</a>
	</div>		
		</div>
	</body>
</html>

<?php
$nombre = $_POST["username"];
$contraseña = $_POST["password"];

//Creo el conector una vez creada la BBDD
	include 'constants.php';
	mysqli_report(MYSQLI_REPORT_OFF);
	$estado_de_la_conexion = "";
    $conector = @mysqli_connect('LOCALHOST', 'root', 'abc123.', NOMBRE_BBDD);
    if (mysqli_connect_errno()) {
      //echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  $estado_de_la_conexion = -1;
    }
	else
		$estado_de_la_conexion = 0;
?>