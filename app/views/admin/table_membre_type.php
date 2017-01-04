<?php if(!empty($membrePage)):?>
<table class="admin-table-gestion">
	<tr class="tr-table-admin-gestion">
		<th>id</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Email</th>
		<th>Date naissance</th>
		<th>Adresse</th>
		<th>Code postal</th>
		<th>Ville</th>
		<th>Etudes</th>
		<th>Contrat</th>
		<th>Modifier</th>
	</tr>
<?php else:print "Aucun résultat !";?>
<?php endif ;?>
	<?php foreach($membrePage as $membreData) : ?>
		<tr>
			<td><?php print $membreData->id ?></td>
			<td><?php print $membreData->nom ?></td>
			<td><?php print $membreData->prenom ?></td>
			<td><?php print $membreData->email ?></td>
			<td><?php print $membreData->date_naissance ?></td>
			<td><?php print $membreData->adresse ?></td>
			<td><?php print $membreData->code_postal ?></td>
			<td><?php print $membreData->ville ?></td>
			<td><?php print $membreData->niveau_etude ?></td>
			<td><?php print $membreData->type_contrat ?></td>
			<td>
				<a href="admin.php?p=edit_table&id=<?php print $membreData->id ?>">
					<img src="../../projet_event/public/images/update.png"  class="icon-admin-gestion">
				</a>
			</td>

			<?php if($_GET['etat'] == 1):?>
				<td><a href="admin.php?p=confirm&e_id=2&m_id=<?php print $membreData->id ?>">Accepter</a></td>
				<td><a href="admin.php?p=confirm&e_id=3&m_id=<?php print $membreData->id ?>">Refuser</a></td>
			<?php endif;?>
		</tr>
	<?php endforeach; ?>
</table>
<div style="text-align: center">
<?php if (isset($nbPage)):
	for ($i=1; $i<=$nbPage;$i++):?>
		<p style="display: inline-block;"><a href="<?php print $url ?>&page=<?php print $i ?>&odre=<?php print $_GET['ordre'] ?>"><?php print $i ?></a></p>
	<?php endfor;
endif;?>
</div>
