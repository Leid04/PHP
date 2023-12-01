    <?php
    //Ejercicio 1
    $numero = 55;
    if($numero % 7 == 0){
        echo "Es multiplo de 7";
    } else{
        echo "No es multiplo de 7";
    }

    //Ejercicio 2
    for($i = 0; $i>=-10;  $i--){
        echo $i . "<br>";
    }

    //Ejercicio 3
    $edad = 30;
    if($edad >= 18){
        echo "La persona es mayor de edad";
    } else{
        echo "La persona es menor de edad";
    }

    //Ejercicio 4
    $n = 10;
    while($n > 0){
        echo $n . "<br>";
        $n--;
    }

    //Ejercicio 5
    $diaSemana = "Lunes";
    switch($diaSemana){
        case "Lunes":{
            echo "El dia es Lunes";
        }break;
        case "Martes":{
            echo "El dia es Martes";
        }break;
        case "Miercoles":{
            echo "El dia es Miercoles";
        }break;
        case "Jueves":{
            echo "El dia es Jueves";
        }break;
        case "Viernes":{
            echo "El dia es Viernes";
        }break;
        case "Sabado":{
            echo "El dia es Sabado";
        }break;
        case "Domingo":{
            echo "El dia es Domingo";
        }break;
        default: {
            echo "Dia invalido";
        }
    }

    //Ejercicio 6
    $numero = 0;
    for($i = 1; $i<=100; $i++){
        $numero += $i;
    }
    echo "La suma es " . $numero . "<br>";

    //Ejercicio 7
    $temperatura = 10;
    if($temperatura < 10){
        echo "Hace frio";
    }else if($temperatura > 30){
        echo "Hace calor";
    }else{
        echo "Una temperatura agradable";
    }

    //Ejercicio 8
    $numero1 = 2;
    while($numero1 <= 20){
        echo $numero1 . "<br>";
        $numero1 += 2;
    }

    //Ejercicio 9
    $mes = 1;
    switch($mes){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:{
            echo "Tiene 31 dias";
        }break;
        case 4:
        case 6:
        case 9:
        case 11:{
            echo "Tiene 31 dias";
        }break;
        case 2:{
            echo "Tiene 28 dias";
        }break;
        default: {
            echo "ERROR";
        }
    }

    echo "<br>";
    //Ejercicio 10
    $factorial = 5;
    for($i = $factorial-1; $i>0; $i--){
        $factorial *= $i;
    }
    echo "Resultado es: " . $factorial . "<br>";

    //Ejercicio 11
    $nota = 10;
    if($nota >= 0 && $nota <= 10){
        if($nota >= 5){
            echo "Has aprobado";
        }else{
            echo "Has suspendido";
        }
    }else{
        echo "Nota incorrecta";
    }

    //Ejercicio 12
    $numero2 = 0;
    while ($numero2 <= 50){
        if($numero2 % 2 == 1){
            echo $numero2 . "<br>";
        }
        $numero2++;
    }  

    //Ejercicio 13
    $producto = "Electronica";
    switch($producto){
        case "Electronica":{
            echo "El producto pertenece a la cadegoria de Electronica";
        }break;
        
        case "Ropa":{
            echo "El producto pertenece a la cadegoria de Ropa";
        }break;
        case "Alimentos":{
            echo "El producto pertenece a la cadegoria de Alimentos";
        }break;
        case "Libros":{
            echo "El producto pertenece a la cadegoria de Libros";
        }break;
    }

    //Ejercicio 14
    $suma = 0;
    for($i = 1; $i<=100; $i++){
        $suma += $i;
    }

    //Ejercicio 15
    $hora = 7;
    if($hora >= 7 && $hora <= 9){
        echo "Desayunar";
    } else if($hora >= 12 && $hora <= 14){
        echo "Almorzar";
    }else if($hora >= 19 && $hora <= 21){
        echo "Cenar";
    }else{
        echo "Hora incorrecta";
    }

    //Ejercicio 16
    $numero3 = 0;
    while ($numero3 <= 20){
        if($numero3 != 13){
            echo $numero3 . "<br>";
        }
        $numero3++;
    }
    //Ejercicio 17
    $mes1 = "enero";
    switch($mes1){
        case "diciembre":
        case "enero":
        case "febrero":{
            echo "Invierno";
        }break;
        case "marzo":
        case "abril":
        case "mayo":{
            echo "primavera";
        }break;
        case "junio":
        case "julio":
        case "agosto":{
            echo "verano";
        }break;
        case "septiembre":
        case "octubre":
        case "noviembre":{
            echo "otoño";
        }break;
        default: {
            echo "ERROR ";
        }
    }

    //Ejercicio 18  
    $array = array(3,4,5,2,2);
    $resultado = 0;
    foreach($array as $x){
        $resultado += $x;
    }
    echo "El promedio es: " . ($resultado / count($array));

    //Ejercicio 19
    $calificacion1 = 60;
    switch($calificacion1 >=93 && $calificacion1 <= 100){
        case $calificacion1 >= 90: {
            echo "A";
        }break;
        case $calificacion1 >= 80: {
            echo "B";
        }break;
        case $calificacion1 >= 70: {
            echo "C";
        }break;
        case $calificacion1 >= 60: {
            echo "D";
        }break;
        default: {
            echo "F";
        }

    }
    //Ejercicio 20
    $numero4 = 1;
    while($numero4 <= 100){
        if($numero4 % 3 == 0 && $numero4 % 5 == 0){
            echo $numero4 . " ";
        }
        $numero4++;
    }
?>