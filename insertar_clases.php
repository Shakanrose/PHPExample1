<?php
include("connect.php");

$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];

mysqli_query($connect, "INSERT INTO clases VALUES (DEFAULT, '$unidad', '$fecha')");

header("Location: unidad1.php?sent#contact");

?>