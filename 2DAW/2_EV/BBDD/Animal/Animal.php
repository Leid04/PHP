<?php
class Animal {
    private $dbConnection;

    private function __construct() {
        $this->dbConnection = new mysqli("localhost", "usuario", "contrasena", "basededatos");
        if ($this->dbConnection->connect_error) {
            die("Error de conexión a la base de datos: " . $this->dbConnection->connect_error);
        }
    }

    public function altaAnimal($nombre, $especie, $edad) {
        $sql = "INSERT INTO animales (nombre, especie, edad) VALUES ('$nombre', '$especie', '$edad')";
        if ($this->dbConnection->query($sql) === TRUE) {
            echo "Animal dado de alta correctamente.";
        } else {
            echo "Error al dar de alta el animal: " . $this->dbConnection->error;
        }
    }

    public function bajaAnimal($id) {
        $sql = "DELETE FROM animales WHERE id = '$id'";
        if ($this->dbConnection->query($sql) === TRUE) {
            echo "Animal eliminado correctamente.";
        } else {
            echo "Error al eliminar el animal: " . $this->dbConnection->error;
        }
    }

    public function __destruct() {
        $this->dbConnection->close();
    }
}
$animalManager = new Animal();
$animalManager->altaAnimal("Luna", "Gato", 3);
$animalManager->bajaAnimal($id);