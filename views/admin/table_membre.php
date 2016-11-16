<?php if(!empty(Membre::getMembre())):?>
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
<?php else:echo "Aucun résultat";?>
<?php endif ;?>

	<?php foreach(Membre::getMembre() as $membre) : ?>
		<tr>
			<td><?php print $membre->id ?></td>
			<td><?php print $membre->nom ?></td>
			<td><?php print $membre->prenom ?></td>
			<td><?php print $membre->date_naissance ?></td>
			<td><?php print $membre->adresse ?></td>
			<td><?php print $membre->code_postal ?></td>
			<td><?php print $membre->ville ?></td>
			<td><?php print $membre->email ?></td>
			<td><?php print $membre->niveau_etude ?></td>
			<td><?php print $membre->type_contrat ?></td>
			<td>id_type</td>
			<td>id_etat</td>
			<td><a href=""><img src="../public/images/update.png" class="icon-admin-gestion"></a></td>
			<td><a href=""><img src="../public/images/del.png"class="icon-admin-gestion"></a></td>
		</tr>
	<?php endforeach; ?>
</table>