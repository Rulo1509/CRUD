
<?php
$nomBase = $_POST["nomBase"];


//METER LA CONEXIÓN A LA BASE DE DATOS biblioteca
$estado_de_la_conexion = "";
	$USER= "root";
	$HOST= "localhost";
	$PASSWORD="";
	$NOMBRE_BBDD="$nomBase";
	
    $conector = @mysqli_connect($HOST, $USER, $PASSWORD, $NOMBRE_BBDD);
    if (mysqli_connect_errno()) {
      //echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  $estado_de_la_conexion = -1;
    }
	else
		echo "me he conectado. <br>";
		$estado_de_la_conexion = 0;
		
	//INSERTAR DATOS EN LA TABLA GENEROS
	
		$sql = "SELECT * FROM generos;";

		if ($conector->multi_query($sql) === TRUE) {
		echo "Genero cargado";
		} else {
		echo "Error: " . $sql . "<br>" . $conector->error;
		}
		
		$conector->close();

?>
