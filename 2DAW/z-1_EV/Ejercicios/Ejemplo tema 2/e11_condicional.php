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
$num = 3;
if ( $num%2 == 0 ) { 
	echo "El número $num es par <br>";
	}
	else { 
		echo "El número $num es impar <br>";
	} 

//otra sintaxis válida para la condicional if.
echo "El número  $num";
if ( $num%2 == 0 ) : ?> 
		es par <br>
<?php	else :?>
		es impar <br>
<?php	endif;
	
	
	
?>

</body>
</html>