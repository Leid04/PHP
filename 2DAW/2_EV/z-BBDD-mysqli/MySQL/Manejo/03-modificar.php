<?php //Procura de verificar la conexion, aqui solo vemos como modificar.
  echo '<pre>';
    $conexion = new mysqli('localhost', 'denys', '', 'pruebas');

    $update = 'UPDATE users 
               SET name = "alex2"
               WHERE id = 8';
    $delete = 'DELETE from users WHERE id = 10';

    $resultadoUpdate = $conexion->query($update);
    $resultadoDelete = $conexion->query($delete);

    echo ($resultadoUpdate)?"Actualización exitosa." : "Error en la actualización: " . $conexion->error;
    echo ($resultadoDelete)?"Eliminacion exitosa." : "Error en la eliminacion: " . $conexion->error;

    $conexion->close();
  echo '</pre>';
?>
