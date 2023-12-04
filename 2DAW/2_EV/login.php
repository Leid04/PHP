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
                $correo = htmlspecialchars(trim($_POST['correo']));
                $password = htmlspecialchars(trim($_POST['password']));
                
                $mensajes = fopen(__DIR__ . "/src/files/mensajes_aula_virtual.csv", "r");
                $users = fopen(__DIR__ . "/src/files/users_aula_virtual.csv", "r");
                
                $resultado = false;

                while (!feof($users)) {
                    $linea = fgets($users);
                    $datos = explode(",", $linea);
                    if ($correo === $datos[1] && md5($password) === $datos[2]){
                        $resultado = true;
                        $_SESSION['nombre'] = $datos[3];
                        $_SESSION['apellido'] = $datos[4];
                        $_SESSION['perfil'] = ($datos[5] == 1)? "Profesor" : "Alumno";
                        
                        while(!feof($mensajes)){
                            
                            $lineaMensaje = fgets($mensajes);
                            $mensajesUser = explode(",", $lineaMensaje);

                            $numeroMensajes = 0;
                            ($mensajesUser[1] === $datos[0])? $numeroMensajes++ : "";

                            //$mensajesRecibidos = [];
                            //$mensajesEnviados = [];
                            if($mensajesUser[0] === $datos[0]){

                            }
                            if($mensajesUser[1] === $datos[0]){

                            }

                            $_SESSION['numMensajes'] = $numeroMensajes;
                        }
                        
                        fclose($users);
                        fclose($mensajes);
                        header("Location: 0.php");//Redirección porque esta todo correcto.
                        exit;
                    } 
                }
                fclose($fichero);
                fclose($users);
                echo ($resultado) ? "<style>form{display: none;}</style>" : "<p>Error de usuario.</p>"; // oculto el formulario
            }
        ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name="formulario">
        <label for="correo">Tu correo: </label>
            <input type="text" name="correo" require><br>
        <label for="password">Contraseña: </label>
            <input type="password" name="password" require><br>
        <button type="submit" name="submit">Enviar</button><br>
    </form>
    </body>
</html>