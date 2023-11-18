<?php
    $animales = [
        "Pantera" => ["Salto" => 8, "Caza" => 9, "Agilidad" => 7, "Velocidad" =>7], 
        "Tigre" =>   ["Salto" => 7, "Caza" => 8, "Agilidad" => 8, "Velocidad" => 7], 
        "Elefante" =>["Salto" => 5, "Caza" => 2, "Agilidad" => 3, "Velocidad" => 3],
        "Tortuga" => ["Salto" => 0, "Caza" => 2, "Agilidad" => 2, "Velocidad" => 1]
    ];//Calcula el promedio de cada una de las habilidades. El promedio se calcula a 
    //partir de sumar todos los puntos de una habilidad y dividiéndolo entre el total de animales.
    $animales = array(
        "Pantera" => array("Salto" => 8, "Caza" => 9, "Agilidad" => 7, "Velocidad" =>7, "Inteligencia" => 8), 
        "Tigre" => array("Salto" => 7, "Caza" => 8, "Agilidad" => 8, "Velocidad" => 7), 
        "Elefante" => array("Salto" => 5, "Caza" => 2, "Agilidad" => 3, "Velocidad" => 3),
       "Tortuga" => array("Salto" => 0, "Caza" => 2, "Agilidad" => 2, "Velocidad" => 1)
        );
        $habilidades = array();
        foreach ($animales as $a => $habilidad) {
            foreach ($habilidad as $nom_habilidad => $valor) {
                if (empty($habilidades[$nom_habilidad])) {
                   $habilidades[$nom_habilidad] = $valor;
                } else {
                     $habilidades[$nom_habilidad] += $valor;
                    
                }
            }
        }
        
        foreach ($habilidades as $k => $h) {
            echo "Promedio habilidad $k=" .($h/count($animales)) ."<br/>";
        }
              
    //menos veloz y mas cazador
    $masCazador = "Pantera";
    $menosVeloz = "Pantera";
    foreach($animales as $animal => $habilidades){
        if($habilidades['Caza'] > $animal[$masCazador]['Caza']){
            $masCazador = $animal;
        }
        if($habilidades['Velocidad'] < $animal[$menosVeloz]['Velocidad']){
            $menosVeloz = $animal;
        }
    } 
    //mayor promedio en todas las habilidades. 
    $mayorPromedio = 0;
    $animalMayorPromedio = "";
    foreach($animales as $animal => $habilidades){
        $promedio = array_sum($habilidades)/count($habilidades);
        if($promedio > $mayorPromedio){
            $mayorPromedio = $promedio;
            $animalMayorPromedio = $animal;
        }
    }
    echo "El animal con mayor promedio es $animalMayorPromedio";

?>