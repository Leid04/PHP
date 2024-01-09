<?php
  class ElectrodomesticosDeCalentar {
    private $tMax = 350, $tDes, $tAct;

    public function __construct($tDes, $tAct = 25) {
      $this->tDes = ($tDes <= $this->tMax) ? $tDes : $this->tMax;
      $this->tAct = $tAct;
    }

    public function calentar($grados = 10) {
      while (!($this->tAct == $this->tDes)) {
          if (($this->tAct + $grados) <= $this->tDes) {
            $this->tAct += $grados;
            echo "Temperatura actual es: $this->tAct. <br>";
          } else {
            $diferencial = $this->tDes - $this->tAct;
            $this->tAct += $diferencial;
            echo "No se puede añadir más grados, procedo a sumar el diferencial...<br>";
            echo "Temperatura actual es: $this->tAct. <br>";
          }
      }
      echo "La temperatura ya está alcanzada.<br>";
    }
  }
  //---------------------------------------------------------------------------------------------------------
  class Horno extends ElectrodomesticosDeCalentar {
    public function __construct($tDes, $tAct = 25) {  parent::__construct($tDes, $tAct); }
  }
  //---------------------------------------------------------------------------------------------------------
  class Microondas extends ElectrodomesticosDeCalentar {
      private $tiempo = 1.30;

      public function calentar($grados = 10) {
        $min = $this->tiempo;
        echo "Vamos a calentar microondas por $min minutos.<br>";

        while ($min > 0) {//Investigación -> https://php.net/manual/en/function.usleep.php
          echo "Calentando... <br>";
          usleep(1000000);
          $min--;
        }

        echo "Finalizado. <br>";
      }
  }
  //---------------------------------------------------------------------------------------------------------
  $horno = new Horno(200, 0);
  $microondas = new Microondas(150, 0);

  $horno->calentar(14);
  $microondas->calentar();
?>