<?php
    $alumnos = [
        "Juan" => array("Matematicas" => 85, "Ciencias" => 90, "Historia" => 75),
        "Maria" => array("Matematicas" => 95, "Ciencias" => 88, "Historia" => 92),
        "Carlos" => array("Matematicas" => 70, "Ciencias" => 80, "Historia" => 65),
        "Laura" => array("Matematicas" => 82, "Ciencias" => 75, "Historia" => 88)];

    function mejorAlumnoAsignatura($asignatura){
        $mejorNombre = "";
        $mejor = 0;
        global $alumnos;
        foreach($alumnos as $nombreAl => $datos){
            foreach($datos as $nombreAs => $valor){
                if($nombreAs === $asignatura){
                    if($valor > $mejor){
                        $mejor = $valor;
                        $mejorNombre = $nombreAl;
                    }
                }
            }
        }
        if(isset($mejorNombre)){
            return null; 
        }else {
            return $mejorNombre;            
        }
    }
?>