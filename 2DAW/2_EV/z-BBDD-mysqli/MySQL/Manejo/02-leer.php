<?php
  echo "<pre>";
    $conexion = new mysqli('localhost', 'denys', '', 'pruebas');
    
    $sql = 'SELECT id, name, email, created FROM Users';//Consulta SQL

    $resultado = $conexion->query($sql);//Ejecutar la consulta y almacenar el resultado en la variable $resultado

    $data = $resultado->fetch_all(MYSQLI_ASSOC);//Almacenar los resultados en $data

    print_r($data);

    $conexion->close();// Cerrar la conexión a la base de datos para liberar recursos

  echo "</pre>";
?>
