<?php
echo '<pre>';
print_r($_GET);
echo '</pre>';
	echo 'Hola '. $_GET['nombre'];
	echo '<br>';
	echo 'Idioma '.  $_GET['idioma'];
	echo '<br>';
	echo 'Asignatura ';
	foreach( $_GET['asignaturas'] as $asignatura){
		echo $asignatura. ' ';
	}
	echo '<br>';

?>