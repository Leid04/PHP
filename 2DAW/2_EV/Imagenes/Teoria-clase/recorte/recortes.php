<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagen"])) {
    // Directorio donde se guardarán las imágenes recortadas
    $directorio = "recortes";
	if (!file_exists($directorio))
		mkdir ($directorio);

    // Nombre temporal del archivo subido
    $archivo_temporal = $_FILES["imagen"]["tmp_name"];

    // Crear una imagen a partir del archivo subido
    $imagen = imagecreatefromjpeg($archivo_temporal);

    // Obtener el ancho y el alto de la imagen
    $ancho_original = imagesx($imagen);
    $alto_original = imagesy($imagen);

    // Calcular las dimensiones de cada recorte
    $ancho_recorte = $ancho_original / 2;
    $alto_recorte = $alto_original / 2;

    // Crear y guardar los recortes
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $recorte = imagecreatetruecolor($ancho_recorte, $alto_recorte);
            imagecopy($recorte, $imagen, 0, 0, $i * $ancho_recorte, $j * $alto_recorte, $ancho_recorte, $alto_recorte);
            $nombre_recorte = $directorio . "/recorte_" . $i . "_" . $j . ".jpg";
            imagejpeg($recorte, $nombre_recorte);
            imagedestroy($recorte);
        }
    }

    // Liberar la memoria ocupada por la imagen original
    imagedestroy($imagen);

    echo "Recortes creados con éxito.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir y recortar imagen</title>
</head>
<body>
    <h2>Subir imagen y crear 4 recortes</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="imagen" accept="image/jpeg">
        <button type="submit">Subir y Recortar</button>
    </form>
</body>
</html>