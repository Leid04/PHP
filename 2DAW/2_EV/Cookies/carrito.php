<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $carrito = $_POST['prod'];
    echo "Mi carrito: <br>";
    foreach($carrito as $cosa){
      echo "$cosa<br>";
    }
  }
?>