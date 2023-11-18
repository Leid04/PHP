<?php
    if(!empty($_GET['submit'])){
        $nombre = htmlspecialchars(trim($_GET['nombre']));
        $edad = htmlspecialchars(trim($_GET['edad']));
        $salario = htmlspecialchars(trim($_GET['salario']));
        
        if(!empty($_GET['nombre'])){
            if(!preg_match("/[A-Za-zñÑáéíóúÁÉÍÓÚ]{2,20}/", $nombre)){
                $errors[] = "Has de pasar un nombre valido";
            }
        }else{
            $errors[] =  "Has de pasar el nombre por el formulario";
        }
        if(!empty($_GET['edad'])){
            if(!preg_match("/[0-9]{2}/", $edad)){
                echo "Has de pasar una edad valida";
            }
        }else{
            $errors[] =  "Has de pasar el edad por el formulario";
        }
        if(!empty($_GET['salario'])){
            if(!preg_match("/[0-9]{2,4}/", $salario)){
                $errors[] =  "Has de pasar un salario valido";
            }
        }else{
            $errors[] =  "Has de pasar el salario por el formulario";
        }

        if(isset($errors)){
            foreach($errors as $error){
                echo $error;
            }            
        }else{
            require ("empleadosAr.php");
            $empleados[] = [$nombre, $edad, $salario];//añado al empelado como se pide
            foreach($empleados as $empleado){
                echo "Empleado: " . $empleado['nombre'] . " " . $empleado['edad'] . " " .$empleado['salario']; 
            }
        }


    }else{
        echo "Has de pasar los campos requeridos por el formulario";
    }
?>