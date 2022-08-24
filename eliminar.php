<?php
include('recursos.php');

$carrito->eliminarCompra($_GET['codigo']);

header('Location: unidad7.php');
?>