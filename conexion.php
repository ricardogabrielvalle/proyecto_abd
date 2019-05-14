<?php
$servername_c = "localhost";
$username_c = "root";
$password_c = "";
$dbname_c = "proyecto_abd";
$conexion = new mysqli($servername_c, $username_c, $password_c, $dbname_c);
if($conexion->connect_error)
{
	die ("Conexion fallida ". $conexion->connect_error);
}
else
{
	echo "";
}
?>