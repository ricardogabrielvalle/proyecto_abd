<?php 
require "conexion.php";
include "navbar.php";
$codigo = $_POST["codigo"];
$sql = "INSERT INTO favoritos (email, codigo_libro) VALUES ('$email', '$codigo')";
$insercion = false;
if ($conexion->query($sql) === TRUE) 
{
    $insercion = true;
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conexion->error;
    $insercion =  false;
}
$conexion->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Favoritos</title>
</head>
<body>
	<?php if($insercion == true): ?>
		<div class="container" align="center">
			<h1>Favorito cargado correctamente</h1>
			<a class="btn btn-outline-dark" href="mostrar_libros.php" role="button">Seguir explorando libros</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php else: ?>
		<div class="container" align="center">
			<h1>Hubo un error... </h1>
			<a class="btn btn-outline-dark" href="mostrar_libros.php" role="button">Intentar de nuevo</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php endif; ?>

</body>
</html>