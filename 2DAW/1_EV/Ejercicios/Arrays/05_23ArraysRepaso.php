<?php
    //1. Imprimir el primer y último elemento del array.
    $personas = array("Leo", "Johan", "Karol", "Meryem", "Bryan");
    $ultimo = count($personas) - 1;
    echo "$personas[0] y  $personas[$ultimo] . <br>";

    //2. Ordenar el array en orden alfabético.
    $colores = array("rojo", "verde", "azul", "índigo");
    setlocale(LC_COLLATE, 'es_ES.UTF-8'); // Establecer configuración regional
    sort($palabras, SORT_LOCALE_STRING);
    print_r($colores);

    //3. Eliminar los elementos duplicados del array.
    $frutas = array("manzana", "banana", "naranja", "manzana", "uva" , "pera", "naranja");
    $frutasUnique = array_unique($frutas);
    print_r($frutasUnique);

    //4. Contar cuántos estudiantes han aprobado.
    $estudiantes = array("Patrick" => "Aprobado", "María" => "Suspenso", "Carla" => "Aprobado");
    $cont = 0;
    foreach($estudiantes as $x => $y){
        if($y == "Aprobado"){
            $cont++;
        }
    }
    if($cont != 0){
        echo "Han aprobado: $cont personas";
    }else{
        echo "No ha aprobado ninguna persona";
    }

    //5. Calcular el costo total de comprar una banana y dos manzanas.
    function encontrarPrecioFruta($array, $frut){
        foreach($array as $fruta => $precio){
            if($fruta == $frut){
                return $precio;
            }
        }
    }
    $precios = array("manzana" => 0.5, "banana" => 0.25, "uva" => 1.0);
    $precio = encontrarPrecioFruta($precios, "manzana") * 2;
    echo "Dos manzanas cuestan $precio";

    //6. Crear un nuevo array con los nombres de los equipos que tienen más de 2 campeonatos ganados.
    $equipos = array("Madrid" => 3, "Barcelona" => 2, "Valencia" => 1, "Vigo" => 4);
    function encontrarCampeones($array){
        $arrayCampeones = [];
        foreach($array as $pais => $puntos){
            if($puntos >= 2){
                $arrayCampeones[$pais] = $puntos; 
            }
        }
        return $arrayCampeones;
    }
    
    $campeones = encontrarCampeones($equipos);
    if(!empty($campeones)){
        print_r($campeones);
    } else {
        echo "No hay ningún campeón";
    }

    //7. Imprimir los nombres que comienzan con la letra "M". 
    $nombres = array("Juan", "Marsha", "María", "Elena", "Ahmed", "Ling");
    foreach($nombres as $nombre){
        if(substr($nombre, 0, 1) == "M"){
            echo "$nombre <br>";
        }
    }

    //8. Crear un nuevo array con los meses que contienen la letra "r".
    $meses = array("enero", "febrero", "marzo", "abril", "mayo");
    $mesesR = [];
    foreach($meses as $mes){
        if(strpos($mes, "r")){
            $mesesR[] = $mes;
        }
    }
    print_r($mesesR);

    //10. Crear un nuevo array con los nombres de los estudiantes que obtuvieron una calificación "A".
    $calificaciones1 = array("Ahmed" => "A", "María" => "B", "Karol" => "C", "Myrna" => "A", "Luisa" => "A");
    $estudiantes1 = [];
    foreach($calificaciones1 as $nombre => $nota){
        if($nota === "A"){
            $estudiantes1[] = $nombre;
        }
    }
    print_r($estudiantes1);

    //11. Encontrar el estudiante con el promedio de calificaciones más alto.
    $estudiantes = array( 
        "Yusuff" => array("matemáticas" => 90, "historia" => 85, "inglés" => 88), 
        "María" => array("matemáticas" => 92, "historia" => 78, "inglés" => 95), 
        "Carlos" => array("matemáticas" => 88, "historia" => 90, "inglés" => 92) 
    );
    
    $notasEstudiantes = [];
    
    foreach($estudiantes as $nombre => $notas){
        $notasEstudiantes[$nombre] = array_sum($notas) / count($notas);;
    }
    
    $mejorEstudiante = array_keys($notasEstudiantes, max($notasEstudiantes));
    
    echo "El estudiante con el promedio más alto es: " . $mejorEstudiante[0] . " con una nota de " . max($notasEstudiantes);
    
    //12. Encontrar el nombre del empleado con el salario más alto en la empresa.
    function empSalMax($array){
        $salarioMalto = 0;
        $empleado = "";
    
        foreach($array as $nombre => $info){
            if($info["salario"] > $salarioMalto){
                $salarioMalto = $info["salario"];
                $empleado = $nombre;
            }
        }
        return $empleado;
    }
    $empleados = array( 
        "Juan" => array("salario" => 2500, "departamento" => "Ventas"), 
        "María" => array("salario" => 3000, "departamento" => "Marketing"),
        "Karol" => array("salario" => 2800, "departamento" => "Ventas")
    );
    
    $empleadoSalarioMaximo = empSalMax($empleados);
    echo "El empleado con el salario más alto es: " . $empleadoSalarioMaximo;
    
    //13. Contar cuántas veces aparece "manzana" en el array.
    $frutas = array("manzana", "banana", "naranja", "manzana", "uva");

    $cont = 0;
    foreach($frutas as $fruta){
        if($fruta == "manzana"){
            $cont++;
        }
    }
    echo "La palabra manzana aparece en el array $cont veces!";
    //o tambien 
    $veces = array_keys($frutas, "manzana");//devolvera indices, si es mas de uno devuele array de indices.
    $vecesAparece = count($veces);


    //14. Ordenar el array en orden ascendente y luego en orden descendente.
    $notas = array(8, 7, 6, 9, 5);
    sort($notas);
    asort($notas);

    //15. Encontrar el estudiante con el promedio de calificaciones más bajo.
    $estudiantes = array( 
                "Yusuff" => array("matemáticas" => 90, "historia" => 85, "inglés" => 88), 
                "María" => array("matemáticas" => 92, "historia" => 78, "inglés" => 95), 
                "Carlos" => array("matemáticas" => 88, "historia" => 90, "inglés" => 92) );

    function caliMasBaja($array){
        $notaBaja = 100;
        $nombre = "";
        foreach($array as $estudiante => $datos){
            $result = array_sum($datos) / count($datos);
            if($result < $notaBaja){
                $notaBaja = $result;
                $nombre = $estudiante;
            }
            $result = 0;
        }
        return $nombre;
    }

    //16. Calcular el costo total de las compras (precio por cantidad) para cada producto y el costo total de todas las compras.
    $compras = array( "producto1" => array("precio" => 20, "cantidad" => 2),
                    "producto2" => array("precio" => 15, "cantidad" => 5),
                    "producto3" => array("precio" => 10, "cantidad" => 3) );

    function costoTot($array){
        $total = 0;
        foreach($array as $producto){
            $total += $producto['precio'] * $producto['cantidad'];
        }
        return $total;
    }
    
    //17. Calcular el salario promedio para cada departamento y la persona con mayor salario de la empresa.
    $empleados = array( 
        "Juan" => array("salario" => 2500, "departamento" => "Ventas"), 
        "María" => array("salario" => 3000, "departamento" => "Marketing"), 
        "Karol" => array("salario" => 2800, "departamento" => "Ventas"), 
        "Sarah" => array("salario" => 2000, "departamento" => "Marketing")
    );
    
    $promedioDep = [];
    $mayorSalario = 0;
    $persomaMayorSalario = "";
    foreach($empleados as $info) {
        $promedioDep[$info["departamento"]]["total_salarios"] += $info["salario"];
        $promedioDep[$info["departamento"]]["contador"]++;
    } 
        foreach($promedioDep as &$info){
            $info["promedio"] = $info["total_salarios"] / $info["contador"];
            unset($info["total_salarios"], $info["contador"]);
        }
            foreach($empleados as $nombre => $info){
                if($info["salario"] > $mayorSalario){
                    $mayorSalario = $info['salario'];
                    $persomaMayorSalario = $nombre;
                }
            }
    print_r($promedioDep);
    echo "Mayor salario $persomaMayorSalario y su salario es $mayorSalario";
    
    //18. Encontrar el nombre más corto y el nombre más largo en el array.
    $personas = array("Yusuff", "María", "Karol", "Ana", "Linda");
    $largo = $personas[0];
    $corto = $personas[0];
    foreach($personas as $nombre){
        if(strlen($nombre) > strlen($largo)){
            $largo = $nombre;
        }
        if(strlen($nombre) < strlen($corto)){
            $corto = $nombre;
        }
    }
    echo "El nombre más largo es: $largo<br>";
    echo "El nombre más corto es: $corto";


    //19. Contar cuántas veces aparece cada fruta en el array y mostrar el resultado en un nuevo array asociativo.
    $frutas = array("manzana", "banana", "naranja", "manzana", "uva");
    $frutasCantidad = [];
    for($i=0; $i<count($frutas); $i++){
        $contadorFruta = 0;
        for($y=0; $y<count($frutas); $y++){
            if($frutas[$i] === $frutas[$y]){
                $contadorFruta += 1;
            }
        }
        $frutasCantidad[$frutas[$i]] = $contadorFruta;
    }
    //o tambien
    foreach($frutas as $fruta){
        $aparece = array_keys($frutas, $fruta);
        $vecesAparece = count($aparece);
        $frutassss[$fruta] = $vecesAparece;
    }



    print_r($frutasCantidad);

    //20. Crear un nuevo array que contenga los nombres ordenados alfabéticamente.
    $nombres = array("Leo", "María", "Karol", "Álvaro", "Lin");
    setlocale(LC_COLLATE, 'es_ES.UTF-8');
    sort($nombres, SORT_LOCALE_STRING);

    //21. Agregar "Libro4" al principio del array.
    $libros = array("Libro1", "Libro2", "Libro3");
    $librosN = ["Libro4"] + $libros; // tambien array_unshift($frutas, "pera");
    print_r($librosN);

    //22. Calcular el total de ventas multiplicando la cantidad vendida por el precio de cada producto.
    $ventas = array(
        "producto1" => array("precio" => "10",  "ventas" => "4"), 
        "producto2" => array("precio" => "20", "ventas" => "3"), 
        "producto3" => array("precio" => "50", "ventas" => "1"));
    $totalVenta = 0;
    foreach($ventas as $producto){
        $totalVenta += $producto["precio"] * $producto["ventas"];
        echo "Producto $producto ventas: " . $producto["precio"] * $producto["ventas"]. "<br>";
    }
    echo "Total de venta es $totalVenta";

    //23. Crear un nuevo array con los nombres que tienen una longitud de más de 5 caracteres.
    $nombres = array("Alexander", "María", "Simo", "Ana", "Lin");
    $nombresLargos = [];
    foreach($nombres as $nombre){
        if(strlen($nombre) > 5){
            $nombresLargos[] = $nombre;
        }
    }
    print_r($nombresLargos);
    

    //24.Recibe arrays y devuelve solo uno unido.
    function unidos(...$param){
        $nuevo = [];
        foreach($param as $posibleArray){
            if(!is_array($posibleArray)){
                foreach($posibleArray as $k => $v){
                    $nuevo [$k] = $v;
                }
            }else{
                return null;
            }            
        }
        return $nuevo;
    }
?>