<?php

// Crear una imagen en blanco
$imagen = imagecreatetruecolor(400, 200);

// Establecer color de fondo y de texto
$color_fondo = imagecolorallocate($imagen, 255, 255, 255); // blanco
$color_texto = imagecolorallocate($imagen, 254, 0, 255); //fucsia

// Rellenar el fondo de la imagen con color blanco
imagefilledrectangle($imagen, 0, 0, 399, 199, $color_fondo);

// Especificar la ruta de la fuente TrueType
$ruta_fuente = './fonts/Disney.ttf'; // Cambia esto por la ruta de tu fuente TTF

// Tamaño de la fuente
$tamanio_fuente = 60;

// Escribir el texto en la imagen con la nueva fuente
$texto = "Hola mundo!";
imagettftext($imagen, $tamanio_fuente, 0, 50, 100, $color_texto, $ruta_fuente, $texto);

// Establecer el tipo de contenido de la imagen
header('Content-Type: image/png');

// Mostrar la imagen en el navegador
imagepng($imagen);

// Liberar la memoria ocupada por la imagen
imagedestroy($imagen);

?>
