<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);//https://www.php.net/manual/en/function.file-get-contents.php

    if (isset($data['id'])) {
      $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
      if ($conexion->connect_error) { die("Error en la conexión a la base de datos: " . $conexion->connect_error); }

      $sql = "DELETE FROM animal WHERE id = {$data['id']}";

      echo ($conexion->query($sql) === TRUE)? json_encode(['success' => true]) : json_encode(['success' => false]);
      
      $conexion->close();
    }else {
      echo json_encode(['success' => false]);
    }
  }else {
    echo json_encode(['success' => false]);
  }
?>
