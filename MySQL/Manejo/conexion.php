<?php
  //hostname, username, password y bbdd
  $conexion = mysqli_connect( 'localhost', 'denys', '', 'pruebas' );

  $insert = 'insert into users ( name, email ) values ( "denys", "denys@gmail.com" )';




  echo "<pre>";
  print_r($conexion);
  echo "</pre>";
?>