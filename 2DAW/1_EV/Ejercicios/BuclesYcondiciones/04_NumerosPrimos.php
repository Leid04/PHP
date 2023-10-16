<?php
    for($i = 1; $i<=100; $i++){
        $y = $i;
        $cont = 0; 
        $cont2 = 0;
        while($y>0){
            if($i % $y == 0){
                $cont++;
            }
            $y--;
        }
        if($cont == 2){
            echo "El numero: " . $i . " es numero primo" . "<br>";
            $cont2 += 1;
        }
        $cont = 0;
    }
?>