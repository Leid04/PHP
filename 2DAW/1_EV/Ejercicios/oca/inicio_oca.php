<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Denys Revutskyi">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oca</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div id="inicio">
            <form action="seleccion_jugadores.php" method="POST">
                <img src="https://afonicosanonimos.files.wordpress.com/2012/03/el-gran-juego-de-la-oca.jpg" alt="oca"><br><br>
                <p>¿Cuantos jugadores quieres?</p>
                <div id="botones-container">
                    <?php
                        require("constantes.php");
                        for ($i = MIN_JUGADORES; $i <= MAX_JUGADORES; $i++) {
                            echo "<button type='submit' name='jugadores' value='$i'>$i jugadores</button>";
                        }
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>
