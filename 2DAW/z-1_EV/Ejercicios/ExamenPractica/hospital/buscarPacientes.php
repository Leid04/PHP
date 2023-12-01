<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Pacientes - Centro de Salud</title>
</head>
<body>
    <p>Introduce el nombre o número de historial del paciente para buscar.</p>
    <form action="resultadosHistorial.php" method="post">
        <label for="nombre">Tu nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre" pattern="[A-Za-zÁÉÍÓÚñÑáéíóú]{2,20}"><br><br>
        <label for="Nhistorial"></label>
            <input type="number" name="NHistorial" placeholder="Numero de historial medico" patern="[0-9]{10}"><br><br>
        <button type="submit">Enviar</button>    
    </form>
</body>
</html>