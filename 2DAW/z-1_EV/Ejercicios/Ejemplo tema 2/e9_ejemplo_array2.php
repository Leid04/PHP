<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Uso de array numérico</title>
			<meta charset="UTF-8">
			<meta name="description" content="Pruebas con array">
			<meta name="author" content="Laura">
	</head>
	<body>
		<p> Hola Mundo 2</p>
		<?php 
		/* ejemplo arrays */
	
		$array1 = array(); //crea un array vacío
		$array2 = [];//crea un array vacío
		$array3 = [1,2,3]; //crea e inicializa los tres primeros valores
		$array4 = array(1,2,3);//crea e inicializa los tres primeros valores
		
		$array4[3]= 4; //crea el índice 3
		$array4[8]= 5; //crea el índice 8
		$array4[]= 6;  //agrega un elemento, el índice será el mayor más 1: 9
		
		echo '<pre>';
		print_r($array4);
		echo '</pre>';
		
		$array4[9] = null; //elimina solo contenido del elemento 9.
		unset($array4[9]); //elimina el elemento 9 completamente.
		
		echo "Elimina el elemento 9:<br>";
	
		echo '<pre>';
		print_r($array4);
		echo '</pre>';
		$array4[]= 6;  //agrega un elemento, el índice será el mayor asignado más 1: 9.
		echo "Agrega un elemento<br>";

		echo '<pre>';
		print_r($array4);
		echo '</pre>';
		
		
		?>
	</body>
</html>