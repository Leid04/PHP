<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta cita</title>
    </head>
    <body>
        <p>Los datos de la cita son: </p><br>
        <?php
            if (isset($_POST['nombre'])){
                $nombre = trim($_POST['nombre']);
                if (strlen($nombre) > 20) {
                    $errors[] ="El nombre no tienen la longitud necesaria";
                }
                
            } else {
                $errors[] ="Tienes que proporcionar un nombre";
            }
            

            //poner mas validaciones




            if (isset($errors)) {
                foreach ($errors as $e) {
                    echo "<p style='error'>$e</p><br/>";
                }
            } else {
                printf("Nombre: %'-20s<br>", strtoupper($_POST['nombre']));
                printf("NSS: %020d<br>", $_POST['NTS']);
                printf("Fecha: %s<br>", $_POST['FCQ']); 
                printf("Médico: %'-20s<br>", strtoupper($_POST['select']));
                echo "Fecha nacimiento: " . $_POST['FN'] . "<br>";
                echo "Condiciones: " . $_POST['condiciones'] . "<br>";                
            }
        ?>
    </body>
</html>