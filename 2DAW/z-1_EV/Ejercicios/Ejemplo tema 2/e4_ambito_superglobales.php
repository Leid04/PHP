<?php
function ambito(){
	$x = 1; //local
	$y = 2; //local
	echo "Variables locales a la función : <br>";
	echo "x = $x <br>";
	echo "y = $y <br>";
	
	//otra forma de acceder a las variables globales.
	echo "Variables globales desde GLOBALS: <br>";
	echo "x = $GLOBALS[x] <br>"; //10
	echo "y = $GLOBALS[y] <br>"; //20
	global $x, $y;
	echo "Variables globales: <br>";
	echo "x = $x <br>"; //10
	echo "y = $y <br>"; //20
	$x = $x+200;
}
echo "Ambito de las variables<br>";
$x = 10;
$y = 20;
ambito();
	echo "Variables globales : <br>";
	echo "x = $x <br>"; //210
	echo "y = $y <br>"; //20
?>