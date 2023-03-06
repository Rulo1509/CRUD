
<?php
//RECIBE LOS DATOS DEL FORMULARIO de AltaGenerosl, está en el fichero index4.html
 $nomGenero = $_POST["nomGenero"];

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
		echo "me he conectado. <br>";
		$estado_de_la_conexion = 0; 
		
		
	//INSERTAR DATOS EN LA TABLA GENEROS CON PREPARE STATEMENT
	
	$stmt = $conector->prepare("INSERT INTO generos (idGenero, nombreGenero) VALUES (?, ?)");
	$stmt->bind_param("is", $idGenero, $nomGenero);
	
	//Valores para los parámetros
	$idGenero = "";
	$stmt->execute();
	
	echo "Nuevo género añadido";
	
	$stmt->close();
	$conector->close();
?>

