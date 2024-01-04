<?php
  function debug(){
    $debug = debug_backtrace();
    echo "<pre>";
      echo $debug[0]['file'] . " " . $debug[0]['line'] . "<br><br>";
    echo "</pre>";
    echo "<br>";
  }
?>