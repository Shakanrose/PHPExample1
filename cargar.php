<?php
session_start();
if ($_POST['v_captcha']==$_SESSION['captcha']) {

$nameform = $_POST['nombre'];
$lastnform = $_POST['apellido'];
$emailform = $_POST['correo'];
$msjform = $_POST['comment'];

include('connect.php');

mysqli_query($connect, "INSERT INTO consultas VALUES('$nameform','$lastnform','$emailform', '$msjform')");

mysqli_close($connect);

header("Location:unidad5.php?ok");
} else {
   header("Location:unidad5.php?error");
}
?>