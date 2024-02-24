<?php
// Verificar si se ha enviado el formulario
if (!empty($_POST["btnregistrar"])) {
    require_once('./config.php');
    require_once('./');


    // Verificar si se ha subido un archivo
    if (!empty($_FILES["imagen"]["tmp_name"])) {
        // Ruta donde se guardará la imagen
        $directorio = "./img/" . basename($_FILES["imagen"]["name"]);

        // Mover el archivo al directorio de imágenes
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $directorio)) {
            // Preparar la consulta para insertar la imagen en la base de datos
            $stmt = $pdo->prepare("INSERT INTO user (photo) VALUES (:photo)");

            // Leer el contenido del archivo y binarizarlo
            $imagenBinaria = file_get_contents($directorio);

            // Enlazar el parámetro binario a la consulta
            $stmt->bindParam(':photo', $imagenBinaria, PDO::PARAM_LOB);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo "Imagen subida correctamente.";
            } else {
                echo "Error al insertar la imagen en la base de datos.";
            }
        } else {
            echo "Error al mover el archivo al directorio de imágenes.";
        }
    } else {
        echo "No se ha seleccionado ninguna imagen.";
    }
}
?>
