<ul>
	<?php 
	 	foreach(Contact::getContact() as $contact): 
	 ?>
		<h2>
			<a href="<?= $contact->url; ?>"> <?= $contact->nom ?> </a>
		</h2>

		<p> 
			<?= $contact->prenom; ?>
		</p>

		<hr />
	<?php endforeach; ?>
</ul>

<div style="float : right; margin-right: 0%;">
	<a href="index.php?p=addContact">
		<img style="width: 41%;" src="public/img/add.png">
	</a>
</div>