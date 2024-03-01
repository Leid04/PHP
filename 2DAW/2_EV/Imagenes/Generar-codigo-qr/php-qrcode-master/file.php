<?php
require('php-qrcode-master/lib/full/qrlib.php');

$dir = "temp/";

if (!file_exists($dir)){
    mkdir($dir,0777);

}

$contenido = 'https://www.youtube.com/watch?v=U0udmoQ8uD8&t=3s';
$filename = $dir."test.png";
$level = 'M';
$tamanio = 5;
$framesize = 4;

$contenido2 = 'tel:(+34)635-071-444';
$filename2 = $dir."test2.png";
$level2 = 'M';
$tamanio2 = 5;
$framesize2 = 4;

QRcode::png($contenido,$filename,$level,$tamanio,$framesize);
QRcode::png($contenido2,$filename2,$level2,$tamanio2,$framesize2);
echo '<div>';
echo '<img src="' . $filename . '"/>';
echo '<br>';
echo "Cancion chill youtube";
echo '</div>';

echo '<br>';

echo '<div>';
echo '<img src="' . $filename2 . '"/>';
echo '<br>';
echo $contenido2;
echo '</div>';
