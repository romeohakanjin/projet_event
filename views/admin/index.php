<h1>Gestion Admin</h1>
<div class="ul-gestion-admin-type-membre">
    <h3>Liste membre</h3>
    <p><a href="index.php?p=admin">Tous les éléments</a></p>
    <p><a href="index.php?p=admin&etat=1">En attente</a></p>
    <p><a href="index.php?p=admin&etat=2">Validée</a></p>
    <p><a href="index.php?p=admin&etat=3">Refusée</a></p>
</div>
<?php
    if (isset($_GET['etat'])){
        include_once 'table_membre_type.php';
    }
    elseif (isset($_GET['etat']) == null){
        include_once 'table_membre.php';
    }
?>
