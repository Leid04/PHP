<?php //Cerrar la sesion.
    session_start();                //1. Inicia
    session_destroy();              //2. Destruye
    header("Location: login.php");  //3. Redirige al login
?> 