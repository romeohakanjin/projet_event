<?php if(!empty($membre->getMembreEtat($_GET['etat']))):?>
<table class="admin-table-gestion">
	<tr class="tr-table-admin-gestion">
		<th>id</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Date naissance</th>
		<th>Adresse</th>
		<th>Code postal</th>
		<th>Ville</th>
		<th>Email</th>
		<th>Etudes</th>
		<th>Contrat</th>
		<th>Type membre</th>
		<th>Etat</th>
		<th>Modifier</th>
		<th>Supprimer</th>
	</tr>
<?php else:print "Aucun résultat !";?>
<?php endif ;?>

	<?php foreach($membre->getMembreEtat($_GET['etat']) as $membreData) : ?>
		<tr>
			<td><?php print $membreData->id ?></td>
			<td><?php print $membreData->nom ?></td>
			<td><?php print $membreData->prenom ?></td>
			<td><?php print $membreData->date_naissance ?></td>
			<td><?php print $membreData->adresse ?></td>
			<td><?php print $membreData->code_postal ?></td>
			<td><?php print $membreData->ville ?></td>
			<td><?php print $membreData->email ?></td>
			<td><?php print $membreData->niveau_etude ?></td>
			<td><?php print $membreData->type_contrat ?></td>
			<td>id_type</td>
			<td>id_etat</td>
			<td><a href=""><img src="../public/images/update.png" class="icon-admin-gestion"></a></td>
			<td><a href=""><img src="../public/images/del.png"class="icon-admin-gestion"></a></td>
		</tr>
	<?php endforeach; ?>
</table>