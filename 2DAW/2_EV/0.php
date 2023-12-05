<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }

            header {
                background-color: #333;
                color: #fff;
                padding: 10px;
                text-align: center;
            }

            header a {
                color: #fff;
                text-decoration: none;
                margin: 0 10px;
                padding: 5px 10px;
                border-radius: 5px;
            }

            header a:hover { text-decoration: underline; }
            header h1 { margin: 0;}

            main {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(134, 16, 16, 0.1);
            }

            footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px;
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            .contenedor {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();

            $resultado = false;
            if (!empty($_SESSION['nombre']) && !empty($_SESSION['apellido'])) {
                $nombre = $_SESSION['nombre'];
                $apellido = $_SESSION['apellido'];
                $perfil = $_SESSION['perfil'];
                $mensajes = $_SESSION['numMensajes'];
                $resultado = true;
            } else {
                header("Location: login.php");//Reenvía si no se ha iniciado sesión
                exit;
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
        <footer>2023 - Todos los derechos reservados</footer>
    </body>
</html>
