<?php
    //Crea una clase base llamada Vehiculo con variables para la marca y el año de fabricación. 
    //Agrega un método llamado mostrarInfo() que imprima estos datos.
    class Vehiculo{
        public $marca;
        public $anioFabricacion;
        function __construct($marca, $anioFabricacion){
            $this->marca = $marca;
            $this->anioFabricacion = $anioFabricacion;
        }
        function mostrarInfo(){
            echo "La marca de vehiculo es: {$this->marca}<br>Año de fabricacion: {$this->anioFabricacion}";
        }
    }
    $vehiculo1 = new Vehiculo("Seat", 2009);
    $vehiculo1->mostrarInfo();
?>