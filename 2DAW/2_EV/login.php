<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Denys Revutskyi 2-DAW">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario básico</title>
        <link rel="stylesheet" href="src/styles/login.css">
    </head>
    <body>
        <?php
            session_start();

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $correo = htmlspecialchars(trim($_POST['correo']));
                $password = md5(htmlspecialchars(trim($_POST['password'])));
                
                $users = fopen(__DIR__ . "/src/files/users_aula_virtual.csv", "r"); 
                $resultado = false;

                while (!feof($users)) {
                    $datos = explode(",", fgets($users));//fgets en explode ya que no utilizare la linea en sí.

                    if ($correo === $datos[1] && $password === $datos[2]){
                        $resultado = true;//Encontrado el user.
                        $mensajes = fopen(__DIR__ . "/src/files/mensajes_aula_virtual.csv", "r");

                        $_SESSION['nombre'] = $datos[3];
                        $_SESSION['apellido'] = $datos[4];
                        $_SESSION['perfil'] = ($datos[5] == 1)? "Profesor" : "Alumno";
                        
                        $numeroMensajesEnviados = $numeroMensajesRecibidos = 0;//Inicializa en 0.

                        while(!feof($mensajes)) {
                            $mensajesUser = explode(",", fgets($mensajes));

                            $mensaje = [//Generame el mensaje
                                "De" => fnNombre($mensajesUser[0]),//Con nombre de usuario. 
                                "Para" => fnNombre($mensajesUser[1]),//Con nombre de para quien es.
                                "Mensaje" => $mensajesUser[3], 
                                "Fecha" => $mensajesUser[4], 
                            ];                            
                            // Lee la cantidad de mensajes
                            if ($mensajesUser[1] === $datos[0]) {
                                $_SESSION['mensajesRecibidos'][++$numeroMensajesRecibidos] = $mensaje;
                            }

                            if ($mensajesUser[0] === $datos[0]) {
                                $_SESSION['mensajesEnviados'][++$numeroMensajesEnviados] = $mensaje;
                            }
                        }

                        $_SESSION['numMensajes'] = $numeroMensajesRecibidos + $numeroMensajesEnviados;

                        fclose($users);
                        fclose($mensajes);
                        header("Location: principal.php");//Redirecciona porque está todo correcto.
                        exit;
                    }
                }
                fclose($users);
                echo ($resultado) ? "<style>form{display: none;}</style>" : "<p>Error de usuario.</p>"; //Oculta el formulario
            }
            function fnNombre($id) {//Encuentra el nombre de id en otro archivo.
                $usersTemp = fopen(__DIR__ . "/src/files/users_aula_virtual.csv", "r");
                while (!feof($usersTemp)) {
                    $lineaUser = fgets($usersTemp);
                    $userDatos = explode(",", $lineaUser);
                    if ($id == $userDatos[0]) {
                        fclose($usersTemp);
                        return $userDatos[3];
                    }
                }
                fclose($usersTemp);
                return null;
            }               

        ?>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name="formulario">
            <label for="correo">Tu correo: </label>
            <input type="text" name="correo" required><br>
            <label for="password">Contraseña: </label>
            <input type="password" name="password" required><br>
            <button type="submit" name="submit">Enviar</button><br>
        </form>
    </body>
</html>