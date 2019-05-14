<?php
//recibimos los valores del formulario
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];
$sinopsis = $_POST['sinopsis'];
$editorial = $_POST['editorial'];
$materia = $_POST['materia'];
$paginas = $_POST['paginas'];
$encuadernacion = $_POST['encuadernacion'];
$precio = $_POST['precio'];
$estado_insercion = false;
/*
echo "$titulo \n";
echo "$autor \n";
echo "$isbn \n";
echo "$sinopsis \n";
echo "$editorial \n";
echo "$materia \n";
echo "$paginas \n";
echo "$encuadernacion \n";
*/
require 'conexion.php';// se realiza la conexión a la BD
$sql = "INSERT INTO libros (titulo, autor, isbn, sinopsis, editorial, materia, paginas, encuadernacion, precio) VALUES 
('$titulo', '$autor', '$isbn', '$sinopsis', '$editorial', '$materia', '$paginas', '$encuadernacion', '$precio')";
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
			<h1>Registro cargado correctamente</h1>
			<a class="btn btn-outline-dark" href="agregar_libro.php" role="button">Cargar otro libro</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php else: ?>
		<div class="container" align="center">
			<h1>Hubo un error... </h1>
			<a class="btn btn-outline-dark" href="agregar_libro.php" role="button">Intentar de nuevo</a>
			<a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a>
		</div>
	<?php endif; ?>
</body>
</html>