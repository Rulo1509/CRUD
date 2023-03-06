<h2 class="center">Libros</h2></br>

		<table id="asignaturas">
		<tr>
			<th> id </th>
			<th> Titulo </th>
			<th> idAutor </th>
			<th> idGenero </th>
			</tr>
		<tr>
				
	<?php
		// ASIGNATURAS
	    $qry_libros = "SELECT * FROM libros";
	    $res_libros = mysqli_query($conector, $qry_libros);

		if ($res_libros->num_rows > 0) {
			// salida dos datos de cada fila
			while($row = $res_libros->fetch_assoc()) {
echo "<tr>" .
     "<td style='padding: 15px; border: 1px solid black;'>" . $row["idLibro"] . "</td>" .
     "<td style='padding: 5px; border: 1px solid black;'>" . $row["titulo"] . "</td>" .
     "<td style='padding: 5px; border: 1px solid black;'>" . $row["idAutor"] . "</td>" . 
     "<td style='padding: 5px; border: 1px solid black;'>" . $row["idGenero"] . "</td>" .
     "</tr>";

			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_libros);

		?>
		</table>