<?php


// Iniciamos la sesion
session_start();


// Comprobamos si la variable de sesión SESS_MEMBER_ID está presente o no

if (!isset($_SESSION['correo']) || (trim($_SESSION['correo']) == '')) {
    header("location: entrar.php");
    exit();
}
$correo=$_SESSION['correo'];
?>


