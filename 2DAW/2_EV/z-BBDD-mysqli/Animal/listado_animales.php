<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
		<meta name="author" content="Denys Revutskyi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado animales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="borrar_animales.js"></script>
  </head>
  <body>
    <?php
      $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
      $sql = 'SELECT id, nombre, especie, edad FROM animal';
      $resultado = $conexion->query($sql);
      $conexion->close();
    ?>
    <div class="container">
      <div class="row">
        <div class="table-responsive">
          <table class="table table-striped table-hover table-sm table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Edad</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($fila = $resultado->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>{$fila['id']}</td>";
                  echo "<td>{$fila['nombre']}</td>";
                  echo "<td>{$fila['especie']}</td>";
                  echo "<td>{$fila['edad']}</td>";
                  echo "<td>";
                  echo "<button class='btn btn-danger' onclick='borrarAnimal({$fila['id']})'>Borrar</button>";
                  echo "</td>";
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
        <button class="btn btn-primary" onclick="window.location.href='./alta_animal.php';">Dar de alta al animal</button>
      </div>
    </div>
  </body>
</html>
