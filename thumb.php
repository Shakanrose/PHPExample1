<?php  
    $src = 'imagenes/unidad4.jpg';
    $base = imagecreatefromjpeg($src);

    $img_ancho = imagesx($base);
    $img_alto = imagesy($base);

    $ancho_mini = 150;
    $alto_mini = 150;

    $img_mini = imagecreatetruecolor($ancho_mini, $alto_mini);

    imagecopyresized($img_mini, $base, 0, 0, 0, 0, $ancho_mini, $alto_mini, $img_ancho, $img_alto);

    imagejpeg($img_mini, 'imagenes/img_mini.jpg'); 
?>