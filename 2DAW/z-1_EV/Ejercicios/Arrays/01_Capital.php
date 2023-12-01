<?php
    $ceu = ["Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruselas", 
            "Dinamarca"=>"Copenhague", "Finlandia"=>"Helsinki ", "Francia" => "París", "Eslovaquia"=>"Bratislava", 
            "Eslovenia"=>"Ljubljana", "Alemania" => "Berlín", "Grecia" => "Atenas", "Irlanda" =>"Dublín", 
            "Países Bajos"=>"Ámsterdam", "Portugal"=>"Lisboa", "España"=>"Madrid", "Suecia"=>"Estocolmo", 
            "Reino Unido"=>"Londres ", "Chipre"=>"Nicosia", "Lituania"=>"Vilna", "República Checa"=>"Praga", 
            "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Letonia"=>"Riga", "Malta"=>"Valetta", " Austria" => 
            "Viena", "Polonia"=>"Varsovia"];//Nueva nomenclatura de declaracion de array en PHP

    asort($ceu);//sort a arrays ASOCIATIVOS ordenando solo los valores, ksort para claves.
    foreach ($ceu as $x => $y){
        echo "La capital de $x es $y <br>";
    }
?>