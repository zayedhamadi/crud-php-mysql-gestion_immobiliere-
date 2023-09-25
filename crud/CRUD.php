<?php
require_once "config.php";
abstract class CRUD
{
    protected $table;
    protected $cnx; // un objet pdo
    function __construct()
    {
        $pdo = new config();
        $this->cnx = $pdo->getConnexion();
    }

    function find($ref)
    {
        $sql = "select * from " . $this->table . " where reference=$ref";
        $res = $this->cnx->query($sql);
        return ($res->fetch(PDO::FETCH_NUM));
    }
    function findAll()
    {
        $sql = "select * from "  . $this->table;
        $res = $this->cnx->query($sql);
        return ($res->fetchAll(PDO::FETCH_NUM));
    }
    function delete($ref)
    {
        $sql = "delete from " . $this->table . " where reference=$ref";
        $res = $this->cnx->exec($sql);
        return ($res);
    }
}
