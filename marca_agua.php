<?php 
$original = 'imagenes/try3.jpg';
$marcaw = 'imagenes/marca.png';

$img_original = imagecreatefromjpeg($original);
$img_mw = imagecreatefrompng($marcaw);

imagecopy($img_original, $img_mw, 85, 200, 0, 0, imagesx($img_mw), imagesy($img_mw));

header("Content-type: image/jepg");
imagejpeg($img_original);
?>