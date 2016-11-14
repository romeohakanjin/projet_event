<h1>Liste membre :</h1>
<?php foreach (Membre::getMembre() as $membre) : ?>	
	<h4><?php print $membre->nom.' '.$membre->prenom ?></h4>
	<p><?php print $membre->mail.', '.$membre->ville ?></p>
	<hr>
	<br/>
<?php endforeach; ?>
