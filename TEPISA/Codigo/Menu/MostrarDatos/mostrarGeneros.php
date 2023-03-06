<h2 class="center">Generos</h2></br>

		<table id="asignaturas">
		<tr>
			<th> id </th>
			<th> Nombre </th>
			</tr>
		<tr>
				
	<?php
		// ASIGNATURAS
	    $qry_generos = "SELECT * FROM generos";
	    $res_generos = mysqli_query($conector, $qry_generos);

		if ($res_generos->num_rows > 0) {
			// salida dos datos de cada fila
			while($row = $res_generos->fetch_assoc()) {
echo "<tr>" .
     "<td style='padding: 15px; border: 1px solid black;'>" . $row["idGenero"] . "</td>" .
     "<td style='padding: 10px; border: 1px solid black;'>" . $row["nombreGenero"] . "</td>" .
     "</tr>";
			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_generos);

		?>
		</table>