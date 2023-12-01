<?php

echo "Variables por valor y por referencia <br>";
$var1 = 100;
$var2 = 100;
$var3 = &$var2;
echo "Comienzo $var1, $var2, $var3 <br>";
$var2 = 200; 
echo "Asignar: \$var2 = $var2 <br>";
echo "Fin $var1, $var2, $var3 <br>";
unset($var2);
// $var2= null;
echo "var2 = $var2 <br>";
echo "var3 = $var3 <br>";


?>