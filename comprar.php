<?php
$tarjeta = $_POST['tarjeta'];
$cvc = $_POST['cvc'];
$fecha = $_POST['fecha'];
$codigo = $_POST['codigo'];
$estado_insercion = false;

require 'conexion.php';// se realiza la conexión a la BD
$sql = "INSERT INTO compra (tarjeta, cvc, fecha) VALUES ('$tarjeta', '$cvc', '$fecha')";
if ($conexion->query($sql) === TRUE) 
{
    $estado_insercion = true;
    $eliminacion = false;
    $sql = "DELETE FROM favoritos WHERE codigo_libro = '$codigo'"; 
	if ($conexion->query($sql) === TRUE) 
	{
	    $eliminacion = true;
	} 
	else 
	{
	    echo "Error: " . $sql . "<br>" . $conexion->error;
	    $estado_insercion =  false;
	}
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
			<h1>Compra exitosa :)</h1>
			<a class="btn btn-outline-dark" href="mis_favoritos.php" role="button">Regresar a favoritos</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php else: ?>
		<div class="container" align="center">
			<h1>Hubo un error... :(</h1>
			<a class="btn btn-outline-dark" href="mis_favoritos.php" role="button">Regresar a favoritos</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php endif; ?>
</body>
</html>
?>