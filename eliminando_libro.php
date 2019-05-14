<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];
$sinopsis = $_POST['sinopsis'];
$editorial = $_POST['editorial'];
$materia = $_POST['materia'];
$paginas = $_POST['paginas'];
$encuadernacion = $_POST['encuadernacion'];
require 'conexion.php';// se realiza la conexión a la BD

$sql = "DELETE FROM libros WHERE titulo = '$titulo'"; 

if ($conexion->query($sql) === TRUE) 
{
    $estado_insercion = true;
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conexion->error;
    $estado_insercion =  false;
}
$conexion->close();
?>
<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>
	<?php require 'navbar.php' ?>
	<?php if($estado_insercion == true): ?>
		<div class="container" align="center">
			<h1>Registro eliminado correctamente</h1>
			<a class="btn btn-outline-dark" href="eliminar_libro.php" role="button">Eliminar otro libro</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php else: ?>
		<div class="container" align="center">
			<h1>Hubo un error... </h1>
			<a class="btn btn-outline-dark" href="agregar_libro.php" role="button">Elimina de nuevo</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php endif; ?>
</body>
</html>