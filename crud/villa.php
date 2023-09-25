<?php
require_once "immobilier.php";
class villa extends immobilier
{
    private $nbEtages;
    function __construct($r, $p, $l, $s, $nb, $du, $nbe)
    {
        parent::__construct($r, $p, $l, $s, $nb, $du);
        $this->nbEtages = $nbe;
    }


    /**
     * Get the value of nbEtages
     */
    public function getNbEtages()
    {
        return $this->nbEtages;
    }

    /**
     * Set the value of nbEtages
     */
    public function setNbEtages($nbEtages): self
    {
        $this->nbEtages = $nbEtages;

        return $this;
    }
}
