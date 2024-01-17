<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $usuario = trim($_POST['usuario']);
    $password = md5($_POST['password']);

    $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
    if ($conexion->connect_error) die("Error en la BBDD $conexion->connect_error");

    $sql_verifica = "SELECT username, email, password FROM user WHERE (username = ? OR email = ?)";
    $sentencia = $conexion->prepare($sql_verifica);
    $sentencia->bind_param("ss", $usuario, $usuario);
    $sentencia->execute();
    $result = $sentencia->get_result();

    if ($result->num_rows > 0) {
      $user_data = $result->fetch_assoc();
      $contrasena = $user_data['password'];

      if($contrasena === $password){
        $sql_Datos = "SELECT u.name, u.lastname, u.email, s.name, c.score 
                      FROM user u 
                      JOIN user_calification c ON u.id = c.id_user 
                      JOIN subject s ON c.id_subject = s.id 
                      WHERE (u.username = ? OR u.email = ?)";
                      
        $sentenciaDatos = $conexion->prepare($sql_Datos);
        $sentenciaDatos->bind_param("ss", $usuario, $usuario);
        $sentenciaDatos->execute();
  
        $resultado = $sentenciaDatos->get_result()->fetch_all(MYSQLI_ASSOC);
  
        $_SESSION["logged"] = true;
        $_SESSION["username"] = $usuario;
        echo json_encode(['success' => true, 'data' => $resultado]);
        $sentenciaDatos->close();
      }else{
        echo json_encode(['success' => false]);
      }
    } else {
      echo json_encode(['success' => false]);
    }
    $sentencia->close();
    $conexion->close();
  } else {
    echo json_encode(['success' => false]);
  }