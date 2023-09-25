<?php
require_once "crudAppartement.php";
$crud = new crudAppartement();
$title = "Ajout d'un appartement";
// formulaire de saisie de l'appartement
ob_start();
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    Référence: <input type="text" name="r" id=""><br>
    Propriétaire:<input type="text" name="p" id=""><br>
    Localité:<input type="text" name="l" id=""><br>
    Surface:<input type="text" name="s" id=""><br>
    Nbre de Pièces:<input type="text" name="nb" id=""><br>
    Domaine usage: <input type="text" name="du" id=""><br>
    Surface Commune: <input type="text" name="sc" id=""><br>
    <input type="submit" value="Ajouter" name="ok">
</form>
<?php
if (isset($_POST['ok'])) {
    $app = new appartement(
        htmlspecialchars($_POST['r']),
        htmlspecialchars($_POST['p']),
        htmlspecialchars($_POST['l']),
        htmlspecialchars($_POST['s']),
        htmlspecialchars($_POST['nb']),
        htmlspecialchars($_POST['du']),
        htmlspecialchars($_POST['sc'])
    );
    $crud->add($app);
    header("location:findAllAppartement.php");
}
$container = ob_get_clean();
include "layout.php";
