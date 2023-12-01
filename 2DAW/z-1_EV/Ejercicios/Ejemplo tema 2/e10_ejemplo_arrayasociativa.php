<!DOCTYPE html>
<html lang="es">
	<head>
			<title> Uso de array asociativo</title>
			<meta charset="UTF-8">
			<meta name="description" content="Pruebas con array">
			<meta name="author" content="Laura">
	</head>
	<body>
		<p> Hola Mundo 2</p>
		<?php 
		/* ejemplo arrays asociativos */
	
		$alumno = array( "nombre"=> "pepe",
						 "edad"=> 21,
						 "talla"=>180,
						 "domicilio"=>"calle pez",
						 "idiomas"=>array("inglés","francés", "español"),
						 "pendientes" => false
						 );
	foreach($alumno as $k => $v){			
			echo "$k =>"; 
			if (is_array($v)){
				foreach($v as $contenido){
					echo "<br> $contenido";
				}
			}else{
				echo "$v";
			}
			echo '<br>';
			}
		
		echo "<br> Segunda forma <br>";
		foreach($alumno as $k => $v){			
			echo "$k =>"; 
			if (strcmp($k, "idiomas")==0){
				foreach($v as $contenido){
					echo "<br> $contenido";
				}
			}else{
				echo "$v";
			}
			echo '<br>';
			
		}
		
		
		
		?>
	</body>
</html>