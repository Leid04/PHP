<?php
trait CuidadosPlanta {
    function regar(){
        echo "Regando";
    }
    function podar(){
        echo "Podando";
    }
}
trait Jardineria {
    function regar(){
        echo "Regando";
    }
    function plantar(){
        echo "Plantando";
    }
    function podar(){
        echo "Podando";
    }
}
class PlantaInterior{
    use CuidadosPlanta, Jardineria{
        CuidadosPlanta::regar insteadOf Jardineria;
        Jardineria::plantar  insteadOf CuidadosPlanta;
        Jardineria::podar  insteadOf CuidadosPlanta;
    }
}
class PlantaExterior{
    use CuidadosPlanta;
}
$planta1 = new PlantaInterior();
$planta2 = new PlantaInterior();

$planta1->regar();
$planta1->podar();

$planta2->regar();
$planta2->podar();
?>