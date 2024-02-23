<?php

$dns = "mysql:host=localhost;dbname=user";
$user = "denys";
$pass = "denys";
$pdo = new PDO($dns, $user, $pass);

function listarUser($id){
  try{
    global $pdo;

    $datos = [":id" => $id];
    
    $sql = "SELECT nickname, photo, photo_type FROM user WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($datos);

    $users = $stmt->fetch(PDO::FETCH_ASSOC);
    if($users){
      echo "<p>nickname: {$users['nickname']}</p>";
      if (!empty($users['photo'])) {
        echo "<img src='mostrar_imagen.php?id={$id}'/>";
      }
    }

  }catch(PDOException $e){ 
    echo $e->getMessage(); 
    return;
  }
}

function obtenerFoto($id){
  //Devolver la imagen del usuario
}

function crearUser(){
  global $pdo;
  $name = htmlspecialchars(trim($_POST['name']));
  $email = htmlspecialchars(trim($_POST['email']));
  $pass = htmlspecialchars(trim($_POST['pass']));

  if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $imgContenido = file_get_contents($_FILES['imagen']['tmp_name']);
    $imgTipo = $_FILES['imagen']['type'];
  } else { 
    $imgContenido = null; 
    $imgTipo = null;
  }

  try{
    $datos = [
      ":name" => $name,
      ":email" => $email,
      ":pass" => $pass,
      ":photo" => $imgContenido,
      ":photo_type" => $imgTipo
    ];
    $sql = "INSERT INTO user (nickname, email, password, photo, photo_type) VALUES (:name, :email, :pass, :photo, :photo_type)";

    $stmt = $pdo->prepare($sql);
    $res = $stmt->execute($datos);

    echo ($res)? ((!empty($imgContenido))? "Subido con la imagen" : "Subido sin la imagen") : "Error al subir";

  }catch(PDOException $e){ echo $e->getMessage(); }
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  crearUser();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
  </head>
  <body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
      <label for="name">Nombre:</label>
        <input type="text" name="name" placeholder="Denys"><br><br>
      <label for="email">Email:</label>
        <input type="email" name="email" placeholder="denys.msi04@gmail.com"><br><br>
      <label for="pass">Password:</label>
        <input type="password" name="pass"><br><br>
      <label for="imagen">Imagen:</label>
        <input type="file" name="imagen"><br><br>
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>
