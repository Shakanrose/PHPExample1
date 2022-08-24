<?php
include ("Clases/usuarios.php");

if($_POST){
$name = $_POST['nombre'];
$lstname = $_POST['apellido'];
$age = $_POST['edad'];

$try = new Usuarios($name,$lstname,$age);
$try->imprime_caracteristicas();
}

?>
