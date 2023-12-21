<?php
    /*  Crea una clase llamada `Persona` con las siguientes características:
        - Variables: `nombre` y `edad`.
        - Método: `mostrarDatos()` que imprima el nombre y la edad de la persona.*/
    class Persona{
        public $nombre;
        public $edad;
        function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function mostrarDatos(){
            echo "Mi nombre es: $this->nombre <br> Mi edad es: $this->edad";
        }
    }    
    $persona = new Persona("Franco", "39");
    $persona->mostrarDatos();
?>
