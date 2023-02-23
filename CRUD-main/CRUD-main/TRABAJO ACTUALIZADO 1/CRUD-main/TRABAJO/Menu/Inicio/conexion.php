<?php
$nombre = $_POST["username"];
$contraseña = $_POST["password"];


//Creo el conector una vez creada la BBDD
    if ($nombre=="admin" and $contraseña=="abc123.") {
      header('Location: ../../Menu/Inicio/index.html');
    }
	else
		header ('Location: ../../Menu/Error/error.html');
	
?>