<?php
    trait CuidadosPlanta {
        function regar(){ echo "Regando desde cuidados planta.\n"; }
        function podar(){ echo "Podando desde cuidados planta.\n"; }
    }
    trait Jardineria {
        function regar(){   echo "Regando desde cuidados jardineria.\n"; }
        function plantar(){ echo "Plantando desde cuidados jardineria.\n"; }
        function podar(){   echo "Podando desde cuidados jardineria.\n"; }
    }
    class PlantaInterior{
        use CuidadosPlanta, Jardineria{
            CuidadosPlanta::regar insteadOf Jardineria;
            Jardineria::plantar  insteadOf CuidadosPlanta;
            Jardineria::podar  insteadOf CuidadosPlanta;
        }
        function cuidaInteriores(){
            $this->regar();
            $this->plantar();
            $this->podar();
        }
    }
    class PlantaExterior{
        use CuidadosPlanta{
            Jardineria::regar insteadOf CuidadosPlanta;
        }
        function cuidaExterior(){ $this->regar(); }
    }
?>