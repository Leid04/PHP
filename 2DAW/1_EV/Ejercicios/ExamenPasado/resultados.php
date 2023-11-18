<?php
    if(empty($_GET['submit'])){
        if(isset($_GET['isbn'])){
            $isbn = htmlspecialchars(trim($_GET['isbn']));
        }else if(isset($_GET['titulo'])){
            $titulo = htmlspecialchars(trim($_GET['titulo']));
        }else if(isset($_GET['autor'])){
            $author = htmlspecialchars(trim($_GET['autor']));
        }
        require ('libros.php');
        $librosEncontrados = [];
        foreach($libros as $libro){
            if(
                ($libro['isbn'] == $isbn && $libro['titulo'] == $titulo && $libro['autor'] == $author) || //si son 3 valores
                ($libro['isbn'] == $isbn && $libro['titulo'] == $titulo)                               || //isbn y titulo
                ($libro['isbn'] == $isbn && $libro['autor'] == $author)                                || //isbn y autor
                ($libro['autor'] == $author && $libro['titulo'] == $titulo)                            || //autor y titulo
                ($libro['isbn'] == $isbn || $libro['titulo'] == $titulo || $libro['autor'] == $author)    //alguno de los tres
            )
            {
                $librosEncontrados[] = $libro;
            }
        }
        echo "Libros encontrados: " . count($librosEncontrados) . " que son: <br>";
        foreach($librosEncontrados as $libro){
            echo "Isbn: "   . $libro['isbn']   . "<br>" . 
                 "Título: " . $libro['titulo'] . "<br>" .
                 "Autor: "  . $libro['autor']  . "<br>";            
        }
    }else{
        echo "No has introducido ningún valor. <a href='buscar.php'>Volver</a>";
    }
?>