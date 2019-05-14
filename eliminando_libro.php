<?php
$codigo = $_POST['seleccion'];
$eliminacion = false;
require 'conexion.php';// se realiza la conexión a la BD

$sql = "DELETE FROM libros WHERE codigo = '$codigo'"; 
if ($conexion->query($sql) === TRUE) 
{
    $eliminacion = true;
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
<title></title>
<body>
	<?php require 'navbar.php' ?>
	<?php if($eliminacion == true): ?>
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