<?php
$conexion = new mysqli('localhost', 'root', '','proyecto_abd');
if($conexion->connect_error)
{
	die ("Conexion fallida ". $conexion->connect_error);
}
else
{
	echo "";
}
?>