<?php

require_once "CRUD.php";
require_once "appartement.php";
class crudAppartement  extends CRUD
{
    protected $table = "appartement";


    function add(appartement $obj)
    {
        $r = $obj->getReference();
        $p = $obj->getProprietaire();
        $l = $obj->getLocalite();
        $s = $obj->getSurface();
        $nb = $obj->getNbPieces();
        $du = $obj->getDomaineUsage();
        $sc = $obj->getSurfaceCommune();

        $sql = "insert into appartement values($r,'$p','$l',$s,$nb,'$du',$sc)";
        $res = $this->cnx->exec($sql);
        return ($res);
    }
    function update(appartement $obj)
    {
        $r = $obj->getReference();
        $p = $obj->getProprietaire();
        $l = $obj->getLocalite();
        $s = $obj->getSurface();
        $nb = $obj->getNbPieces();
        $du = $obj->getDomaineUsage();
        $sc = $obj->getSurfaceCommune();

        $sql = "update appartement  set
                      proprietaire='$p',
                      localite='$l',
                      surface=$s,
                      nbPieces=$nb,
                      domaineUsage='$du',
                      surfaceCommune=$sc where reference=$r";
        try {
            $res = $this->cnx->exec($sql); //$res est entier
            return ($res);
        } catch (PDOException $e) {
            $res = "problème de mise à jour" . $e->getMessage();
            return ($res);
        }
    }
}
