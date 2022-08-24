<?php
session_start();
header("Content-Type:image/jpeg");
$imagen = imagecreate(70, 35);
$colorf = imagecolorallocate($imagen, 152, 170, 181);
$colort = imagecolorallocate($imagen, 20, 59, 82);
imagestring($imagen, 7, 14, 8, $_SESSION['captcha'], $colort);
imagejpeg($imagen);
?>