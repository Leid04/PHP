<?php
    session_start();
    var_dump($_SESSION);
    echo "<h1>Hola {$_SESSION['nombre']} {$_SESSION['apellido']}</h1>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <?php
        session_start();
        $sesion = htmlspecialchars(trim($_SESSION['nombre']));
    ?>
    <body>
        <header>
            <div><?php
                ($sesion)? "<a href='login.php'>Login</a>" : "<p>Hola $sesion</p>";
            ?></div>
        </header>
        <div>
            movidas
        </div>
        <footer> 2023 - Todos los derechos reservados</footer>
    </body>
</html>