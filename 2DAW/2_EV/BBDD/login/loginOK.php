<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] === "POST"){
    $usuario = htmlspecialchars(trim($_POST['usuario']));
    $password = htmlspecialchars(trim(md5($_POST['password'])));

    $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
    if($conexion->connect_error) die("Error en la BBDD $conexion->connect_error");

    $sql_verifica = "
      SELECT id, username, password
      FROM user 
      WHERE id = $usuario OR username = $usuario AND password = $password
    ";

    if($conexion->query($sql_verifica) === true){
      $sql_Datos = "
        SELECT s.name, s.id, us.score, us.date
        FROM subject u, user_calification us
        WHERE us.user_id = $usuario AND s.id = us.subject_id 
      ";
      $resultado = $conexion->query($sql_Datos);
      $_SESSION["logged"]=true;
      $_SESSION["username"]=$usuario;
      echo json_encode([$resultado]);
    }else{
      echo json_encode(['success' => false]);
    }
  }else{
    echo "Hay un error en la conexion";
    echo json_encode(['success' => false]);
  }
?>