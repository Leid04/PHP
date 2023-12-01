<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario básico</title>
        <link rel="stylesheet" href="styles/login.css">
    </head>
    <body>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $user = htmlspecialchars(trim($_POST['user']));
                $password = htmlspecialchars(trim($_POST['password']));
                $resultado = false;

                $fichero = fopen(__DIR__ . "/files/micsv.csv", "r");
                while (!feof($fichero)) {
                    $linea = fgets($fichero);
                    $datos = explode(",", $linea);
                    if ($user === $datos[0] && $password === $datos[1]) {
                        $resultado = true;
                        echo "<p>Hola $datos[2] $datos[3]</p>";
                        break;
                    }
                }
                fclose($fichero);
                echo ($resultado) ? "<style>form{display: none;}</style>" : "<p>Error de usuario.</p>"; // oculto el formulario
            }
        ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name="formulario">
        <label for="user">Tu usuario: </label>
        <input type="text" name="user"><br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password"><br>
        <button type="submit" name="submit">Enviar</button><br>
    </form>
    </body>
</html>