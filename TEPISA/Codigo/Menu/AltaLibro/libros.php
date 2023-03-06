
<?php
//RECIBE LOS DATOS DEL FORMULARIO de AltaGenerosl, está en el fichero index4.html
$titulo = $_POST["titulo"];
$idAutor = $_POST["idAutor"];
$idGenero = $_POST["idGenero"];


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
		
	//INSERTAR DATOS EN LA TABLA GENEROS
		
		$sql = "INSERT INTO libros (titulo, idAutor, idGenero) VALUES ('$titulo', '$idAutor', '$idGenero')";
		
		if ($conector->multi_query($sql) === TRUE) {
		echo "Libro cargado";
		} else {
		echo "Error: " . $sql . "<br>" . $conector->error;
		}
		$conector->close();
?>

