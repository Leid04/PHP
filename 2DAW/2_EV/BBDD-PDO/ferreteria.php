<?php
class ConectaBD {
  private $conn;

  function __construct($database="ferreteria") {
    $dsn = "mysql:host=localhost;dbname=$database";
    try {
      $this->conn = new PDO($dsn, 'denys', '');
    } catch (PDOException $e) {
      die("Error: {$e->getMessage()} <br/>");
    }
  }

  function listarTiendas() {
    $filas = [];
    $sql = 'SELECT name, address FROM ferreterias';
    $res = $this->conn->query($sql);
    if ($res) {
      $res->setFetchMode(PDO::FETCH_ASSOC);
      while ($r = $res->fetch()) {
        $filas[] = $r;
      }
    }
    return $filas;
  }

  function borrarTienda($id) {
    $datos = [':par1' => $id];
    $sql = 'DELETE FROM ferreterias WHERE id = :par1';
    $res = $this->conn->prepare($sql);
    return $res->execute($datos);
  }

  function crearTienda($name, $address, $cp) {
    $datos = [':par1' => $name, ':par2' => $address, ':par3' => $cp];
    $sql = 'INSERT INTO ferreterias (name, address, cp) VALUES (:par1, :par2, :par3)';
    $res = $this->conn->prepare($sql);
    return $res->execute($datos);
  }
  function __destruct() { $this->conn = null; }
}
$ferreteria = new ConectaBD("ferreteria");
$tiendas = $ferreteria->listarTiendas();
print_r($tiendas);