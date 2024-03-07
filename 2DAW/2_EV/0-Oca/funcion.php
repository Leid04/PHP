<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Denys Revutskyi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de la OCA</title>
    <style>
      .jugador {
        margin: 10px;
        padding: 10px;
        border-radius: 5px;
        display: inline-block;
        border: 2px solid #000;
      }
    </style>
  </head>
  <body>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["jugadores"])) {
          $jugadores = (int)$_POST["jugadores"];

          echo "<p>Se presentan los siguientes jugadores:</p>";
          for ($i = 1; $i <= $jugadores; $i++) {
            $nombreJugador = isset($_POST["jugador"][$i]) ? htmlspecialchars(trim($_POST["jugador"][$i])) : "Sin nombre";
            $colorJugador = isset($_POST["bgColor"][$i]) ? htmlspecialchars(trim($_POST["bgColor"][$i])) : "#ffffff";

            echo "<div class='jugador' style='background-color: $colorJugador;'>";
                echo "Jugador $i - Nombre: $nombreJugador";
            echo "</div>";
          }

          // Función reutilizable para tirar dados
          function tiraDados() {  return (rand(1, 6) + rand(1, 6));}
          
          //El juego
          $tablero = array_fill(1, 63, 0);
          for ($i = 1; $i <= $jugadores; $i++) {
            $avance = tiraDados();
            $tablero[$avance] = $i;
        
            echo "<p>Jugador $i avanzó $avance casillas.</p>";
          }
          
          // Tablero rellenado de valores hasta 63
          echo "<div class='tablero'>";
          foreach ($tablero as $casilla => $jugador) {
            $contenidoCasilla = ($jugador != 0) ? $jugador : $casilla;
            echo "<p style='color:grey'>[ $contenidoCasilla ]</p>";
          }
          echo "</div>";
        } else { echo "No hay ningún jugador seleccionado."; }
      } else { echo "No se ha recibido ninguna solicitud POST."; }
    ?>
  </body>
</html>