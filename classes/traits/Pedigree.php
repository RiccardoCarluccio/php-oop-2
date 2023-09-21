<?php
  trait Pedigree {
    public $pedigree;

    /**
     * Get the value of pedigree
     */ 
    public function getPedigree()
    {
        return $this->pedigree;
    }

    /**
     * Set the value of pedigree
     *
     * @return  self
     */ 
    public function setPedigree($pedigree)
    {
        $this->pedigree = $pedigree;

        return $this;
    }
  }
?>