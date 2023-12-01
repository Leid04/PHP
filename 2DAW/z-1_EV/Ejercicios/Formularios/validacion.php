<?php
//nombre, nss, especialista, fecha
if (isset($_POST["nombre"]) {
	$nombre = trim($_POST["nombre"]);
	if (! /*Nombre tiene la longitud necesaria*/) {
		$errors[] ="El nombre no tienen la longitud necesaria";
	}		
} else {
	$errors[] ="Tienes que proporcionar un nombre";
}

//Recuperamos todos los errores
if (isset ($errors)) {
	foreach ($errors as $e) {
		echo "<p style='error'>$e</p><br/>";
	}
} else {
	
	//Muestro los detalles de mi cita
}





