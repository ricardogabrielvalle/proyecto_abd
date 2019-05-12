<?php
session_start();
$email = $_GET['email'];
unset ($_SESSION[$email]);
session_destroy();
header('Location: index.php');
?>