<?php
    /*  Crea dos instancias de la clase `Persona` y muestra sus datos utilizando el método `mostrarDatos()`.
        Añade una constante llamada `MAYORIA_DE_EDAD` con el valor 18 a la clase `Persona`. 
        Modifica el método `mostrarDatos()` para que, 
        además de mostrar el nombre y la edad, indique si la persona es mayor de edad o no.
    */
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
        function getNombre(){
            return $this->nombre;
        }
        function getEdad(){
            return $this->nombre;
        }
        const MAYORIA_DE_EDAD = $this->edad >= 18? "Mayor de edad" : "Menor de edad";
    }    
    $franco = new Persona("Franco", "39");
    $leonor = new Persona("Leonor", "18");

    $franco->mostrarDatos();
    $leonor->mostrarDatos();
    
    echo "{$franco->getNombre()} es {$franco::MAYORIA_DE_EDAD}";
?>