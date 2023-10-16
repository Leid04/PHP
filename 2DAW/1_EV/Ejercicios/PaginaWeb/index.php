<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Mi pagina web</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
            <a href="https://es.freelogodesign.org/"><img id="logo" src="img/logo.jpg" alt="logo"></a><br>
            <a href="inicio.html">Ir al inicio</a><br>
            <a href="contacto.html">Ir al contacto</a><br>         
        </header>
        <?php echo date("d/m/Y");?><!--En la parte del servidor-->
        <table>
            <caption>Esto es una tabla</caption>
            <tr>
              <td>celda 1</td>
              <td>celda 2</td>
              <td>celda 3</td>
            </tr>
            <tr>
                <td>celda 4</td>
                <td>celda 5</td>
                <td>celda 6</td>
            </tr>
        </table>
        <br>
        <form action="post" name="formulario" href="mailto:hege@example.com">
            <input type="text" name="Nombre: " placeholder="Nombre"><br>
            <input type="text" name="Apellidos: " placeholder="Apellidos"><br>
            <input type="text" name="Edad: " placeholder="Edad"><br>
            <input type="button" name="Enviar" value="Enviar"><br>
        </form>
    </body>
    <footer>
        <p>Author: Denys</p>
        <?php echo date("Y");?><!--Servidor-->
    </footer>
</html>