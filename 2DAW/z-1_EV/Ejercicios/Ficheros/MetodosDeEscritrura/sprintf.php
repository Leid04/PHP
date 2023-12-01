<?php
    require("arrayAnimales.php");

    $fichero = fopen("animales.txt", "a+");

    foreach($animales as $animal => $dato){
        $linea = sprintf("%s;%s;%d;%s\n", ucfirst($nombre), $datos['tipo'], $datos['patas'], $datos['sonido']);
        fwrite($fichero, $linea);
    }
    fclose($fichero);
?>