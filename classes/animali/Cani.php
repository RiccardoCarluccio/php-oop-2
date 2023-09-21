<?php
  require_once __DIR__ . '/Categoria.php';
  require_once __DIR__ . '/../traits/Pedigree.php';

  class Cani extends Categoria {
    protected $specie;

    function __construct($_specie, $_razza, $_taglia, $_peso, $_colore) {
      $this->specie = $_specie;
      $this->razza = $_razza;
      $this->taglia = $_taglia;
      $this->peso = $_peso;
      $this->colore = $_colore;

      use Pedigree;
    }
  }
?>