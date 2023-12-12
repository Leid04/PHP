<?php
    //Añade una constante llamada PI con el valor de π a la 
    //clase Circulo y úsala en los métodos para calcular el área y la circunferencia.
    class Circulo{
        const PI = PI();
        public $radio;
        function __construct($radio){
            $this->radio = $radio;
        }
        function calcularArea(){
            
        }
    }

?>