<?php
  require_once __DIR__ . '/Categoria.php';

  class Gatti extends Categoria {
    private $razza;
    private $taglia;
    private $peso;
    private $colore;

    function __construct($_razza, $_taglia, $_peso, $_colore) {
      $this->razza = $_razza;
      $this->taglia = $_taglia;
      $this->peso = $_peso;
      $this->colore = $_colore;
    }
  }
?>