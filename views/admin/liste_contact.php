<h1>Liste contact :</h1>
<?php foreach (Liste_contact::getContact() as $contact) : ?>	
	<h4><?php print $contact->nom.' '.$contact->prenom ?></h4>
	<p><?php print $contact->adresse.', '.$contact->ville ?></p>
	<hr>
	<br/>
<?php endforeach; ?>
