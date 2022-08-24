<?php
$usuario = $_POST['usuario'];
$password = $_POST['clave'];

include('connect.php');

$consulta = mysqli_query($connect,"SELECT clave FROM usuarios WHERE usuario = '$usuario'");

$code = mysqli_fetch_assoc($consulta);

$verify = password_verify($password, $code['clave']);
	if ($verify) {
		header("Location:unidad8.php?verificado");
	} else {
		header("Location:unidad8.php?error");
	}	

?>