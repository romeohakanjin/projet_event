<h1>Gestion Admin</h1>
<div class="ul-gestion-admin-type-membre">
    <h3>Listes membres</h3>
    <p><a href="admin.php?p=home&page=<?php print $_GET['page'] ?>">Tous les éléments</a></p>
    <p><a href="admin.php?p=home&etat=1">En attente</a></p>
    <p><a href="admin.php?etat=2">Validé</a></p>
    <p><a href="admin.php?p=home&etat=3">Refusé</a></p>
    <p><a href="<?php print $url."&page=".$_GET['page']."&ordre=ASC"?>">Ascendant</a></p>
    <p><a href="<?php print $url."&page=".$_GET['page']."&ordre=DESC"?>">Descendant</a></p>
</div>

<?php
    if (isset($_GET['etat'])){
        include_once ROOT.'\app\views\admin\table_membre_type.php';
    }
    elseif (isset($_GET['etat']) == null){
        include_once ROOT.'\app\views\admin\table_membre.php';
    }
?>
