<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>
        <link rel="stylesheet" href="src/styles/header.css">
    </head>
    <body>
        <?php
            session_start();

            if (!empty($_SESSION['nombre']) && !empty($_SESSION['apellido'])) {
                $nombre = $_SESSION['nombre'];
                $apellido = $_SESSION['apellido'];
            } else {
                echo "Sesión no iniciada. Acceso no autorizado.";
            }
        ?>
        <header>
            <div><p>Hola <?php echo "$nombre $apellido" ?></p></div>
        </header>
        <main><div>movidas</div></main>
        <footer>2023 - Todos los derechos reservados</footer>
    </body>
</html>
