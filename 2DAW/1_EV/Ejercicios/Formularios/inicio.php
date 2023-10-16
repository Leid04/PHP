<?php
    if($_POST['usuario'] == 'Raquel' && $_POST['contrasena'] == 1234){
        echo "Hola " . $_POST['usuario'];
    }else{
        echo "Usuario incorrecto";
    }
?>