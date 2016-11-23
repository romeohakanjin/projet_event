<?php if(!isset($_GET['ordre'])){
	$_GET['ordre'] = 'ASC';
} ?>
<?php if(!empty($membre->getMembre($_GET['ordre']))):?>
	<table class="admin-table-gestion">
			<tr class="tr-table-admin-gestion">
				<th>id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Date naissance</th>
				<th>Adresse</th>
				<th>Code postal</th>
				<th>Ville</th>
				<th>Etudes</th>
				<th>Contrat</th>
				<th>Modifier</th>
			<!--<th>Supprimer</th>-->
			</tr>
<?php else:echo "Aucun résultat";?>
<?php endif ;?>

	<?php foreach($membre->getMembre($_GET['ordre']) as $membreData) : ?>
		<tr>
			<td><?php print $membreData->id ?></td>
			<td><?php print $membreData->nom ?></td>
			<td><?php print $membreData->prenom ?></td>
			<td><?php print $membreData->date_naissance ?></td>
			<td><?php print $membreData->adresse ?></td>
			<td><?php print $membreData->code_postal ?></td>
			<td><?php print $membreData->ville ?></td>
			<td><?php print $membreData->niveau_etude ?></td>
			<td><?php print $membreData->type_contrat ?></td>
			<td><a href="admin.php?p=edit_table&id=<?php print $membreData->id ?>"><img src="../public/images/update.png" class="icon-admin-gestion"></a></td>
		<!--<td><a href="admin.php?p=delete_table&id=--><?php //print $membreData->id ?><!--"><img src="../public/images/del.png"class="icon-admin-gestion"></a></td>-->
		</tr>
	<?php endforeach; ?>
</table>