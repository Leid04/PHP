<?php
//Crear una función que reciba un número y calcule su factorial.
//Si el número facilitado es mayor de 20 devolverá false.

    function factorial($numero){
        if($numero > 20){
            if($numero == 1){
                return 1;
            }else{
                return $numero * factorial($numero-1);
            }            
        }else {
            return false;
        }

    }

?>