<?php
    require("arrayAnimales.php");
    function fnEscribirCSV($nombreArchivo, $datos) {
        $fichero = fopen("animales.txt", "a+");
        foreach($datos as $animal){
            $linea = "$animal: tipo {$animal['tipo']}, {$animal['patas']} patas, sonido {$animal['sonido']}";
            fwrite($fichero, $linea);
        }
        fclose($fichero);
    }
    fnEscribirCSV('animales.csv', $animales);
?>