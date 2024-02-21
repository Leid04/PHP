<?php

// Rutas de las imágenes que deseas fusionar
$imagen_fondo_path = "foto_chica.jpg";
$imagen_superior_path = "gafas.png";
$path = __DIR__ ."/img/";

// Cargar las imágenes
$imagen_fondo = imagecreatefromjpeg($path.$imagen_fondo_path);
$imagen_superior = imagecreatefrompng($path.$imagen_superior_path);

// Obtener dimensiones de las imágenes
$ancho_fondo = imagesx($imagen_fondo);
$alto_fondo = imagesy($imagen_fondo);
$ancho_superior = imagesx($imagen_superior);
$alto_superior = imagesy($imagen_superior);

// Superponer la imagen superior sobre la imagen de fondo
imagecopy($imagen_fondo, $imagen_superior, 130, 0, 0, 0, $ancho_superior, $alto_superior);

// Mostrar la imagen fusionada en el navegador
header('Content-Type: image/jpeg');
imagejpeg($imagen_fondo);

// Liberar la memoria de las imágenes
imagedestroy($imagen_fondo);
imagedestroy($imagen_superior);

?>