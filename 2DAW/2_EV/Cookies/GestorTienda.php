<?php

function accesoBBDD(){
  $dsn = 'mysql:host=localhost;dbname=tiendazapas';
  $user = 'denys';
  $pass = 'denys';
  return new PDO($dsn, $user, $pass);
}
function listadoProductos(){
  $pdo = accesoBBDD();
  try{
    $sql = "SELECT id, marca, modelo, precio FROM zapatilla";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo "<form action='carrito.php' method='POST'>";
      echo "<select id='prod[]' name='prod[]' multiple style='height: 400px;'>";
        while($datos = $stmt->fetch(PDO::FETCH_ASSOC)){
          echo "<option value='{$datos['id']} - {$datos['marca']} - {$datos['modelo']} - {$datos['precio']}'>
                  {$datos['id']} - {$datos['marca']} - {$datos['modelo']} - {$datos['precio']}
               </option>";
        }
      echo "</select><br><br><br>";
      echo "<input type='submit' value='Enviar'>";
    echo "</form>";
  }catch(PDOException $e){ echo $e->getMessage(); }
}
class Zapatilla{
  public $marca, $modelo, $precio;
  public function __construc($marca, $modelo, $precio){
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->precio = $precio;
  }
}
