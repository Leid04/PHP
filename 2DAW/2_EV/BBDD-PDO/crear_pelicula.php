<?php
session_start();

$dsn = 'mysql:host=localhost;dbname=pelis';
$user = 'denys';
$pass = 'denys';

try {
  $pdo = new PDO($dsn, $user, $pass);

  $sql = "SELECT id_genero, nombre_genero FROM Genero";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $generos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) { echo "Error: " . $e->getMessage(); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = htmlspecialchars(trim($_POST["titulo"]));
  $anio = htmlspecialchars(trim($_POST["anio"]));
  $min = htmlspecialchars(trim($_POST["min"]));
  $gen = htmlspecialchars(trim($_POST["gen"]));
  $car = htmlspecialchars(trim($_POST["car"]));
  $foto = $_FILES['foto']['tmp_name'];

  try {
    if (!empty($foto)) {

      $directorio = 'img/IDPELICULA/';
      $nombreArchivo = pathinfo($_FILES['foto']['name'], PATHINFO_FILENAME);
      $extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
      $nombreImagen = uniqid($nombreArchivo . '_') . '.' . $extension;
      $rutaImagen = $directorio . $nombreImagen;

      //Redimensionar y guardar la imagen
      $imagenOriginal = imagecreatefromstring(file_get_contents($foto));
      $imagenRedimensionada = imagescale($imagenOriginal, 300, 600);
      imagejpeg($imagenRedimensionada, $rutaImagen);
      imagedestroy($imagenOriginal);
      imagedestroy($imagenRedimensionada);

      //Insertar datos en la base de datos
      $sql = "INSERT INTO Pelicula (titulo, anio_estreno, duracion_minutos, id_genero, caratula, photo) VALUES(:t, :a, :m, :g, :c, :f)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([
        ":t" => $titulo, ":a" => $anio,
        ":m" => $min,    ":g" => $gen,
        ":c" => $car,    ":f" => $nombreImagen
      ]);
      echo "Bien insertado";
    } else {
      echo "No se ha subido ninguna imagen";
    }
  } catch(PDOException $e) {
    echo "Error al insertar datos: " . $e->getMessage();
  }
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
      <label for="titlo">Titulo:</label>
      <input type="text" name="titulo" placeholder="Forest Albab"/><br /><br />

      <label for="anio">Anio de estreno:</label>
      <input type="number" name="anio" /><br /><br />

      <label for="min">Duracion minutos:</label>
      <input type="number" name="min" /><br /><br />

      <label for="gen">Género:</label>
      <select name="gen">
        <?php foreach ($generos as $genero): ?>
          <option value="<?= $genero['id_genero'] ?>"><?= $genero['nombre_genero'] ?></option>
        <?php endforeach; ?>
      </select><br /><br />

      <label for="car">Caratula:</label>
      <input type="text" name="car" /><br /><br />

      <label for="foto">Foto:</label>
      <input type="file" name="foto" /><br /><br />

      <button type="submit">Enviar</button>
    </form>
  </body>
</html>
