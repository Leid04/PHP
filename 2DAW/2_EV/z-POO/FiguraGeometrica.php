<?php
trait PropiedadesGeometricas { public function getColor(){ echo "El color es: ";} }
abstract class FiguraGeometrica{
  protected $color;
  public function __construct($color){ $this->color = $color;}
  public abstract function calcularArea();
}
class Circulo extends FiguraGeometrica{
  protected $radio;
  public function __construct($radio, $color){ 
    parent::__construct($color); 
    $this->radio = $radio;
  }
  public function calcularArea(){ return Pi() * ($this->radio * $this->radio);}
  public function getRadio(){     return $this->radio; } 
  use PropiedadesGeometricas;
}
class Rectangulo extends FiguraGeometrica{
  protected $base, $altura;
  public function __construct($base, $altura, $color){ 
    parent::__construct($color);
    $this->base = $base;
    $this->altura = $altura;
  }
  public function calcularArea(){ return $this->base * $this->altura; }
  public function getBase(){      return $this->base; } 
  public function getAltura(){    return $this->altura; } 
  use PropiedadesGeometricas;
}