<?php
// Create a 100*30 image
$im = imagecreate(200, 200);
// White background and blue text
$fondo = imagecolorallocate($im, 100, 30, 255);
$textcolor = imagecolorallocate($im, 255, 255, 255);
// Write the string at the top left
imagestring($im, 30, 50, 100, 'Hello world!', $textcolor);
// Output the image
header('Content-type: image/png');
imagepng($im);

