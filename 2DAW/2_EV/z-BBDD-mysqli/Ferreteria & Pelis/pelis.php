<!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pelis</title>
  </head>
  <body>
    <?php
      $conn = new mysqli('localhost', 'denys', 'denys', 'pelis');
      if($conn->connect_errno){ die("Hay un error en la conexion: $conn->connect_error");}

      $sql = '
        SELECT p.titulo, p.anio_estreno, p.duracion_minutos, g.nombre_genero
        from pelicula p
        join genero g on p.id_genero = g.id_genero;
      ';
      if ($datos = $conn->query($sql)) {
        while ($fila = $datos->fetch_assoc()) {
          echo "{$fila['titulo']} - {$fila['anio_estreno']} - {$fila['duracion_minutos']} - {$fila['nombre_genero']} <br>";
        }
      } else { echo "Ha habido un error: " . $conn->error;}
      $conn->close();
    ?>
  </body>
</html>