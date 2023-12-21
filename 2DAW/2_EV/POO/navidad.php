<?php
    class Regalo{//Falta lo de unica la referencia y la constante
        private $referencia, $descripcion, $edadDesde;
        function __construct($referencia, $descripcion, $edadDesde = 0){
            if($referencia === 'A00000'){
                $this->referencia = $referencia;
                $this->edadDesde = 0;
                $this->descripcion = 0;
            }else{  
                if(strlen($referencia) < 6){
                    echo "No puedo asignar la referencia, ya que es menor que 6";
                }else{
                    $this->referencia = $referencia;
                    echo "La referencia es: $referencia";
                }
                $this->descripcion = $descripcion;
                if(is_numeric($edadDesde)){
                    $this->descripcion = $descripcion;
                    echo "La descripcion es: $descripcion";
                }else{
                    echo "Tienes que proporcionar edad en número.";
                }
            }            
        }
        function getDescripcion(){
            return $this->descripcion;
        }
        function getEdadDesde(){
            return $this->edadDesde;
        }
    }
//---------------------------------------------------------------------------------------------------------------------------------
    class Persona{
        private $edad, $nombre, $esBuena, $regalo;
        function __construct($nombre, $anioNac, $esBuena, $regalo = null){
            //Validaciones
            if((is_integer($anioNac)) && (strlen(strval($anioNac)) == 4)){
                $this->edad = intval(('Y') - $anioNac);
            }else{ echo "Tienes que proporcionar un año de nacimiento válido, ej: 2004";}

            if(is_bool($esBuena)){
                $this->esBuena = $esBuena;
            }else{ echo "Introduce bien si es buena o no, tiene que ser un boolean.";}

            $this->nombre = $nombre;
            $this->regalo = $regalo;
        }

        function abrirRegalo(){
            echo "$this->nombre tiene $this->edad años, 
            se ha portado" . ($this->esBuena)? "bien" : "mal" . " y ha recibido 
            {$this->regalo->getDescripcion}";
        }

        function setRegalo(Object $regalo){ $this->regalo = $regalo; }
        function getEdad(){     return $this->edad; }
        function getNombre(){   return $this->nombre;}
        function getEsBuena(){  return $this->esBuena;}
    }
//---------------------------------------------------------------------------------------------------------------------------------
    class Santa{
        private $regalos;
        function __construct(){
            $this->crearRegalos();
        }
        function crearRegalos(){
            $this->regalos = [
                new Regalo('A12345', 'Puzle', 6),
                new Regalo('B12222', 'Peluche', 0),
                new Regalo('C99999', 'Nintendo Switch', 12),
                new Regalo('D88888', 'Libro de Roald Dahl', 8),
                new Regalo('E992211', 'Libro de Stephen King', 18)
            ];
        }
        function repartirRegalos(Array $personas){
            foreach($personas as $persona){
                $esBuena = ($persona->getEsBuena())? true : false;
                if($esBuena){
                    $edadPersona = $persona->getEdad();
                    do{
                        $regalo = $this->regalos[array_rand($this->regalos)];
                        $edadRegalo = $regalo->getEdadDesde();
                    }while($edadPersona < $edadRegalo);
                    $persona->setRegalo($regalo);
                }else{
                    $regalo = new Regalo('A00000', 'Sin regalo', 0);
                }
            }
        }
    }
//---------------------------------------------------------------------------------------------------------------------------------
    $santa = new Santa();
    $personas = [
        new Persona("Marta", 2010, true),
        new Persona("Luis", 2000, false),
        new Persona("Rocío", 1983, true),
        new Persona("Ana", 1970, true),
        new Persona("Lucas", 2020, true)
    ];
    $santa->repartirRegalos($personas);

    foreach($personas as $persona){
        $persona->abrirRegalo();
    }
?>
