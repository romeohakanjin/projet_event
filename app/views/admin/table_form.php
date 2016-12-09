<h3>Modification membre n°<?php print isset($_GET['id']); ?></h3>

<table class="admin-table-gestion">
  <form class="form-signin" action="admin.php?p=confirm_update&id=<?php print isset($_GET['id']); ?>" method="POST">
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