<?php
    echo "Con for: " . "<br>";
    $contador = 0;
    for($i = 1; $i<=50; $i++){
        if($i % 2 == 0){
            $contador += $i;
        }
    }
    echo "El resultado es: " . $contador . "<br>";
    echo "Con while: " . "<br>";

    $contador2 = 0;
    $y = 1;
    while($y<=50){
        if($y % 2 == 0){
            $contador2 += $y;
        }
        $y++;
    }
    echo "El resultado es: " . $contador2 . "<br>";    
?>