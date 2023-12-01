<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Denys Revutskyi">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calificaciones</title>
    </head>
    <body>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">
            <label for="id">Id:</label>
                <input type="number" name="id" placeholder="Ejemplo: 1234" pattern="[0-9]{4,4}"><br><br>
            <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" placeholder="Ejemplo: Juan" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ]{2,30}"><br><br>
            <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" placeholder="Ejemplo: Lopez" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ]{2,30}"><br><br>
            <label for="nota">Nota:</label>
                <input type="number" name="nota" placeholder="Ejemplo: 5" pattern="[0-9]{0,10}"><br><br>
            <button type="submit">Añadir</button><br><br>
        </form> 
    </body>
</html>
<?php
    $errores[] = (preg_match("/[0-9]{4,4}/", $_GET['id']))?                       "" :  "La longitud de id o el tipo es incorrecto";
    $errores[] = (preg_match("/[A-Za-záéíóúÁÉÍÓÚñÑ]{2,30}/", $_GET['nombre']))?   "" :  "La longitud de nombre o el tipo es incorrecto";
    $errores[] = (preg_match("/[A-Za-záéíóúÁÉÍÓÚñÑ]{2,30}/", $_GET['apellido']))? "" :  "La longitud de apellidos o el tipo es incorrecto";
    $errores[] = (preg_match("/[0-9]{0,10}/", $_GET['nota']))?                    "" :  "La longitud de nota o el tipo es incorrecto";

    if(!empty($errores)){
        foreach($errores as $error){
            echo "<p style='color:red'>$error</p>";
        }
    }else{
        $id = proteger($_GET["id"]);
        $nombre = proteger($_GET["nombre"]);
        $apellido = proteger($_GET["apellido"]);
        $nota = proteger($_GET["nota"]);
        
        $fichero = fopen("calificaciones.csv", "a+");
        $linea = "$id;$nombre;$apellido;$nota";

        fwrite($fichero, $linea);
        fclose($fichero);
        echo "Se ha añadido correctamente";
        function proteger($valor){//Creo una función por si en futuro para proteger de la inyección se añada más código.  
            //Aquí el código de protección de la inyección si es necesario .
            return htmlspecialchars(trim($valor));
        }                
    }
?>