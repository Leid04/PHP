<?php
  // Definir las credenciales de la base de datos: hostname, username, password y nombre de la base de datos.
  $conexion = mysqli_connect('localhost', 'denys', '', 'pruebas');

  // Verificar si la conexión fue exitosa.
  if (!$conexion) {
      die("La conexión falló: " . mysqli_connect_error());
  }

  // Definir una consulta de inserción en la tabla 'users' con valores para 'name' y 'email'.
  $insert = 'INSERT INTO users (name, email) VALUES ("denys", "denys@gmail.com")';

  // Realizar la inserción ejecutando la consulta.
  $resultadoInsert = mysqli_query($conexion, $insert);

  // Verificar si la inserción fue exitosa.
  if ($resultadoInsert) {
      echo "Inserción exitosa.";
  } else {
      // Mostrar un mensaje de error si la inserción falla.
      echo "Error en la inserción: " . mysqli_error($conexion);
  }

  // Mostrar información detallada sobre la conexión (solo para fines de depuración).
  echo "<pre>";
  print_r($conexion);
  echo "</pre>";

  // Cerrar la conexión después de realizar todas las operaciones necesarias.
  mysqli_close($conexion);
?>
