<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Juego de la oca</title>
    </head>
    <body>
        
    </body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jugadores = $_POST["jugadores"];//Recoger a jugadores
        
        $tablero = [
            
        ];

        foreach($jugadores as $jugador){

            $dardo1 = rand(1, 12);
            $dardo2 = rand(1, 12);
            $dardos = $dardo1 + $dardo2;
        
            if($dardos < 63){
                
            }else{
                //Ha ganado tal
            }            
        }

    }
?>