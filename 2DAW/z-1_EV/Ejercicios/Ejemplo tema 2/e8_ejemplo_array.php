<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Uso de array simple</title>
			<meta charset="UTF-8">
			<meta name="description" content="Pruebas con array">
			<meta name="author" content="Laura">
	</head>
	<body>
		<p> Hola Mundo 2</p>
		<?php 
		/* ejemplo arrays */
	
		$alumnos = array();
		$alumnos[0] = 'pepe';
		$alumnos[1] = 'ana';
		$alumnos[2] = [1,2,3];
		echo "$alumnos[0] <br>";
		echo "{$alumnos[0]} <br>";
		//echo "$alumnos <br>";
		echo '<pre>';
		print_r($alumnos);
		
		var_dump($alumnos);
		echo '</pre>';
		
		
		?>
	</body>
</html>