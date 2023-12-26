<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Denys Revutskyi">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selección de jugadores</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div id="main">
            <form action="funcion.php" method="POST">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (!empty($_POST["jugadores"])) {
                            $jugadores = (int)$_POST["jugadores"];//Recoger numero de jugadores.
                            echo "Seleccionaste $jugadores jugadores.<br><br>";
                        } else {
                            echo "No se seleccionó ningún número de jugadores.";
                        }
                    } else {
                        echo "Error: No se recibió una solicitud POST.";
                    }

                    echo "<input type='hidden' name='jugadores' value='$jugadores'>";//Enviar numero de jugadores.

                    require("constantes.php");
                    for ($i = 1; $i <= $jugadores; $i++) {
                        echo "<label for='jugador[$i]'>Jugador $i:</label>";
                            echo "<input type='text' name='jugador[$i]'><br>";
                        
                        //Mostrar la lista de colores.
                        echo "<input type='color' list='colores[$i]' name='bgColor[$i]'>";
                            echo "<datalist id='colores[$i]'>";
                                foreach (COLORES as $value) {
                                    echo "<option value='$value'>$value</option>";
                                }
                            echo "</datalist><br><br>";
                    }
                ?>
                <button type="submit" id="centrado">A JUGAR!!!</button>
            </form>
        </div>
    </body>
</html>
