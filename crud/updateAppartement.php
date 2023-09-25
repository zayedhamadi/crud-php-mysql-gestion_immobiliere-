<?php
$title = "Mise à jour d'un appartement";
ob_start();
require "CrudAppartement.php";
$crud = new crudAppartement();
//1 récupérer la ref de l'url
if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
    // chercher l'appartement de cette ref
    $app = $crud->find($ref); //array()
    print_r($app);
    // afficher les données de cet appartement dans
    // le formulaire update
?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        Référence: <input type="text" readonly name="r" value=<?= $app[0] ?> id=""><br>
        Propriétaire:<input type="text" name="p" value=<?= $app[1] ?> id=""><br>
        Localité:<input type="text" name="l" value=<?= $app[2] ?> id=""><br>
        Surface:<input type="text" name="s" value=<?= $app[3] ?> id=""><br>
        Nbre de Pièces:<input type="text" value=<?= $app[4] ?> name="nb" id=""><br>
        Domaine usage: <input type="text" value=<?= $app[5] ?> name="du" id=""><br>
        Surface Commune: <input type="text" name="sc" value=<?= $app[6] ?> id=""><br>
        <input type="submit" value="Edit" name="ok">
    </form>
<?php
}
if (isset($_POST['ok'])) {
    $appart = new appartement(
        htmlspecialchars($_POST['r']),
        htmlspecialchars($_POST['p']),
        htmlspecialchars($_POST['l']),
        htmlspecialchars($_POST['s']),
        htmlspecialchars($_POST['nb']),
        htmlspecialchars($_POST['du']),
        htmlspecialchars($_POST['sc'])
    );
    $res = $crud->update($appart);
    if ($res == 1)
        header("location:findAllAppartement.php");
    else
        echo "$res";
}
$container = ob_get_clean();
include "layout.php";
