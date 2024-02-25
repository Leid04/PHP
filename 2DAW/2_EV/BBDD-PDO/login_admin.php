<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
  </head>
  <body>
    <?php
        session_start();
        //COnsulta la tabla administrar. Si no existe, login incorrecto. Si existe se guardará el user en sesión y permitira:
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          try{
            $dsn  = 'mysql:host=localhost;dbname=pelis';
            $user = 'denys';
            $pass = 'denys';
            $pdo  = new PDO($dsn, $user, $pass);

            $email = htmlspecialchars(trim($_POST['email']));
            $pass  = htmlspecialchars(trim(md5($_POST['pass'])));
            
            
            $sql = "SELECT correo_electronico, contrasena FROM administrar WHERE (correo_electronico = :c AND contrasena = :p)";
            $datos = [":c" => $email, ":p" => $pass];
            
            $stmt = $pdo->prepare($sql);
            $resultado = $stmt->execute($datos);

            if($stmt->rowCount() == 1){
              $_SESSION['user'] = $email;

              echo "<a href='crear_pelicula.php'>Crear pelicula</a><br><br>";
              echo "<a href='detalles_pelicula.php'>Detalle pelicula</a><br><br>";
              echo "<a href='logout.php'>Log out</a><br><br>";

            }else {
              echo "<p style='color:red;'>LOGIN INCORRECTO</p>";
            }
          }catch(PDOException $e){
            echo "$e";
          }
        }

    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
      <label for="email">Email:</label>
      <input
        type="email"
        name="email"
        placeholder="denys.msi04@gmail.com"
      /><br /><br />
      <label for="pass">Password:</label>
      <input type="password" name="pass" /><br /><br />
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>
