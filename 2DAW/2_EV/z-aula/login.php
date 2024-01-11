<?php

session_start();
header('Content-Type: application/json');
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

            $data = $_SESSION;
            print_r($data);
            echo json_encode($data);
            //header("Location: principal.php");//Redirecciona porque está todo correcto.
            exit;
        }
    }
    // Si llegamos aquí, significa que no se encontró el usuario
    fclose($users);
    echo json_encode(array("error" => "Usuario no encontrado"));
    //echo ($resultado) ? "<style>form{display: none;}</style>" : "<p>Error de usuario.</p>"; //Oculta el formulario
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