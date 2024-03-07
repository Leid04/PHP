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
  session_start();

  function guardarDetallesJugadores($jugadores, $nombres, $colores){
    $_SESSION['jugadores'] = $jugadores;
    $_SESSION['nombres'] = $nombres;
    $_SESSION['colores'] = $colores;
    $_SESSION['turno'] = 1;
  }

  function obtenerDetallesJugadores(){
    $detalles = array();
    if (isset($_SESSION['jugadores'])) {
      $jugadores = $_SESSION['jugadores'];
      $nombres = $_SESSION['nombres'];
      $colores = $_SESSION['colores'];
      for ($i = 1; $i <= $jugadores; $i++) {
        $detalles[] = ['nombre' => $nombres[$i - 1], 'color' => $colores[$i - 1]];
      }
    }
    return $detalles;
  }

  function avanzar($jugador, $posicion, $avance){
    $especial = [1, 5, 9, 14, 18, 23, 27, 32, 36, 41, 45, 50, 54, 59, 63];
    $posicion += $avance;
    if (in_array($posicion, $especial)) {
      $siguiente_oca = $posicion + $avance;
      if (in_array($siguiente_oca, $especial)) { $posicion = $siguiente_oca; }
    }
    return $posicion;
  }

  function tiraDados(){ return (rand(1, 6) + rand(1, 6)); }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["jugadores"])) {
      $jugadores = (int)$_POST["jugadores"];

      guardarDetallesJugadores($jugadores, $_POST["jugador"], $_POST["bgColor"]);

      echo "<p>Se presentan los siguientes jugadores:</p>";
      for ($i = 1; $i <= $jugadores; $i++) {
        echo "<div class='jugador' style='background-color: {$_POST["bgColor"][$i]};'>";
        echo "Jugador $i - Nombre: {$_POST["jugador"][$i]}";
        echo "</div>";
      }

      $_SESSION['jugador'] = $_POST["jugador"];
      $_SESSION['bgColor'] = $_POST["bgColor"];

      if (isset($_POST["tirar_dados"])) {
        $turno = $_SESSION['turno'];
        $avance = tiraDados();
        $posicion_anterior = array_search($turno, $_SESSION['tablero']);
        $nueva_posicion = avanzar($turno, $posicion_anterior, $avance);
        $_SESSION['tablero'][$nueva_posicion] = $turno; 

        echo "<p>Jugador $turno avanzó $avance casillas.</p>";

        if ($nueva_posicion >= 63) {
          echo "<p>Jugador $turno ha ganado!</p>";
        } else { $_SESSION['turno'] = ($turno % $_SESSION['jugadores']) + 1; }
      }

      ?>
      <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
        <input type="hidden" name="turno" value="<?php echo $_SESSION['turno']; ?>">
        <input type="submit" name="tirar_dados" value="Tirar Dados - Jugador <?php echo $_SESSION['turno']; ?>">
      </form>
      <?php

    } else {
      echo "No hay ningún jugador seleccionado.";
      var_dump($_POST["jugador"]);
      var_dump($_POST["bgColor"]);
    }
  } else { echo "No se ha recibido ninguna solicitud POST."; }
  ?>
  </body>
</html>