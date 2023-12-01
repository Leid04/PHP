<?php

/*
Ejemplo de paso por referencia y por valor en los parámetros de las funciones.
*/


//Crear una función que reciba un parámetro por valor y le concatene un texto.
function concatenaxValor($cadena){
	$cadena = $cadena . " concatena un texto por valor";
}

//Crear una función que reciba un parámetro por referencia y le concatene un texto.
function concatenaxReferencia(&$cadena){
	$cadena = $cadena . " concatena un texto por referencia";
}

//Crear una variable tipo string.
$texto = "hola";
//Probar las funciones.
concatenaxValor($texto);
echo "$texto <br>";
concatenaxReferencia($texto);
echo "$texto <br>";


?>