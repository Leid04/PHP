<?php
  function Connect($config = []){
    return new mysqli($config['host'], $config['username'], $config['password'], $config['database']);
  }
  function Execute($conexion, $sql){ return $conexion->query($sql);}

  function ExecuteQuery($conexion, $sql){
      $resultado = $conexion->query($sql);
  
      if ($resultado === false) { die("Error en la consulta: " . $conexion->error);}
  
      if ($resultado->num_rows > 0) {
        $data = $resultado->fetch_all(MYSQLI_ASSOC);
        print_r($data);
      } else {
        echo "La consulta no devolvió resultados.";
      }
  }
  function Close($conexion){
    mysqli_close($conexion);
    unset($conexion);
  }


?>