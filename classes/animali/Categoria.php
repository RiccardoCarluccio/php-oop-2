<?php
  require_once __DIR__ . '/../exceptions/ValidationException.php';

  class Categoria {
    protected $razza;
    protected $taglia;
    protected $peso;
    protected $colore;

    /**
     * Get the value of colore
     */ 
    public function getColore()
    {
        return $this->colore;
    }

    /**
     * Set the value of colore
     *
     * @return  self
     */ 
    public function setColore($colore)
    {
      if ($colore === "verde") {
        throw new ValidationException('Colore non valido');
      }

        $this->colore = $colore;

        return $this;
    }
  }
?>