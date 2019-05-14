<?php
session_start();
$inicio = false;
$email = $_POST['email'];
$password = $_POST['password'];

require ("conexion.php");

$consulta = "SELECT email, password FROM admin WHERE email = '$email' AND password = '$password'";
$resulta = $conexion->query($consulta);
if ($resulta->num_rows > 0) 
{
	$_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);
    $_SESSION['administrador'] = true;
    $_SESSION['usuario'] = false;
    $inicio = true;
    header('Location: index.php');
}
$consulta = "SELECT email, password FROM usuario WHERE email = '$email' AND password = '$password'";
$resulta = $conexion->query($consulta);
if ($resulta->num_rows > 0) 
{
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);
    $_SESSION['administrador'] = false;
    $_SESSION['usuario'] = true;
    $inicio = true;
    header('Location: index.php');
}
if($inicio == false)
{
    $conexion->close();
    echo "error de inicio de sesion";
    header('Location: ');
}
?>