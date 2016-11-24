<?php
if(!empty($_POST)){
  if ($_GET['p'] === 'edit_table'){
    $action = 'update';
  }
  else if ($_GET['p'] === 'add_table'){
    $action = 'insert';
  }

  $resultat = $models->$action($_GET['id'], [
      'nom' => $_POST['inputNom'],
      'prenom' => $_POST['inputPrenom'],
      'date_naissance' => $_POST['inputDate_naissance'],
      'adresse' => $_POST['inputAdresse'],
      'code_postal' => $_POST['inputCP'],
      'ville' => $_POST['inputVille'],
      'type_contrat' => $_POST['inputContrat'],
      'niveau_etude' => $_POST['inputEtude']
  ], 'membre');
}
if (isset($resultat)){
  ?>
  <div class="alert alert-success">La modification a bien été ajoutée</div>
  <?php
}
?>
<?php if($_GET['p'] === 'edit_table'): ?>
  <h3>Modification n°<?php print $_GET['id'] ?></h3>
<?php elseif($_GET['p'] === 'add_table'): ?>
  <h3>Ajout d'un membre</h3>
<?php endif; ?>

<table class="admin-table-gestion">
  <form class="form-signin" action="" method="POST">
    <tr class="tr-table-admin-gestion">
      <th>Nom</th>
      <th>Prenom</th>
      <th>Date naissance</th>
      <th>Adresse</th>
      <th>Code postal</th>
      <th>Ville</th>
      <th>Etudes</th>
      <th>Contrat</th>
    </tr>
      <?php
        if ($_GET['p'] === 'edit_table'){
            foreach($membre->getMembreByID($_GET['id']) as $data) :
               require 'content.php';
            endforeach;
        }
        else{
            require 'content.php';
        }
      ?>
  </form>
</table>