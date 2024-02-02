<?php
class conectaBD{ 
  private $conn = null;
  function __construct($database="ferreteria"){ 
    $dsn ="mysql:host=localhost;dbname=$database";
    try {$this->conn = new PDO($dsn,'denys','');} 
    catch (PDOException $e){die( "Error: {$e->getMessage()} <br/>");}
  }
  function insertaFila($name,$address,$cp){
    $datos = [':par1'=>$name, ':par2'=>$address, ':par3'=>$cp];
    $sql   = 'INSERT INTO ferreteria (name, address, cp)
              VALUES (:par1, :par2, :par3)';
    $res   = $this->conn->prepare($sql);
    return $res->execute($datos);
  }
  function borraFerreteria($id){
    $datos = [':par1'=>$id];
    $sql   = 'DELETE FROM empleados WHERE id = :par1' ;
    $res   = $this->conn->prepare($sql);
    return $res->execute($datos);
  }
  function __destruct(){ $this->conn = null; }
}
$ferreteria = new conectaBD("ferreteria");