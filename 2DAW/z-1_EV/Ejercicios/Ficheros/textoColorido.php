<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Denys Revutskyi">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enivar Archivo</title>
    </head>
    <body>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
            <input type="color" name="color">
                <input type="color" name="color2">
            <label for="archivo">El archivo: </label>
                <input type="file"    id="archivo" name="archivo" accept=".txt"/>
            <button type="submit" value="Subir">Enviar</button>
        </form>
    </body>
</html>
<?php
    echo "<hr/><pre>";
    const MAX_FILE = 234112;
    const MIME = "text/plain";

    if (!empty($_FILES)) {
        $tamanio_archivo = $_FILES["archivo"]["size"];
        $nombre_archivo = $_FILES["archivo"]["tmp_name"];
        $tipo_archivo = $_FILES["archivo"]["type"];
                
        $errores[] = (($tamanio_archivo<=0) || ($tamanio_archivo>MAX_FILE))?  "Tamaño de archivo incorrecto" : "";
        $errores[] = (($tipo_archivo!=MIME))?                                 "Formato de archivo incorrecto" : "";
                
        if (empty($errores)) {
            $color  = (empty($_POST["color"])?  "#0000FF" : htmlspecialchars(trim($_POST["color"]))); 
            $color2 = (empty($_POST["color2"])? "#0000FF" : htmlspecialchars(trim($_POST["color2"])));
                    
            $iterador = 1;
            $fichero = fopen($nombre_archivo,"r");
            while (!feof($fichero)) {
                $colorPintar = ($iterator % 2 == 0)? $color2:$color;
                echo "<p style='color:$colorPintar;'>";
                echo fgets($fichero);
                echo "</p>";
            }
            fclose($fichero);
        } else {
            foreach ($errores as $e) {
                echo "<p style='color:red;'>$e</p><br>";
            }
        }
    }
    echo "</pre>";
?>