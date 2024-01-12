<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <?php
      if(isset($_GET['id']) && isset($_GET['es']) && isset($_GET['edad'])){
        $nombre = htmlspecialchars(trim($_GET['id']));
        $especie = htmlspecialchars(trim($_GET['es']));
        $edad = htmlspecialchars(trim($_GET['edad']));

        $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');

        if ($conexion->connect_error) {  die("Error de conexión: $conexion->connect_error"); }

        $insert = 'INSERT INTO animal (nombre, especie, edad) VALUES (?, ?, ?)';

        $stmt = $conexion->prepare($insert);
        $stmt->bind_param("ssd", $nombre, $especie, $edad);

        $resultadoInsert = $stmt->execute();

        $stmt->close();
        $conexion->close();
      }
    ?>
    <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="get">
      <label for="id">Nombre:</label>
        <input type="text" name="id"><br><br>
        <label for="es">Especie:</label>
        <input type="text" name="es"><br><br>
        <label for="edad">Edad:</label>
          <input type="number" name="edad"><br><br>
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>
