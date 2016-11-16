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

    //Redirection en fonction du paramètre
	switch ($p) {
		case 'home':
			require '../views/index.php';
		break;

		case 'admin':
			require '../views/admin/index.php';
		break;

		case 'liste_utilisateur':
			require '../views/admin/liste_utilisateur.php';
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
	
	$content = ob_get_clean();
	require '../views/template/default.php';
?>