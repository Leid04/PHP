<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Denys Revutskyi 2-DAW">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>
        <link rel="stylesheet" href="src/styles/principal.css">
    </head>
    <body>
        <?php
            session_start();

            $resultado = false;
            if (!empty($_SESSION['nombre']) && !empty($_SESSION['apellido'])) {//Comprueba si está todo bien.
                //Guarda valores
                $nombre = $_SESSION['nombre'];
                $apellido = $_SESSION['apellido'];
                $perfil = $_SESSION['perfil'];
                $mensajes = $_SESSION['numMensajes'];
                $resultado = true;
            } else {
                header("Location: login.php");//Reenvía si no se ha iniciado sesión.
                exit;//Y sal.
            }
        ?>
        <header>
            <div class="contenedor">
                <h1>Aula Virtual</h1>
                <a href="mensajes_enviados.php">Mensajes enviados</a>
                <a href="mensajes_recibidos.php">Mensajes recibidos</a>
                <a href="destruir_sesion.php">CERRAR LA SESIÓN</a>
                <p><?php echo ($resultado)? "$nombre $apellido<br>$perfil<br>$mensajes" : "Error de usuario"?></p>
            </div>
        </header>
        <main>
            <div>movidas</div>
        </main>
        <footer>2023 - Denys Revutskyi</footer>
    </body>
</html>