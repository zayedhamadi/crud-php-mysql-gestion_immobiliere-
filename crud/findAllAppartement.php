<?php
$title = "La liste des appartements";
ob_start();
require_once "CrudAppartement.php";
$crud = new crudAppartement();
$Lesappartements = $crud->findAll();
?>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Référence</th>
            <th>Propriétaire</th>
            <th>Localité</th>
            <th>Surface</th>
            <th>Nombre de pièces</th>
            <th>Domaine d'usage</th>
            <th>Surface Commune</th>
            <th>Action</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($Lesappartements as $appartement) {
            echo "<tr>";
            foreach ($appartement as $value) {
                echo "<td>$value</td>";
            }
            echo "<td><a href=deleteAppartement.php?ref=" . $appartement[0] . "> Supprimer</a> </td>";
            echo "<td><a href=updateAppartement.php?ref=" . $appartement[0] . "> Edit</a> </td>";

            echo "</tr>";
        }

        echo " </tbody></table>";
        echo "<td><a href=addAppartement.php>Ajouter un nouvel Appartement</a> </td>";
        $container = ob_get_clean();
        include "layout.php";
