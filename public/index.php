<?php
	//Inclure la class Autoloader
	require '../app/Autoloader.php';

	//Relancer et gérer l'autoloading
	Autoloader::register();

	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	}
	else{
		$p = 'home';
	}

	//Stocker l'affichage
	ob_start();

	switch ($p) {
		case 'accueil':
			require '../views/index.php';
		break;

		case 'admin':
			require '../views/admin/index.php';
		break;

		case 'liste_contact':
			require '../views/admin/liste_contact.php';
		break;

		case 'membre':
			require '../views/admin/membre.php';
		break;

		case 'connexion':
			require '../views/connexion.php';
		break;

		case 'inscription':
			require '../views/inscription.php';
		break;
		
		default:
			echo "404 error !";
		break;
	}

	//Vérification strict, que ça soit un string et égal à page
	/*if ($p === 'home') {
		require '../views/index.php';
	}

	else if ($p === 'admin') {
		require '../views/admin/index.php';
	}

	else if ($p === 'liste_contact') {
		require '../views/admin/liste_contact.php';
	}

	else if ($p === 'membre') {
		require '../views/admin/membre.php';
	}

	else if ($p === 'connexion') {
		require '../views/connexion.php';
	}

	else if ($p === 'inscription') {
		require '../views/inscription.php';
	}*/
	
	$content = ob_get_clean();
	require '../views/template/default.php';
?>