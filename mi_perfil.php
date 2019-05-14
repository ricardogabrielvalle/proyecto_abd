<?php
include "navbar.php";
require "conexion.php";
$sql = "SELECT * FROM usuario WHERE email='$email'";
$resultado = $conexion->query("$sql");
while($row = $resultado->fetch_assoc())
{
	$nombre = $row["nombre"];
	$apellido = $row["apellido"];
	$direccion = $row["direccion"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi perfil</title>
</head>
<body>
	<div class="container">
		<h1>Mis datos</h1>
		<form action="index.php">
			<div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" readonly="true" class="form-control" id="nombre" value="<?php echo $nombre; ?>">
		  	</div>
		  	<div class="form-group">
			    <label for="apellido">Apellido</label>
			    <input type="text" readonly="true" class="form-control" id="apellido" value="<?php echo $apellido; ?>">
		  	</div>
		  	<div class="form-group">
			    <label for="direccion">Dirección</label>
			    <input type="text" readonly="true" class="form-control" id="direccion" value="<?php echo $direccion; ?>">
		  	</div>
		  	<div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" readonly="true" class="form-control" id="email" value="<?php echo $email; ?>">
		  	</div>
		  	<div class="container" align="right">
		  		<button type="submit" class="btn btn-primary">Ir al inicio</button>
		  	</div>
		</form>
	</div>

</body>
</html>