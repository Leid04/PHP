<?php
var_dump($_FILES);

// Verificar si se ha enviado el formulario
if (!empty($_POST["btnregistrar"])) {
  require_once('./config.php');

  $filename = $_FILES['imagen']['name'];
  $target_file = './img/'.$filename;
  $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
  $valid_extensions = array("png", "jpeg", "jpg");

  $query = "INSERT INTO user (photo) VALUES(:img)";
  $statement = $pdo->prepare($query);

  if (in_array(strtolower($file_extension), $valid_extensions)) {
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target_file)) {
      $statement->bindParam(':img', $target_file);
      $statement->execute();
      echo "La imagen subida correctamente";
    } else {
      echo "Error al subir el archivo.";
    }
  } else {
    echo "Extension de archivo no válida. Por favor, sube un archivo PNG, JPEG o JPG.";
  }
}