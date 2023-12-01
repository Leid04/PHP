<?php
    //1. Una función que ordena un array numérico y otra que ordena un array de strings
    function orderArray(&$numeros){
        sort($numeros);
    }
    function orderCadenas(&$cadenas){
        sort($cadenas);
    }
    $numeros = [2,56,1,24];
    $cadenas = ["Hola", "Adios", "Tres"];    
    orderArray($numeros);
    orderCadenas($cadenas);
    print_r($numeros);
    print_r($cadenas);
    
    //2. Una función para sumar todos los valores de una matriz.
    function sumarValores($num){
        $resultado = 0;
        foreach($num as $x){
            $resultado += $x;
        }
        return $resultado; // o tambien array_sum(numeros1);
    }
    $numeros1 = [2,6,1,2];
    $suma = sumarValores($numeros1);
    echo "La suma es: $resultado";

    //3. Función para imprimir cuadrícula 11x7
    function impCuadricula($h, $v){
        for($i = 0; $i < $v; $i++){
            for($y = 0; $y < $h; $y++){
                if($y == $h-1){
                    echo "-<br>";
                }else {
                    echo "- ";
                }
            }
        }
    }
    impCuadricula(11,7);

    //4. Una función para calcular el valor promedio de los elementos de matriz.
    function fpromedio($n){
        return (array_sum($n)/count($n));
    }
    $numeros2 = [1,2,5,2];
    $promedio = fpromedio($numeros2);
    echo "Promedio es: $promedio";

    //5. Una función para probar si un array contiene un valor específico.
    function existe($numeros3, $n){
        $existente = false;
        foreach($numeros3 as $x){
            if($x == $n){
                $existente = true;
            }
        }
        return $existente;//tambien sirve con in_array($valor, $array);
    }
    $numeros3 = [2,61,21];
    $existeNumero = existe($numeros3, 2);
    if($existeNumero){
        echo "El numero si existe";
    }else{
        echo "El numero no existe";
    }

    //6. Una función para encontrar el índice de un elemento de un array. Dado su value que encuentre su índice numérico.
    function encIndice($array, $value){
        $encontrado = false;
        for($i = 0; $i < count($array); $i++){
            if($array[$i] == $value){
                $encontrado = true;
                break;
            }
        }
        if($encontrado){
            echo "Indice es: $i";
        }else{
            echo "No encuentro el indice de $value";
        }
    }
    $numeros4 = [2,67,1];
    encIndice($numeros4, 1);

    //7. Una función para eliminar un elemento específico de un array. Dado su value, que elimine del array el elemento.
    function eliminarElemento(&$array, $element){
        foreach($array as $clave =>$valor){
            if($valor === $element){
                unset($array[$clave]);
            }
        }
    }
    $array = [13,41,6,2];
    $nArray = eliminarElemento($array, 13);
    print_r($nArray);

    //8. Una función para copiar una matriz iterando la matriz.
    function copiar($array, &$copia){
        foreach($array as $x){
            $copia[] = $x;
        }
    }
    $numeros5 = [2,5,2,5];
    $copia = [];
    copiar($numeros5, $copia);
    print_r($copia);

    //9. Una función para insertar un elemento en una posición específica de un array.
    function insElemento($array, $ind, $elem){
        array_splice($array, $ind, 0, $elem);//array, donde, 0 eliminamos, elemento
        return $array;
    }
    $numeros6 = [1,2,3,4];
    $numeros7 = insElemento($numeros6, 2, 6767);
    print_r($numeros7);

    //10. Una función para encontrar el valor máximo y mínimo de un array.
    function maxMin($array){
        $maximo = max($array);
        $minimo = min($array);
        return ["maximo"=>$maximo, "minimo"=>$minimo];
    }
    $numeros8 = [1,6,2,6,2];
    $resultado = maxMin($numeros8);
    print_r($resultado);
?>