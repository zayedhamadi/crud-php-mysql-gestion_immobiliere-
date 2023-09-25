<?php
require_once "immobilier.php";
class appartement extends immobilier
{
    private $SurfaceCommune;
    function __construct($r, $p, $l, $s, $nb, $du, $sc)
    {
        parent::__construct($r, $p, $l, $s, $nb, $du);
        $this->SurfaceCommune = $sc;
    }


    /**
     * Get the value of SurfaceCommune
     */
    public function getSurfaceCommune()
    {
        return $this->SurfaceCommune;
    }

    /**
     * Set the value of SurfaceCommune
     */
    public function setSurfaceCommune($SurfaceCommune): self
    {
        $this->SurfaceCommune = $SurfaceCommune;

        return $this;
    }
}
