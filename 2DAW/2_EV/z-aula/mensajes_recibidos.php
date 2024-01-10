<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Denys Revutskyi 2-DAW">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mensajes recibidos</title>
        <link rel="stylesheet" href="src/styles/mensajes.css">
        <?php
            session_start();
            
            $resultado = (!empty($_SESSION['mensajesRecibidos']))? true : false;
            $imprimir = true;
            if(!$resultado){
                "<style>.contenedor{display:none;}</style>";
                echo "<h1>No tienes ningun mensaje recibido.</h1>";
                $imprimir = false;;
            }else{
                $mensajes = $_SESSION['mensajesRecibidos'];
            }
        ?>
    </head>
    <body>
        <div class="contenedor">
            <h1>Tus mensajes recibidos son: </h1>
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