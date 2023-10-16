<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calificaciones</title>
        <?php require 'header.php';?>
    </head>
    <body>
        <?php
            function nota($N){
                switch($N){
                    case 1:
                    case 2:
                    case 3: 
                    case 4: 
                        echo "Suspenso";
                    break;
                    case 5:
                    case 6: 
                        echo "Aprobado";
                    break;
                    case 7:
                    case 8: 
                        echo "Notable";
                    break;
                    case 9:
                    case 10: 
                        echo "Sobresaliente";
                    break;
                    default: 
                        echo "ERROR DE NOTA";
                }                
            }
        ?>
        <table>
            <tr>
                <td>Programación</td>
                <td>10</td>
                <td><?php nota(10);?></td>
            </tr>
            <tr>
                <td>BBDD</td>
                <td>10</td>
                <td><?php nota(10);?></td>
            </tr>
            <tr>
                <td>Sistemas informáticos</td>
                <td>10</td>
                <td><?php nota(8);?></td>
            </tr>
        </table>
    </body>
    <footer>
        <?php require 'footer.php';?>
    </footer>
</html>