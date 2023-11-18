<?php
    require("arrayAnimales.php");

    $contenido;
    $fichero = fopen("animales.txt", "a+");
    foreach($animales as $animal){
        $linea = "$animal: tipo {$animal['tipo']}, {$animal['patas']} patas, sonido {$animal['sonido']}\n";
        $contenido .= $linea;
    }
    file_put_contents($fichero, $contenido);
?>