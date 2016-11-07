<?php
	$contactD = Contact::getInfoUser();
?>

<h2><?= $contactD->nom ?></h2>

<p><?= $contactD->prenom; ?></p>
<p><?= $contactD->genre; ?></p>
<p><?= $contactD->adresse; ?></p>
<p><?= $contactD->code_postal; ?></p>
<p><?= $contactD->ville; ?></p>

<hr />