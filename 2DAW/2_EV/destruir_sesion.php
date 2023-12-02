<?php
    //Cerrar la sesion.
    session_start();                //1. Iniciarla
    session_destroy();              //2. Destruirla
    header("Location: login.php");  //3. Redirigir al login
?> 