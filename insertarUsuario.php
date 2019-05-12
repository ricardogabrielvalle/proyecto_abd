<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$direccion = $_POST['direccion'];

require ("conexion.php");

$consulta = "SELECT * FROM usuario WHERE email = '$email'";

$resulta = $conexion->query($consulta);
	if($row = $resulta->fetch_assoc() > 0)
	{
		include 'navbar.php';//barra de navegación y bootstrap 
	?>
		<br>
		<div class="alert alert-dark" role="alert">
			<center><strong>Ups..!, el email que ingresates ya se encuentran en la base de datos.</strong></center>
		</div>
		<br>
		<center>
			<a href="index.php" class="btn btn-secondary btn-sm">Regresar.</a>
		</center>

		<!-- Footer -->
	    <footer class="page-footer font-small blue fixed-bottom">
	    <!-- Copyright -->
	    <div class="footer-copyright text-center py-3">
	      © 2019 Copyright:
	        <a href="index.php"> Librería San Francisco.</a>
	    </div>
	<?php 
	}
	else
	{
		if(isset($nombre) && !empty($nombre) &&
		isset($apellido) && !empty($apellido) && 
		isset($email) && !empty($email) &&
		isset($password) && !empty($password) &&
		isset($direccion) && !empty($direccion))
		{
			require ("conexion.php");

			$insertar = "INSERT INTO usuario (nombre, apellido, email, password, direccion) VALUES ('$nombre','$apellido','$email','$password','$direccion')";
			$conexion->query($insertar);

			include 'navbar.php';//barra de navegación y bootstrap 
			require ("conexion.php");

			$consulta = "SELECT * FROM usuario WHERE email = '$email'";
			$resulta = $conexion->query($consulta);
			while($row = $resulta->fetch_assoc())
			{
			?>
			<center>
			<div class="card" style="width: 35rem;">
			  <div class="card-body">
			    <h5 class="card-title" style="background-color:#E8E2E2">Genial..!, Los datos fueron ingresados correctamente, en seguida se muestra la vista de tus datos que has ingresado.</h5>
			    <label for="nombre"><strong>Nombre: </strong></label>
		        	<h5 class="card-title"><?php echo $row['nombre']; ?></h5>
		        <label for="apellido"><strong>Apellido: </strong></label>
			    	<h5 class="card-text"><?php echo $row['apellido']; ?></h5>
			    <label for="email"><strong>Email: </strong></label>
			    	<h5 class="card-title"><?php echo $row['email']; ?></h5>
			    <label for="direccion"><strong>Direccion: </strong></label>
			    	<h5 class="card-title"><?php echo $row['direccion']; ?></h5>
			    <a href="index.php" class="btn btn-secondary">Salir</a>
				<a href="" class="btn btn-secondary">Mostrar registros</a>
			  </div>
			</div>
			</center>
			<!-- Footer -->
		    <footer class="page-footer font-small blue fixed-bottom">
		    <!-- Copyright -->
		    <div class="footer-copyright text-center py-3">
		      © 2019 Copyright:
		        <a href="index.php"> Librería San Francisco.</a>
		    </div>
			<?php
			}
		}
		else
		{
			
		}
	}
    
?>
