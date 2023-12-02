<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario básico</title>
        <link rel="stylesheet" href="src/styles/login.css">
    </head>
    <body>
        <?php
            session_start();

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $user = htmlspecialchars(trim($_POST['user']));
                $password = htmlspecialchars(trim($_POST['password']));
                $fichero = fopen(__DIR__ . "/src/files/micsv.csv", "r");
                $resultado = false;
                
                while (!feof($fichero)) {
                    $linea = fgets($fichero);
                    $datos = explode(",", $linea);
                    if ($user === $datos[0] && $password === $datos[1]){
                        $resultado = true;
                        $_SESSION['nombre'] = $datos[2];
                        $_SESSION['apellido'] = $datos[3];
                        fclose($fichero);
                        header("Location: 0.php");//Redirección porque esta todo correcto.
                        exit;
                    } 
                }
                fclose($fichero);
                echo ($resultado) ? "<style>form{display: none;}</style>" : "<p>Error de usuario.</p>"; // oculto el formulario
            }
        ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name="formulario">
        <label for="user">Tu usuario: </label>
            <input type="text" name="user" require><br>
        <label for="password">Contraseña: </label>
            <input type="password" name="password" require><br>
        <button type="submit" name="submit">Enviar</button><br>
    </form>
    </body>
</html>