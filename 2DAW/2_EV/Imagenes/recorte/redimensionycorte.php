<?php

// Definir el ancho y alto para redimensionar la imagen
define('NUEVO_ANCHO', 300);
define('NUEVO_ALTO', 300);
define('DIRECTORIO_RECORTES', "recortes2");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagen"])) {
    // Directorio donde se guardarán las imágenes recortadas
	if (!file_exists(DIRECTORIO_RECORTES))
		mkdir (DIRECTORIO_RECORTES);

    // Nombre temporal del archivo subido
    $archivo_temporal = $_FILES["imagen"]["tmp_name"];

    // Crear una imagen a partir del archivo subido
    $imagen = imagecreatefromjpeg($archivo_temporal);

    // Obtener el ancho y el alto de la imagen original
    $ancho_original = imagesx($imagen);
    $alto_original = imagesy($imagen);

    // Redimensionar la imagen para que el lado más pequeño tenga los píxeles adecuados
    if ($ancho_original > $alto_original) {
		$nuevo_alto = NUEVO_ALTO;
        $factor = $nuevo_alto / $alto_original;
        $nuevo_ancho = $ancho_original * $factor;
    } else {
        $nuevo_ancho = NUEVO_ANCHO;
        $factor = $nuevo_ancho / $ancho_original;
        $nuevo_alto = $alto_original * $factor;
    }

    $imagen_redimensionada = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
    imagecopyresampled($imagen_redimensionada, $imagen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho_original, $alto_original);

    // Crear y guardar el recorte de 300x300 píxeles
    $recorte = imagecreatetruecolor(NUEVO_ANCHO, NUEVO_ALTO);
    imagecopy($recorte, $imagen_redimensionada, 0, 0, 0, 0, NUEVO_ANCHO, NUEVO_ALTO);

    // Generar un nombre único para la imagen recortada
    $nombre_recorte = DIRECTORIO_RECORTES . "/recorte_" . uniqid() . ".jpg";

    // Guardar el recorte en el directorio
    imagejpeg($recorte, $nombre_recorte);

    // Liberar memoria de las imágenes
    imagedestroy($imagen);
    imagedestroy($imagen_redimensionada);
    imagedestroy($recorte);
	
	echo "<img src='$nombre_recorte'>";

    echo "<p>Imagen recortada y redimensionada a " .NUEVO_ANCHO ." x " .NUEVO_ALTO." píxeles.</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagen, redimensionar y recortar</title>
</head>
<body>
    <h2>Subir imagen y redimensionar a <?=NUEVO_ANCHO?>x<?=NUEVO_ALTO?> píxeles</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="imagen" accept="image/jpeg">
        <button type="submit">Subir, Redimensionar y Recortar</button>
    </form>
</body>
</html>
