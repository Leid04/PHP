<?php //Cerrar la sesion.
    session_start();                //1. Inicia
    session_destroy();              //2. Destruye
    header("Location: loginFormu.html"); //3. Redirige al login
?> 