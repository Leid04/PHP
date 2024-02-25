<?php
function listarUser(){
  require_once('./config.php');
  $sql = "SELECT username, photo FROM users";
  $stmt = $pdo->prepare($sql);
  $resultado = $stmt->execute();

  if($resultado){
    while($datos = $stmt->fetch(PDO::FETCH_ASSOC)){
      echo "<p>Nickname: {$datos['username']}.</p> <br>";
      $imagen = ($datos['photo'] === null)? "default.png" : $datos['photo'];
      echo "<img src='{$imagen}' width='80' />";
    }
  }
}

function crearUser(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name  = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $pass  = htmlspecialchars(trim($_POST['pass']));

    $imagen     = ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) ? $_FILES['imagen']['tmp_name'] : null;
    $imagenTam  = $_FILES['imagen']['size'];
    $imagenTipo = ($imagen !== null) ? pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION) : null;

    if (($imagenTipo == 'png' || $imagenTipo == 'jpg') && $imagenTam <= 1048576 || $imagen == null) {
      require_once('./config.php');
      $sql = "INSERT INTO users (username, email, password, photo) VALUES(:u, :e, :pass, :photo)";

      if ($imagen) {
        $imagenRecorte = imagecreatefromstring(file_get_contents($imagen));
        $imagenRecorte = imagecrop($imagenRecorte, ['x' => 0, 'y' => 0, 'width' => 400, 'height' => 400]);
        ob_start();
        imagepng($imagenRecorte);
        $imagenRecorte = ob_get_clean();
      } else { $imagenRecorte = null; }

      $datos = [
        ":u"     => $name, 
        ":e"     => $email,
        ":pass"  => $pass,
        ":photo" => $imagenRecorte
      ];
      $stmt = $pdo->prepare($sql);
      if ($stmt === false) {
        echo "Error en la preparación de la consulta";
      } else {
        $resultado = $stmt->execute($datos);
        if ($resultado !== false) {
          echo "Subida bien la imagen";
          header("Location: ./listarUser.php");
        } else {
          echo "Error en la subida";
        }
      }
    }
  }
}