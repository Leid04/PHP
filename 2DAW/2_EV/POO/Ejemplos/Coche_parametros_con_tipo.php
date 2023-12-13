
<?php
    class Coche{
			private $motor;
			private $color;
			//Especificamos que el parámetro tiene que ser de tipo Motor
			public function __construct(Motor $motor, $color){
				$this->motor = $motor;
				$this->color = $color;
			
			}
	}
	
	class Motor{
		private $tipo;
		public function __construct( $tipo){
				$this->tipo = $tipo;
			
			}
	}
	
	$motor = new Motor("gasolina");
	$seat = new Coche($motor, "Blanco");
	echo '<pre>';
	print_r($seat);
	echo '</pre>';
	
	
	//Error, parámetro implícito
	$motor = "gasolina";
	$seat = new Coche($motor, "Blanco");
	echo '<pre>';
	print_r($seat);
	echo '</pre>';
	
	
	
?>

