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
            if(!empty($_POST['nombre'])){
                $nombre = trim($_POST['nombre']);//no elimina del medio, solo principio y final
                if(!preg_match("/^[a-zA-Z]{2,20}$/", $nombre)){
                    $errors[] = "El nombre debe de contener solo letras y espacios, y tener entre 3 y 20 caracteres.";
                }
            } else {
                $errors[] ="Tienes que proporcionar un nombre";
            }
            
            if(isset($_POST['NTS'])){
                $numTarj = $_POST['NTS'];
                if(!preg_match("/[0-9]{14}/", $numTarj)){
                    $errors[] = "Numero de tarjeta tiene que tener una longitud de 14 números de 0 al 9";
                }
            }else{
                $errors[] = "Tienes que proporcionar un número de tarjeta";
            }

            if(isset($_POST['FN'])){
                $fecha = $_POST['FN'];
                if($fecha < (date("Y")-103) && $fecha > date("Y")){
                    $errors[] = "La fecha ha de estar entre" . date('Y') . " y " . date('Y')-103;
                }
            }else{
                $errors[] = "Tienes que proporcionar una fecha de nacimiento";
            }
            if(isset($_POST['FCQ'])){
                $fechaCita = strtotime($_POST['FCQ']);
                if($fechaCita < strtotime('+ 3 days')){
                    $errors[] = "La fecha de la cita ha de ser mayor 3 días que " . $fechaCita;
                }
            }else{
                $errors[] = "Tienes que proporcionar la fecha de la cita";
            }

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

