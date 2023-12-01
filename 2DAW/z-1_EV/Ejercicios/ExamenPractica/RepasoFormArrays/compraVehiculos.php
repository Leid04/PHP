<?php
    $costo_vehiculos = array(
        "Automóvil" => array("Precio" => 20000, "Cantidad" => 5),
        "Motocicleta" => array("Precio" => 8000, "Cantidad" => 10),
        "Bicicleta" => array("Precio" => 5000, "Cantidad" => 20)
    );

    foreach($costo_vehiculos as $vehiculo => $datos){
        $resultado = $datos['Precio']/$datos['Cantidad'];
        echo "El precio de cada $vehiculo es de $resultado euros.";
    }

    // Calcula y muestra por pantalla el precio unitario de cada vehículo . Resultado esperado:
    
    // El precio de cada AUTOMÓVIL es de 4000 euros.

    // El precio de cada MOTOCICLETA es de 800 euros.

    // El precio de cada BICICLETA es de 250 euros.



?>