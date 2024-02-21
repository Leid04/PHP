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

// Definir los colores del arcoíris
$colores_arcoiris = array(
    imagecolorallocate($imagen, 255, 0, 0),   // Rojo
    imagecolorallocate($imagen, 255, 127, 0), // Naranja
    imagecolorallocate($imagen, 255, 255, 0), // Amarillo
    imagecolorallocate($imagen, 0, 255, 0),   // Verde
    imagecolorallocate($imagen, 0, 0, 255),   // Azul
    imagecolorallocate($imagen, 75, 0, 130),  // Índigo
    imagecolorallocate($imagen, 148, 0, 211)  // Violeta
);

// Dibujar arcos de diferentes colores para formar el arcoíris
$radio = 200;
$x_centro = 180;
$y_centro = 200;
$inicio_angulo = 180; // Ángulo inicial para empezar el arcoíris
$paso_angulo = 180 / count($colores_arcoiris); // Angulo por paso para cada color
$i=300;
$colores_arcoiris = array_reverse($colores_arcoiris);
foreach ($colores_arcoiris as $color) {
	$i-=5;
    imagearc($imagen, $x_centro, $y_centro, ($radio * 2)-$i, ($radio * 2)-$i, $inicio_angulo, 360, $color);
    //$inicio_angulo += $paso_angulo;
}

// Establecer el tipo de contenido de la imagen
header('Content-Type: image/png');

// Mostrar la imagen en el navegador
imagepng($imagen);

// Liberar la memoria ocupada por la imagen
imagedestroy($imagen);

?>
