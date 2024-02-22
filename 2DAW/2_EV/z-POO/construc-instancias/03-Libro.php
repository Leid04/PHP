<?php
    /*  Crea una clase llamada `Libro` con variables para el título, autor y año de publicación.
        Agrega un método llamado `mostrarDetalles()` que imprima todos estos datos.

        Crea dos instancias de la clase `Libro` con diferentes datos y muestra sus detalles utilizando 
        el método `mostrarDetalles()`.

        Añade dos constantes a la clase `Libro`: `IDIOMA` con el valor 'Español' y `NUMERO_PAGINAS` con un valor fijo. 
        Modifica el método `mostrarDetalles()` para incluir también estos datos.*/
        class Libro{
            public $titulo;
            public $autor;
            public $anioPubli;
            const IDIOMA = "Español";
            const NUMERO_PAGINAS = 233;
        
            function __construct($titulo, $autor, $anioPubli){
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->anioPubli = $anioPubli;
            }
        
            function mostrarDetalles(){
                echo "Título: $this->titulo<br>";
                echo "Autor: $this->autor<br>";
                echo "Año de Publicación: $this->anioPubli <br>";
                echo "Idioma: " . self::IDIOMA . "<br>";
                echo "Número de páginas: " . self::NUMERO_PAGINAS . "<br>";
            }
        }
        
        $libro1 = new Libro("El Señor de los Anillos", "J.R. Tolkien", 2003);
        $libro2 = new Libro("C++ de 0 a PRO", "Alex Cil", 2004);
        
        $libro1->mostrarDetalles();
        $libro2->mostrarDetalles();
?>