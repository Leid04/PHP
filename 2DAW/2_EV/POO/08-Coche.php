<?php
    /*  Crea una clase llamada Coche que herede de la clase Vehiculo (ejercicio anterior). 
        Añade variables específicas para el modelo de coche y la cantidad de puertas. 
        Sobrescribe el método mostrarInfo() para incluir también estos datos.

        Crea instancias de la clase Coche y utiliza el método mostrarInfo() para mostrar la información específica de cada coche.

        Crea una clase llamada Moto que herede de la clase Vehiculo. Añade las variables específicas para el tipo de moto y la cilindrada. 
        Sobrescribe el método mostrarInfo() para incluir también estos datos. (Investigar sobreescritura de método)

        Crea instancias dos de la clase Moto y utiliza el método mostrarInfo() para mostrar la información específica de cada moto.*/
    class Vehiculo {
        public $marca;
        public $anioFabricacion;

        function __construct($marca = "POP", $anioFabricacion = "2000") {
            $this->marca = $marca;
            $this->anioFabricacion = $anioFabricacion;
        }

        function mostrarInfo() {
            echo "La marca de vehiculo es: {$this->marca}<br>Año de fabricacion: {$this->anioFabricacion}";
        }
    }

    class Coche extends Vehiculo {//Si herredamos, añadimos constructor padre tambien!
        public $modelo;
        public $numPuertas;

        function __construct($marca, $anioFabricacion, $modelo, $numPuertas){
            parent::__construct($marca, $anioFabricacion);
            $this->modelo = $modelo;
            $this->numPuertas = $numPuertas;
        }

        function mostrarInfo() {
            parent::mostrarInfo();
            echo "<br>Modelo: {$this->modelo}<br>Puertas: {$this->numPuertas}";
        }
    }

    $vehiculo = new Vehiculo("Toyota", "2022");
    $coche = new Coche("Seat", "2020", "Ibiza", 4);

    echo "<h2>Vehículo:</h2>";
    $vehiculo->mostrarInfo();

    echo "<h2>Coche:</h2>";
    $coche->mostrarInfo();
?>