<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $id = htmlspecialchars(trim($_GET['id']));
  $conn = new mysqli("localhost", "denysRev", "", "ferreteria");
  
  if ($conn->connect_errno) {
    echo "Error en la conexión: " . $conn->connect_error;
  } else {
    $consulta = "
      SELECT id_product, id_store, stock
      FROM store_product
      WHERE id_store = $id;
    ";
    $resultado = $conn->query($consulta);

    if ($resultado) {
      while ($fila = $resultado->fetch_assoc()) {
        echo "ID Producto: " . $fila['id_product'] . "<br>";
        echo "ID Tienda: " . $fila['id_store'] . "<br>";
        echo "Stock: " . $fila['stock'] . "<br>";
      }
    } else {
      echo "Error en la consulta: " . $conn->error;
    }

    $conn->close();
  }
} else {
  echo "Error en el método de envío.";
}
?>
