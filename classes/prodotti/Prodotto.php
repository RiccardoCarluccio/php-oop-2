<?php
  require_once __DIR__ . "/../prodotti/Categoria.php";

  class Prodotto {
    protected $nome;
    protected $marca;
    protected $peso;
    protected $prezzo;
    protected $categoria;

    function __construct($nome, $marca, $peso, $prezzo, Categoria $categoria) {
      $this->setNome($nome);
      $this->setMarca($marca);
      $this->setPeso($peso);
      $this->setPrezzo($prezzo);
      $this->setCategoria($categoria);
    }
  }
?>