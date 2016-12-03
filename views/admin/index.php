<?php
$url = 'p=home';
if(isset($_GET['etat'])){
    $url = 'admin.php?'.$url.'&etat='.$_GET['etat'];
}
else if(!isset($_GET['etat'])){
    $url = 'admin.php?'.$url;
}
?>

<h1>Gestion Admin</h1>
<div class="ul-gestion-admin-type-membre">
    <h3>Liste membre</h3>
    <p><a href="admin.php?p=home">Tous les éléments</a></p>
    <p><a href="admin.php?p=home&etat=1">En attente</a></p>
    <p><a href="admin.php?p=home&etat=2">Validée</a></p>
    <p><a href="admin.php?p=home&etat=3">Refusée</a></p>
    <p><a href="<?php print $url ?>&ordre=ASC">Ascendant</a></p>
    <p><a href="<?php print $url ?>&ordre=DESC">Descendant</a></p>
</div>


<?php
include_once("../app/Database.php");
?>
<link rel="stylesheet" href="../public/css/style.css" type="text/css" />
<table align="center" width="50%"  border="1">
    <tr>
        <td>
            <table align="center" border="1" width="100%" height="100%" id="data">
                <?php
                $pag = new Paging();
                $data = $membre->countMembre();
                $numbers = $pag->Paginate($data,6);
                $result = $pag->fetchResult();
                foreach($result as $r){
                    echo '<div>'.$r.'</div>';

                }

                foreach($numbers as $num){ 
                    echo '<a href="classpaging.php?page='.$num.'">'.$num.'</a>';
                }
                ?>
            </table>
        </td>
    </tr>
</table>

<?php
if (isset($_GET['etat'])){
    include_once 'table_membre_type.php';
}
elseif (isset($_GET['etat']) == null){
    include_once 'table_membre.php';
}
?>

<!--<div class="add-button icon-admin-gestion"><a href="admin.php?p=add_table"><img src="../public/images/add.png"></a></div>-->
