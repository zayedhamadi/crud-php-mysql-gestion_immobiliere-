<?php
class immobilier
{
    protected $reference, $proprietaire,
        $localite, $surface, $nbPieces, $domaineUsage;

    function __construct($r, $p, $l, $s, $nb, $du)
    {
        $this->reference = $r;
        $this->proprietaire = $p;
        $this->localite = $l;
        $this->surface = $s;
        $this->nbPieces = $nb;
        $this->domaineUsage = $du;
    }

    /**
     * Get the value of reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     */
    public function setReference($reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     */
    public function setProprietaire($proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get the value of localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set the value of localite
     */
    public function setLocalite($localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get the value of surface
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     */
    public function setSurface($surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of nbPieces
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * Set the value of nbPieces
     */
    public function setNbPieces($nbPieces): self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get the value of domaineUsage
     */
    public function getDomaineUsage()
    {
        return $this->domaineUsage;
    }

    /**
     * Set the value of domaineUsage
     */
    public function setDomaineUsage($domaineUsage): self
    {
        $this->domaineUsage = $domaineUsage;

        return $this;
    }
}
