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
        <input name="nombre" type="text" placeholder="Nombre" pattern="[A-Za-z\s]{3,20}" required><br> 
        <input name="NTS" type="text" placeholder="Num de Tarjeta Sanitaria" pattern="[0-9]{14}" required><br><!--text para evitar problemas con los 0-->
        <input name="FN" type="date" placeholder="Fª nacimiento" min="<?php echo date('Y') - 103; ?>" max="<?php echo date('Y'); ?>">
        <input name="FCQ" type="date" min="<?php echo date('d-m-Y', strtotime('+3 days')); ?>" required><br><br>

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
