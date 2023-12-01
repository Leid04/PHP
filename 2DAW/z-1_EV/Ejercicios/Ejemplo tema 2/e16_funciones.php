

<?php
	//No es correcto poner los parámetros por defecto antes de otros que no lo son.
	function saludo($mensaje = "Buenos días", $persona){
		echo "$mensaje $persona<br>";
	}
	
	saludo("Buenos días", "pepe");
	saludo("Buenas tardes", "ana");
	saludo("Buenos días" , "eva");

echo '<hr>';
	function saludo2($persona, $mensaje = "Buenos días"){
		echo "$mensaje $persona<br>";
	}
	saludo2("pepe");
	saludo2("ana", "Buenas tardes");
	saludo2("eva");
echo '<hr>';

	function saludo3($persona ="pepe", $mensaje = "Buenos días"){
		echo "$mensaje $persona<br>";
	}
	saludo3();
	saludo3("ana", "Buenas tardes");
	saludo3("eva");
?>
