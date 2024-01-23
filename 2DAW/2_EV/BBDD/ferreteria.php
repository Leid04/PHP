<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container mt-5">
      <h2 class="mb-4">Nueva ferretería</h2>
      <?php
        // config.php
        const BBDD_HOST = "localhost";
        const BBDD_NAME = "ferreteria";
        const BBDD_USER = "denysRev";
        const BBDD_PASSWORD = "";

        $conn = new mysqli(BBDD_HOST, BBDD_USER, BBDD_PASSWORD, BBDD_NAME);
        if ($conn->connect_errno) { echo "Error en la conexión: " . $conn->connect_error; exit; }
        
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
          $nombre = htmlspecialchars(trim($_POST['nombre']));
          $direccion = htmlspecialchars(trim($_POST['dir']));
          $codigoPos = htmlspecialchars(trim($_POST['cp']));

          $query = 'INSERT INTO ferreteria (name, address, cp) VALUES (?, ?, ?)';
          $stmt = $conn->prepare($query);
          $stmt->bind_param("ssi", $nombre, $direccion, $codigoPos);
          $resultado = $stmt->execute();
        } 

        $sentencia = "SELECT id, name, address, cp FROM ferreteria";
        $resultado = $conn->query($sentencia);

        if ($resultado->num_rows != 0) { 
      ?>
          <table class="table table-striped">
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
              </tr>
              <?php
                while ($fila = $resultado->fetch_assoc()) {
                  echo "<tr>";
                    echo "<td>{$fila['id']}</td>";
                    echo "<td>{$fila['name']}</td>";
                    echo "<td>{$fila['address']}</td>";
                  echo "</tr>";
                }
              ?>
          </table>
          <p>Encontrados: <?php echo $resultado->num_rows; ?></p>
        <?php
          } else {
            echo "No hay ninguna ferretería.";
          }
        ?>
      <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="mb-4">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre*</label>
          <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="dir" class="form-label">Dirección*</label>
          <input type="text" name="dir" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="cp" class="form-label">Código postal*</label>
          <input type="number" name="cp" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </body>
</html>