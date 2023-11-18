<?php
    for($i = 1; $i<=100; $i++){
        $operando = $i;
        $divisores = 0; 
        $primos = 0;
        while($operando>0){
            if($i % $operando == 0){
                $divisores++;
            }
            $operando--;
        }
        if($divisores == 2){
            echo "El numero: " . $i . " es numero primo" . "<br>";
            $primos += 1;
        }
        $divisores = 0;
    }
?>