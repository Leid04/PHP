<?php
    $vehiculos = array(
        "Automóviles" => array(
                                array("Marca" => "Toyota", "Modelo" => "Corolla", "Año" => 2022),
                                array("Marca" => "Honda", "Modelo" => "Civic", "Año" => 2021)
        ),
        "Motocicletas" => array(
                            array("Marca" => "Kawasaki", "Modelo" => "Ninja", "Año" => 2020),
                            array("Marca" => "Harley-Davidson", "Modelo" => "Sportster", "Año" => 2021)
        ),
        "Bicicletas" => array(
                            array("Marca" => "Trek", "Modelo" => "FX 2", "Año" => 2021),
                            array("Marca" => "Giant", "Modelo" => "Trance 3", "Año" => 2022))
    );
    //Muestra por pantalla todos los tipos de vehículos que hay y dentro de cada uno los diferentes vehículos
    foreach($vehiculos as $vehiculo => $lista){
        echo "Vehiculo : $vehiculo <br> ";
        foreach($lista as $info){
            echo "Marca: {$info['Marca']}, <br> Modelo: {$info['Modelo']} <br> Año: {$info['Año']}";
        }
    }
?>