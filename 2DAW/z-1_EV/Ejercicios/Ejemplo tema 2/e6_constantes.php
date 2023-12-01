<?php

/*
Constantes: definición y uso.
*/

define("SOBRESALIENTE", 10);
const NOTABLE = 8;


echo SOBRESALIENTE . '<br>';
echo constant("NOTABLE"). '<br>';

echo defined("SOBRESALIENTE")?" SOBRESALIENTE está definida":"SOBRESALIENTE no está definida";

?>