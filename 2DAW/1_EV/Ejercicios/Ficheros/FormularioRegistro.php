<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario de Registro</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="user">Nombre de Usuario:</label>
            <input type="text" id="user" name="user" pattern="[a-zA-Z0-9]+" required>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
<?php
    $user = htmlspecialchars(trim($_POST["user"]));
    $fecha = date("d/m/Y H:i:s");

    $linea = "$fecha;$user\n";
    file_put_contents('registro_entrada.txt', $linea);
?>