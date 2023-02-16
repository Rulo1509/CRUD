<?php
$nombre = $_POST["name"];
$contraseña = $_POST["password"];

//Creo el conector una vez creada la BBDD
	include 'constants.php';
	mysqli_report(MYSQLI_REPORT_OFF);
	$estado_de_la_conexion = "";
    $conector = @mysqli_connect('LOCALHOST', 'root', 'abc123.', biblioteca);
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  $estado_de_la_conexion = -1;
    }
	else
		$estado_de_la_conexion = 0;
	
	$query="select username,password from usuarios where usuario=$nombre and contraseña=$contraseña"

	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
	
?>