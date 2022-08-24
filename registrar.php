<?php
$usuario = $_POST['usuario'];
$password = password_hash($_POST['clave'], PASSWORD_DEFAULT, array('cost'=> 4));
$email = $_POST['correo'];

include('connect.php');

mysqli_query($connect, "INSERT INTO usuarios VALUES('$usuario','$password','$email')");

header("Location:unidad8.php?ok");
?>