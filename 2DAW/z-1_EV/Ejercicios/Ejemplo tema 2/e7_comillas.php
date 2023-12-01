<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Uso de comillas dobles y simples</title>
			<meta charset="UTF-8">
			<meta name="description" content="Pruebas con comillas">
			<meta name="author" content="Laura">
	</head>
	<body>
		<p> Hola Mundo 2</p>
		<?php 
		/*
		$saludo = 'Buenos días';
		$nombre= 'pepe';
		//Muestra el mensaje: Buenos días el $nombre es 'pepe'
		//utilizando solo comillas simples.
		//utilizando solo comillas dobles.
		
		//Muestra el mensaje: Buenos días el $nombre es "pepe"
		//utilizando solo comillas simples.
		//utilizando solo comillas dobles.
		*/
		$saludo = 'Buenos días';
		$nombre= 'pepe';
		
		//Muestra el mensaje:  	Buenos días el $nombre es 'pepe'
		echo $saludo. ' el $nombre es \''. $nombre . '\'<br>';//utilizando solo comillas simples.
		echo "$saludo el \$nombre es '$nombre'<br>";//utilizando solo comillas dobles.
		
		//Muestra el mensaje: Buenos días el $nombre es "pepe"
		echo $saludo. ' el $nombre es "'. $nombre . '"<br>';//utilizando solo comillas simples.
		echo "$saludo el \$nombre es \"$nombre\"<br>";//utilizando solo comillas dobles.
		
		
		$alumnos = array();
		$alumnos[0] = 'pepe';
		echo "$alumnos[0] <br>";
		echo "{$alumnos[0]} <br>";
		?>
	</body>
</html>