<?php
  echo "<pre>";
    $conexion = new mysqli('localhost', 'denys', '', 'pruebas');

    if ($conexion->connect_error) {// Verificar la conexión
        die("Error de conexión: " . $conexion->connect_error);
    }

    $insert = 'INSERT INTO users (name, email) VALUES (?, ?)';
    $nombre = "alex cil";
    $email = "alex@gmail.com";

    
    $stmt = $conexion->prepare($insert);//Prepara la consulta
    $stmt->bind_param("ss", $nombre, $email);//Vincula parámetros

    $resultadoInsert = $stmt->execute();

    // Cerrar la conexión y la consulta preparada
    $stmt->close();
    $conexion->close();

  echo "</pre>";
?>