<?php
    //Añade una constante llamada PI con el valor de π a la 
    //clase Circulo y úsala en los métodos para calcular el área y la perimetro.
    class Circulo{
        const PI = M_PI;
        public $radio;
        function __construct($radio){
            $this->radio = $radio;
        }
        function calcularArea(){
            return $this::PI * ($this->radio * $this->radio);
        }
        function calcularPerim(){
            return 2 * $this::PI * $this->radio;
        }
    }
    $circulo1 = new Circulo(23);
    $circulo2 = new Circulo(25);

    echo "El area del circulo es: {$circulo1->calcularArea()} <br>";
    echo "El perimetro del circulo es: {$circulo2->calcularPerim()}";
?>