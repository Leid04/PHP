<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado animales</title>
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
          <th>Acciones</th>
        </tr>
        <?php
          while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
              echo "<td>{$fila['id']}</td>";
              echo "<td>{$fila['nombre']}</td>";
              echo "<td>{$fila['especie']}</td>";
              echo "<td>{$fila['edad']}</td>";
              echo "<td>";
                echo "<button onclick='borrarAnimal({$fila['id']})'>Borrar</button>";
              echo "</td>";
            echo "</tr>";
          }
        ?>
    </table>
    <script>
      const borrarAnimal = (animalId) => {
        const options = {
          method: 'POST',
          headers: { 'Content-Type': 'application/json'},
          body: JSON.stringify({ id: animalId }),
        }
        const getData = (data) => {
          if (data.success) {
            alert('Animal borrado exitosamente.');
            location.reload();
          } else {
            alert('Error al borrar el animal.');
          }
        }
        const getError = (er) => {
          console.error('Error:', error);
          alert('Error al procesar la solicitud.');          
        }

        if (confirm("Enserio quieres borrar este animal?")) {
          fetch('borrar_animal.php', options)
          .then(response => response.json())
          .then(data => getData(data))
          .catch(error => getError());
        }
      }
    </script>
  </body>
</html>
