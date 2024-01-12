<?php
  class Animal{
    private $id, $nombre, $especie, $edad;
    public function __construct($nomb, $esp, $ed) {
      $this->nombre = $nomb;
      $this->especie = $esp;
      $this->edad = $ed;
    }
    public function getId(){ return $this->id;}
    public function getNombre() {
      return "Mi nombre es: $this->nombre, y soy un/a $this->especie.";
    }
    public function getEdad() {
      return "Mi edad es: $this->edad.";
    }
  }
?>