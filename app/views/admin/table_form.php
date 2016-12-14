<h3>Modification membre n°<?php if(isset($membre_edit[0]->id)) { echo $membre_edit[0]->id; }?></h3>

<table class="admin-table-gestion">
  <form class="form-signin" action="admin.php?p=confirm_update&id=<?php if(isset($membre_edit[0]->id)) { echo $membre_edit[0]->id; }?>" method="POST">
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
      <?php if ($_GET['p'] === 'edit_table' && isset($membre_edit)){
          foreach($membre_edit as $data) :
             require 'content.php';
          endforeach;
      }?>
  </form>
</table>