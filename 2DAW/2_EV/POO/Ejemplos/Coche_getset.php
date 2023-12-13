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
	
	function __get($nombre){
		echo "Entro por get magico <br>";
		return $this->$nombre;
	}
	function __set($nombre, $valor){
		echo "Entro por set magico <br>";
		$this->$nombre = $valor;
	} 
	
}

echo '<pre>';
$seat = new Coche("verde");
echo $seat->color .'<br>';

$seat->velocidad = 80; 
echo $seat->velocidad .'<br>';

$seat->tamanio = 5; 
echo $seat->tamanio .'<br>';
echo '</pre>';
?>