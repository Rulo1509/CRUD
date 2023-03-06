<h2 class="center">Autores</h2></br>

		<table id="asignaturas">
		<tr>
			<th> id </th>
			<th> Nombre </th>
			<th> Apellido 1 </th>
			<th> Apellido 2 </th>
			<th> Fecha de Nacimiento </th>
			<th> Pais de Nacimiento </th>
			</tr>
		<tr>
				
	<?php
		// ASIGNATURAS
	    $qry_autores = "SELECT * FROM autores";
	    $res_autores = mysqli_query($conector, $qry_autores);

		if ($res_autores->num_rows > 0) {
			// salida dos datos de cada fila
			while($row = $res_autores->fetch_assoc()) {
			echo "<td style='padding: 15px; border: 1px solid black;'>" . $row["idAutor"] . "</td>" .
     "<td style='padding: 5px; border: 1px solid black;'>" . $row["nombre"] . "</td>" .
     "<td style='padding: 5px; border: 1px solid black;'>" . $row["apellido1"] . "</td>" . 
     "<td style='padding: 5px; border: 1px solid black;'>" . $row["apellido2"] . "</td>" .
     "<td style='padding: 5px; border: 1px solid black;'>" . $row["fecha_nacimiento"] . "</td>" .
     "<td style='padding: 5px; border: 1px solid black;'>" . $row["pais_nacimiento"] . "</td>" .
     "</tr>";
			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_autores);

		?>
		</table>