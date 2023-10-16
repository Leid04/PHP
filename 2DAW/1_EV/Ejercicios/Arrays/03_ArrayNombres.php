<?php

    $nombres = ["Elena"=>"31","Jacob"=>"41","Ana"=>"39","Ramesh"=>"40"];
    //clasificación en orden ascendente por valor
    asort($nombres);
    //clasificación en orden ascendente por clave
    ksort($nombres);
    //clasificación en orden descendente por valor
    arsort($nombres);
    //clasificación en orden descendente por clave
    krsort($nombres);
?>