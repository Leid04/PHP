<?php
    /*  Crea una clase llamada Matematicas con métodos estáticos para sumar y multiplicar dos números.
        Utiliza los métodos estáticos de la clase Matematicas para realizar operaciones con dos pares de números diferentes.*/
    class Matemeticas{
        public static function Suma($num1, $num2){
            return $num1 + $num2;
        }
        public static function Multiplicar($num1, $num2){
            return $num1 * $num2;
        }
    }
    $mates = new Matemeticas();
    $suma = $mates->Suma(5,1);
    $mult = $mates->Multiplicar(5,2);
  
    echo "La suma de 3 y 7 es: $suma<br>";
    echo "La multiplicacion de 5 y 2 es: $mult<br>";
?>