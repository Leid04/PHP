<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Denys Revutskyi 2-DAW">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mensajes enviados</title>
        <link rel="stylesheet" href="src/styles/mensajes.css">
        <?php
            session_start();
            
            $resultado = (!empty($_SESSION['mensajesEnviados']))? true : false;//Comprueba si está todo en orden.
            $imprimir = true;
            if(!$resultado){
                "<style>.contenedor{display:none;}</style>";
                echo "<h1>No tienes ningun mensaje enviado.</h1>";
                $imprimir = false;//No me imprimas nada porque no hay mensajes.
            }else{
                $mensajes = $_SESSION['mensajesEnviados'];//Correcto, guardame en una variable los mensajes.
            }
        ?>
    </head>
    <body>
        <div class="contenedor">
            <h1>Tus mensajes enviados son: </h1>
            <table>
                <tr><!--Cabecera general-->
                    <td>De</td>
                    <td>Para</td>
                    <td>Mensaje</td>
                    <td>Fecha</td>
                </tr>
                <?php //Este bucle de aqui me genera tantos mensajes como los haya.
                    if($imprimir){
                        foreach($mensajes as $mensaje){
                            echo "<tr>";
                            foreach($mensaje as $dato){
                                echo "<td>$dato</td>";
                            }
                            echo "</tr>";
                        } 
                    }               
                ?>                
            </table>
        </div>
    </body>
</html>