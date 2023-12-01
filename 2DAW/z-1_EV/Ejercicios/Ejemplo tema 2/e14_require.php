<!DOCTYPE html>
<html lang="es">
<head>
	<title>Laura Pérez</title>
	<meta charset="UTF-8">
	<meta name="author" content="Laura Pérez">
	<meta name="description" content="prueba de validación">
</head>
<body>
	<?php 
	/* Diferencias entre require y require_once. 
	Nos saludará varias veces*/
	require 'e14_saludo.php';
	require 'e14_saludo.php';
	require 'e14_saludo.php';
	require 'e14_saludo.php';
	/* Nos despide una sola vez */
	require_once 'e14_despedida.php';
	require_once 'e14_despedida.php';
	require_once 'e14_despedida.php';
	require_once 'e14_despedida.php';

	
	?>
</body>
</html>