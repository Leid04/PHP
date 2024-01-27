<?php
$conn = new mysqli('localhost', 'user', 'password', 'database');
if($conn->connect_errno){ die("Hay un error en la conexion: $conn->connect_error");}

//Preparada:

$sql  = "SELECT id, name FROM user WHERE nickname = ? AND id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $user_name, $user_id);
$resultado = $stmt->execute();
// si es insert/update/delete, comprobar en un if si bien o mal y ya esta
if ($resultado) { //Dentro se hace movidas porque encuentra algo
  $datos = $stmt->get_result();//Obtener resultados
  while ($fila = $datos->fetch_assoc()) {//Recorrer resultados
      echo "{$fila['id']} - {$fila['name']} <br/>";//Mostrar resultados
  }
  echo "Encontrados: " . $datos->num_rows;
} else { echo "Se ha producido un error"; }
echo " Filas afectadas: " . $conn->affected_rows;

$conn->close();
$stmt->close();

//Sin preparar:

$sql = 'SELECT p.titulo, g.nombre_genero FROM pelicula p JOIN genero g ON p.id_genero = g.id_genero;';
if ($datos = $conn->query($sql)) {
  while ($fila = $datos->fetch_assoc()) {
    echo "{$fila['titulo']} - {$fila['anio_estreno']} - {$fila['duracion_minutos']} - {$fila['nombre_genero']} <br>";
  }
  echo "Encontrados:" .$result->num_rows;
  echo " Filas afectadas:". $conn->affected_rows;
} else { echo "Ha habido un error: " . $conn->error;}
$conn->close();
$datos->close();


$insert = 'INSERT INTO Employee (EmployeeID, Salary) VALUES (1, "John")';
$update = 'UPDATE Employee SET Salary = 65000.00 WHERE EmployeeID = 1';
$delete = 'DELETE FROM Employee WHERE EmployeeID = 1;';