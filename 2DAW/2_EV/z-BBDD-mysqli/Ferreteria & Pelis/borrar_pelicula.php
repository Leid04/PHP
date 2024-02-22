<?php
if($_SERVER['REQUEST_METHOD'] === 'GET'){
  $id = htmlspecialchars(trim($_GET['id']));

  $conn = new mysqli("localhost", "denys", "denys", "pelis");
  if($conn->connect_errno){ die("Sa fallido la conexion $conn->connect_error");}
  
  $sql = 'DELETE FROM pelicula WHERE id_pelicula = ?';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $id);
  $resultado = $stmt->execute();
  
  echo ($stmt->affected_rows != 1)? "Se ha eliminado correctamente" : "No se ha eliminado";
  $conn->close();
  $stmt->close();
}