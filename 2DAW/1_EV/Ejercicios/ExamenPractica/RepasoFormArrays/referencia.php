<?php
    function reemplazo (&$array, &$valor, $clave){
        $array[$clave] = $valor;
    }
    $arr = [1,2,3, "nombre" => "Lucas"];
    reemplazo($arr, "k", 32);
?>