<?php
    require("arrayAnimales.php");
    $fichero = fopen("animales.txt", "a+");
    foreach($animales as $animal){
        $linea = "$animal: tipo {$animal['tipo']}, {$animal['patas']} patas, sonido {$animal['sonido']}";
        fwrite($fichero, $linea);
    }
    fclose($fichero);
?>