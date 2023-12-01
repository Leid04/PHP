

<?php
	
	function saludo(){
		switch(func_num_args()){
			case 0: $mensaje = "Buenos días";
					$persona = "Pepe";
					break;
			case 1:	$persona = func_get_arg(0);
					$mensaje = "Buenos días";
					break;
			case 2: $persona = func_get_arg(0);
					$mensaje = func_get_arg(1);
					break;
		}
		
		echo "$mensaje $persona<br>";
	}
	saludo();
	saludo("Eva");
	saludo("Juan", "Buenos tardes");
	
?>
