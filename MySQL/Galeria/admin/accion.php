<?php
  include "../configs/config.php";
  include "../configs/mysql.php";
  include "../configs/utils.php";
//---------------------------------------------------Recoger datos.-------------------------------------------------
  //Recogo los parametros pasados por POST
  $nombre = htmlspecialchars(trim($_POST['nombre']));
  $email = htmlspecialchars(trim($_POST['email']));
  $password = htmlspecialchars(trim($_POST['password']));

  $host = $bbdd['database']['host'];
  $username = $bbdd['database']['username'];
  $password = $bbdd['database']['password'];
  $database = $bbdd['database']['database'];
//---------------------------------------------------Conectarse--------------------------------------------------------
  $conexion = new mysqli($host, $username, $password, $database);
//---------------------------------------------------Preparar la sentencia---------------------------------------------
  //Evito la inyeccion SQL
  $sentencia = $conexion->prepare("INSERT INTO authors (name, email, password) VALUES (?, ?, ?)");

  if ($sentencia === false) { die("Error al preparar la sentencia: " . $conexion->error);}

  $sentencia->bind_param("sss", $nombre, $email, $password);
  $ejecutar = Execute($sentencia);
//---------------------------------------------------Cerrar la sentencia-----------------------------------------------
  $sentencia->close();
  Close($conexion);
  header("location: ./home.php");

?>