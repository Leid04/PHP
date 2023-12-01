<?php
    $temperaturas = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76,
                     63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62,
                     62, 65, 64, 68, 73, 75, 79, 73];//Nueva nomenclatura de declaracion de array en PHP
    echo "La temperatura promedio es: " . (array_sum($temperaturas) / count($temperaturas));
    
    $temSinDuplicar = array_unique($temperaturas);
    sort($temSinDuplicar);//ordeno de menor a mayor
    $bajas =  array_slice($temSinDuplicar, 0, 7);//de temperaturas, desde el inicio, coger 7 posiciones
    print_r($bajas);

    $temSinDuplicar = array_unique($temperaturas);
    rsort($temSinDuplicar);//ordeno de mayor a menor
    $altas =  array_slice($temSinDuplicar, 0, 7);//de temperaturas, desde el inicio, coger 7 posiciones
    print_r($altas); 
    //
?>
