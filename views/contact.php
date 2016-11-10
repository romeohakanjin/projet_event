<h1>Contact</h1>
<?php foreach (Contact::getContact() as $contact) : ?>	
	<h2><?php print $contact->nom.' '.$contact->prenom ?></h2>
	<p><?php print $contact->adresse.', '.$contact->code_postal.' - '.$contact->ville ?></p>
	<hr>
	<br/>
<?php endforeach; ?>