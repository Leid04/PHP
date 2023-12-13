<?php
class Coche{
	public $color= "blanco";
	private $velocidad =0;
	
	function __construct($c){
		$this->color = $c;
	}
	function getColor(){
		return $this->color;
	}
	function setColor($valor){
		$this->color = $valor;
	}
	function getVelocidad(){
		return $this->velocidad;
	}
	function setVelocidad($valor){
		if ($valor>=0) {
			$this->velocidad = $valor;
		}
	}
}

echo '<pre>';
$seat = new Coche("verde");
echo $seat->color .'<br>';
$seat->color = "rojo";
echo $seat->color .'<br>';

$seat->setVelocidad(50);
echo $seat->getVelocidad() .'<br>';

var_dump($seat);

//ERROR
$seat->velocidad = 100; 
echo $seat->velocidad .'<br>';

$seat->tamanio = 3; 
echo $seat->tamanio .'<br>';

var_dump($seat);
echo '</pre>';

?>