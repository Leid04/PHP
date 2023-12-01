<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
</head>
<body>
    <p>Resultado de Búsqueda - Centro de Salud</p>
    <?php
        if(!empty($_POST['submit'])){
            $nombre = (!isset($_POST['nombre']))? htmlspecialchars(trim($_POST['nombre'])) : "";
            $historial = (!empty($_POST['NHistorial']))? htmlspecialchars(trim($_POST['NHistorial'])) : "";
            if(!empty($nombre) || !empty($historial)){
                require ("pacientes.php");
                foreach($pacientes as $paciente => $datos){
                    if(
                        (empty($nombre) || $nombre === $datos['nombre'])&& 
                        empty($historial) && $historial === $paciente
                    ){
                        echo "Historial: {$paciente} <br>";
                        echo "Nombre: {$datos['nombre']} <br>";
                        echo "Edad {$datos['edad']} <br>";
                        echo "Historial medico {$datos['historial']} <br>";
                    }                    
                }

            }
        }else{
            echo "No has introducido nunún valor. <a href='buscarPacientes.php'>Volver</a>";
        }
        require ("pacientes.php");
        foreach($pacientes as $numero => $datos){
        }
    ?>
</body>
</html>
