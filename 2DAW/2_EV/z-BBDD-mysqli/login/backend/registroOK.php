<?php
  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name     = htmlspecialchars(trim($_POST['name']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(md5 ($_POST['password']));
    $email    = htmlspecialchars(trim($_POST['email']));
    $birthday = htmlspecialchars(trim($_POST['birthday']));

    $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
    if ($conexion->connect_error) echo json_encode(['success' => false, 'error' => 'Error en la BBDD ' . $conexion->connect_error]);

    $sql_user_existe = "SELECT id FROM user WHERE username = ? OR email = ?";//Selecciona a ver si hay un user asi.
    $query_user_existe = $conexion->prepare($sql_user_existe);
    $query_user_existe->bind_param("ss", $username, $email);
    $query_user_existe->execute();
    $query_user_existe->store_result();

    if ($query_user_existe->num_rows) {//Si nos devuelve true, osea > 0, es que existe un user ya
      echo json_encode(['success' => false, 'error' => 'Ya existe este username o email.']);
    } else {
      $sql_insert = "INSERT INTO user (name, lastname, username, password, email, birthday) VALUES (?, ?, ?, ?, ?, ?)";
      $insert = $conexion->prepare($sql_insert);
      $insert->bind_param("ssssss", $name, $lastname, $username, $password, $email, $birthday);

      echo ($insert->execute())? json_encode(['success' => true, 'message' => 'Usuario registrado exitosamente']) : 
                                 json_encode(['success' => false, 'error' =>  ($insert->error)]);
      $insert->close();
    }
    $query_user_existe->close();
    $conexion->close();
  }