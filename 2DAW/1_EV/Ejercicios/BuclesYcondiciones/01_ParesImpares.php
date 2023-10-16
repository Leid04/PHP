<?php
    echo "Con while" . "<br>";
    $i = 1;
    while($i <= 20){
        if($i % 2 == 0){
            echo "Numero: " . $i . " es par" . "<br>";
        } else{
            echo "Numero: " . $i . " es impar" . "<br>";
        }
        
        $i++;
    }

    echo "Con for" . "<br>";
    for($i1 = 1; $i1 <= 20; $i1++){
        if($i1 % 2 == 0){
            echo "Numero: " . $i1 . " es par" . "<br>";
        } else{
            echo "Numero: " . $i1 . " es impar" . "<br>";
        }       
    }
    
    echo "Con do while" . "<br>";
    $i2 = 1;
    do{
        if($i2 % 2 == 0){
            echo "Numero: " . $i2 . " es par" . "<br>";
        } else{
            echo "Numero: " . $i2 . " es impar" . "<br>";
        }  
        $i2++; 
    }while($i2<=20);
?>