<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $id           = htmlspecialchars(trim($_POST['id']));
  $nombre       = htmlspecialchars(trim($_POST['name']));
  $fecha        = htmlspecialchars(trim($_POST['fech']));
  $nacionalidad = htmlspecialchars(trim($_POST['nac']));
  $pelis        = htmlspecialchars(trim($_POST['pelis']));
  
  
  $conn = new mysqli("localhost", "denys", "denys", "pelis");
  if($conn->connect_errno){ die("Sa fallido la conexion $conn->connect_error");}
  
  $sql = '
    INSERT INTO interprete (id_interprete, nombre_actor, fecha_nacimiento, nacionalidad) values(?,?,?,?,?);
    INSERT INTO peliculaInterprete (id_pelicula, id_interprete) values(?,?)
  ';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('issss', $id, $nombre, $fecha, $nacionalidad, $pelis);
  $stmt->bind_param('is', $id, $pelis);
  $resultado = $stmt->execute();
  
  echo ($stmt->affected_rows < 1)? "Se ha insertado correctamente" : "No se ha insertado";
  $conn->close();
}
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="<? htmlspecialchars(trim($_SERVER['PHP_SELF']))?>" method="POST">
      <label for="id">ID:</label>
        <input type="text" name="id"><br><br>
      <label for="name">Nombre:</label>
        <input type="text" name="name"><br><br>
      <label for="fech">Fecha:</label>
        <input type="text" name="fech"><br><br>
      <label for="nac">Nacionalidad:</label>
        <input type="text" name="nac"><br><br>
      <select name="pelis" id="pelis">
        <?php
            $conn = new mysqli("localhost", "denys", "denys", "pelis");
            if($conn->connect_errno){ die("Sa fallido la conexion $conn->connect_error");}
            $sql = 'SELECT titulo, anio_estreno, duracion_minutos FROM pelicula';
            if($datos = $conn->query($sql)){
              while($fila = $datos->fetch_assoc()){
                echo "<option value='{$fila['id_pelicula']}'>
                        {$fila['titulo']} - {$fila['anio_estreno']} - {$fila['duracion_minutos']}
                      </option>";
              }
            } 
        ?>
      </select>
    </form>
  </body>
</html>