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
    ?>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
        <center><h5><strong>
            Ups...! Email y/o password no validos :(
        </strong></h5>
    <a class="btn btn-outline-dark" href="index.php" role="button">Ir a inicio</a></center>
    <?php
}
?>