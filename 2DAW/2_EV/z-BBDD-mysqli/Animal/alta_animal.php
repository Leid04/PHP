<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
		<meta name="author" content="Denys Revutskyi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Animales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous"/>
  </head>
  <body>
    <?php
      $mensaje = '';
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (!empty($_GET['id']) && !empty($_GET['es']) && !empty($_GET['edad'])) {
          $nombre = htmlspecialchars(trim($_GET['id']));
          $especie = htmlspecialchars(trim($_GET['es']));
          $edad = htmlspecialchars(trim($_GET['edad']));
  
          $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
  
          if ($conexion->connect_error) { die("Error de conexión: $conexion->connect_error"); }
  
          $insert = 'INSERT INTO animal (nombre, especie, edad) VALUES (?, ?, ?)';
  
          $stmt = $conexion->prepare($insert);
          $stmt->bind_param("ssd", $nombre, $especie, $edad);
  
          $resultadoInsert = $stmt->execute();
  
          if ($resultadoInsert) {
            $mensaje = 'Registro exitoso.<br>';
            header("refresh:2;url=listado_animales.php"); // Redirige después de 2 segundos al listado.
          } else {
            $mensaje = 'Error al registrar el animal.';
          }
  
          $stmt->close();
          $conexion->close();
        }
      }
    ?>
    <div class="container mt-5">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
        <?php echo $mensaje; ?>
        <div class="mb-3">
          <label for="id" class="form-label">Nombre:</label>
          <input type="text" class="form-control" name="id" required>
        </div>
        <div class="mb-3">
          <label for="es" class="form-label">Especie:</label>
          <input type="text" class="form-control" name="es" required>
        </div>
        <div class="mb-3">
          <label for="edad" class="form-label">Edad:</label>
          <input type="number" class="form-control" name="edad" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="button" class="btn btn-secondary" onclick="window.location.href='./listado_animales.php';">Listado animales</button>
      </form>
    </div>
  </body>
</html>