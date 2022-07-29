<?php  

session_start();
include('includes/conexion.php');
include('includes/sesion.php');


$result=mysqli_query($con, "select * from usuarios where
correo='$text'") or die ('Error en la sesion');
$row=mysqli_fetch_array($result);
?>
