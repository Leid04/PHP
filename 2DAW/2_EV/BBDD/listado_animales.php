<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <?php
      $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
      $sql = 'SELECT id, nombre, especie, edad FROM animal';
      $resultado = $conexion->query($sql);
    ?>
    <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Especie</th>
          <th>Edad</th>
        </tr>
        <?php
          while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
              echo "<td>{$fila['id']}</td>";
              echo "<td>{$fila['nombre']}</td>";
              echo "<td>{$fila['especie']}</td>";
              echo "<td>{$fila['edad']}</td>";
            echo "</tr>";
          }
        ?>
    </table>
  </body>
</html>
