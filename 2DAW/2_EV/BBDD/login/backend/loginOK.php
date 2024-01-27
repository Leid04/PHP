<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] === "POST") {
      $usuario = trim($_POST['usuario']);
      $password = md5($_POST['password']);

      $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
      if ($conexion->connect_error) die("Error en la BBDD $conexion->connect_error");

      $sql_verifica = "SELECT u.name, u.lastname, u.email, s.name as subject_name, c.score 
                      FROM user u 
                      JOIN user_calification c ON u.id = c.id_user 
                      JOIN subject s ON c.id_subject = s.id 
                      WHERE (u.username = ? OR u.email = ?) AND u.password = ?";
                      
      $sentenciaDatos = $conexion->prepare($sql_verifica);
      $sentenciaDatos->bind_param("sss", $usuario, $usuario, $password);
      $sentenciaDatos->execute();

      $resultado = $sentenciaDatos->get_result()->fetch_all(MYSQLI_ASSOC);

      if ($resultado) {
          $_SESSION["logged"] = true;
          $_SESSION["username"] = $usuario;
          echo json_encode(['success' => true, 'data' => $resultado]);
      } else {
          echo json_encode(['success' => false]);
      }

      $sentenciaDatos->close();
      $conexion->close();
  } else { echo json_encode(['success' => false]);}