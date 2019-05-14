<?php
	require ("conexion.php");	

	$consulta = "SELECT * FROM libros ORDER BY titulo";

	if(isset($_POST['consulta'])){
		$q = $conexion->real_escape_string($_POST['consulta']);
		$consulta = "SELECT titulo, autor, isbn, sinopsis FROM libros WHERE titulo LIKE '%$q%'";
	}
	$resultado = $conexion->query($consulta);
	if($resultado->num_rows > 0)
	{
	?>
		<table class="table">
		  	<thead>
			    <tr>
			      <th scope="col">Titulo</th>
			      <th scope="col">Autor</th>
			      <th scope="col">ISBN</th>
			      <th scope="col">Sinopsis</th>
			    </tr>
		  	</thead>
		  	<tbody>
	<?php
		while($fila = $resultado->fetch_assoc())
		{
	?>		
				<tr>
					<th scope="row"><?php echo $fila['titulo']; ?></th>
			      	<td><?php echo $fila['autor']; ?></td>
			      	<td><?php echo $fila['isbn']; ?></td>
			      	<td><?php echo $fila['sinopsis']; ?></td>
				</tr>
	<?php
		}
	?>
			</tbody>
		</table>
	<?php
	}
	else
	{
	?>
		<center><h5><strong>
			Ups...! No hay registros :(
		</strong></h5></center>
	<?php
	}
	$conexion->close();
?>