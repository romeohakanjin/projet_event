<?php
	//On fait l'import de l'autoloader qui va s'occuper de charger les classes en fonction des besoins
	require 'app/Autoloader.php';
	Autoloader::register();

	require 'app/Controller.php';
	$controller = new Controller();

	require 'app/Model.php';
	require 'models/Contact.php';

	require 'models/Membre.php';

	require 'controllers/Membrec.php';

		
	//On récupère la valeur de p qui représente la page
	if(isset($_GET['p'])){
		$p = $_GET['p'];
	}
	else{
		$p = 'home';
	}		


	//on commence à enregistrer ce qui est afficher
	ob_start();

	//On effectue les redirections
	if($p === 'connexion'){
		require 'views/Membre/Connexion.php';
	}
	else if($p == 'inscription'){
		require 'views/Membre/Inscription.php';
	}
	else if($p === 'home'){
		require 'views/index.php';
	}
	else if($p == 'liste_contact'){
		require 'views/contact/ListeContact.php';
	}
	else if($p == 'DetailContact'){
		require 'views/contact/DetailContact.php';
	}
	else if($p == 'addContact'){
		require 'views/contact/AddContact.php';
	}

	//Récupération du contenu
	$content = ob_get_clean();

	//On demande l'affichage de fond
	require 'views/templates/default.php';
	
?>