<?php 
$codigo = $_POST["codigo"];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];
$sinopsis = $_POST['sinopsis'];
$editorial = $_POST['editorial'];
$materia = $_POST['materia'];
$paginas = $_POST['paginas'];
$encuadernacion = $_POST['encuadernacion'];

require "conexion.php";

$error = false;
$conexion->autocommit(false);
//inician las transacciones
$sql = "UPDATE libros SET titulo='$titulo' WHERE codigo=$codigo";
if ($conexion->query($sql) !== TRUE) {
    $error = true;
}
$sql = "UPDATE libros SET autor='$autor' WHERE codigo=$codigo";
if ($conexion->query($sql) !== TRUE) {
    $error = true;
}
$sql = "UPDATE libros SET isbn='$isbn' WHERE codigo=$codigo";
if ($conexion->query($sql) !== TRUE) {
    $error = true;
}
$sql = "UPDATE libros SET sinopsis='$sinopsis' WHERE codigo=$codigo";
if ($conexion->query($sql) !== TRUE) {
    $error = true;
}
$sql = "UPDATE libros SET editorial='$editorial' WHERE codigo=$codigo";
if ($conexion->query($sql) !== TRUE) {
    $error = true;
}
$sql = "UPDATE libros SET materia='$materia' WHERE codigo=$codigo";
if ($conexion->query($sql) !== TRUE) {
    $error = true;
}
$sql = "UPDATE libros SET paginas='$paginas' WHERE codigo=$codigo";
if ($conexion->query($sql) !== TRUE) {
    $error = true;
}
$sql = "UPDATE libros SET encuadernacion='$encuadernacion' WHERE codigo=$codigo";
if ($conexion->query($sql) !== TRUE) {
    $error = true;
}


//Comprobamos si hubo errores antes de hacer commit
if($error == false)
{
	$conexion->commit();
}
else
{
	$conexion->rollback();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'navbar.php' ?>
	<?php if($error == false): ?>
		<div class="container" align="center">
			<h1>Registro actualizado correctamente</h1>
			<a class="btn btn-outline-dark" href="modificar_libros.php" role="button">Modificar otro libro</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php else: ?>
		<div class="container" align="center">
			<h1>El registro no se actualizó correctamente</h1>
			<a class="btn btn-outline-dark" href="modificar_libros.php" role="button">Intentar de nuevo</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php endif; ?>
</body>
</html>