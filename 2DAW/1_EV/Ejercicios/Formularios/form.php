<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        $especialistas = [
            "Neurólogo",
            "Cirujano",
            "Traumatólogo"
        ];
    ?>
    <form action="alta_cita.php" method="POST">
        <input name="nombre" type="text" placeholder="Nombre" minlength="2" maxlength="20" required><br> 
        <input name="NTS" type="number" placeholder="Num de Tarjeta Sanitaria" minlength="14" maxlength="14" required><br>
        <input name="FN" type="number" placeholder="Fª nacimiento" min="1920" max="2023"><br>
        <input name="FCQ" type="datetime" placeholder="Fª de cita que quiere" required><br><br>

        <label for="condiciones" name="rRadio">Aceptas las condiciones de seguridad:
            <input type="radio" name="condiciones" value="Si" required>Si
            <input type="radio" name="condiciones" value="No" required>No
        </label><br><br>
        
        <p>Médico: </p>
        <select name='select'>
            <?php
                foreach($especialistas as $x){
                    echo "<option value='$x'>$x</option>"; 
                }
            ?>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
