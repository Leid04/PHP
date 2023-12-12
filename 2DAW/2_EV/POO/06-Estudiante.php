<?php
    //Estudiante con variables para el nombre, la edad y una lista de materias. 
    //Agrega un método para mostrar todas las materias del estudiante.

    class Estudiante{
        public $nombre;
        public $edad;
        public $materias;

        function __construct($nombre, $edad, $materias){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->materias = $materias;
        }
        function fnVerMaterias(){//Se supone que materia es un array de nombres de la materia.
            echo "Las materias que tiene {$this->nombre}:<br><br>";
            foreach($this->materias as $materia){
                echo "Materia: $materia <br>";
            }
        }
    }
    $materias = [
        "PHP",
        "JS",
        "Despliegue"
    ];
    $estudiante = new Estudiante("Albab", 20, $materias);
    $estudiante->fnVerMaterias();
?>