<?php 
    $languages = array(); 
    
    $languages['Python'] = array( 
        "first_release" => "1991",  
        "latest_release" => "3.8.0",  
        "designed_by" => "Guido van Rossum", 
        "description" => array( 
            "extension" => ".py",  
            "typing_discipline" => "Duck, dynamic, gradual", 
            "license" => "Python Software Foundation License"
        ) 
    ); 
    
    $languages['PHP'] = array( 
        "first_release" => "1995",  
        "latest_release" => "7.3.11",  
        "designed_by" => "Rasmus Lerdorf", 
        "description" => array( 
            "extension" => ".php",  
            "typing_discipline" => "Dynamic, weak", 
            "license" => "PHP License (most of Zend engine 
                under Zend Engine License)")
    );
    echo $languages['PHP']['description']['license']; //Obtener la licencia de PHP

    foreach($languages as $lenguaje){
        echo $lenguaje['designed_by']; //Listar el nombre de todos los lenguajes que contiene y su autor
    }
    
    $lenguages['Java'] = array(//Añade el lenguaje Java con todas sus propiedades
        "first_release" => "1995",  
        "latest_release" => "21",  
        "designed_by" => "James Gosling", 
        "description" => array( 
            "extension" => ".java",  
            "typing_discipline" => "Dynamic, weak", 
            "license" => "JAVA License (most of Zend engine 
                 under Zend Engine License)")
    );
?>