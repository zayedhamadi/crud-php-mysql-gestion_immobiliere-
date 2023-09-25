<?php
require_once "CrudAppartement.php";
$crud = new crudAppartement();
$ref = $_GET['ref'];
$crud->delete($ref);
header("location:findAllAppartement.php");
