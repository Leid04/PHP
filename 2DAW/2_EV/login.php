

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $resultado = false;
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(!empty("sumbit")){
                    $user = htmlspecialchars(trim($_POST['user']));
                    $password = htmlspecialchars(trim($_POST['password']));
                    //id_user,password,nombre,apellido
                    
                    $fichero = fopen(__DIR__ . "/files/micsv.csv", "r");
                    while(!feof($fichero)){
                        $linea = fgets($fichero);
                        $datos = explode($linea, ",");
                        if($user === $datos['id_user'] && $password === $datos['password']){
                            //OCULTAR EL FORMULARIO
                            echo "<p>Hola {$datos['nombre']} {$datos['apellido']}</p>";
                            $resultado = true;
                        }
                    }
                    if($resultado){

                    }
                    //Si el usuario no existe y/o la contraseña no es correcta, se mostrará el formulario de nuevo y un mensaje de error
                }else{
                    echo "<h1>No se ha enviado el formulario correctamente.</h1>";
                }
            }
        ?><?php
      if(!$resultado){?>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="formulario">
            <label for="user">Tu usuario: </label>
                <input type="text" name="user"><br><br>
            <label for="password">Contraseña: </label>
                <input type="password" name="password"><br><br>
            <button type="submit">Enviar</button><br>
        </form>
      <?php } ?>
    </body>
</html>

