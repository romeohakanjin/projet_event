<?php
	//Inclure la class Autoloader
	require '../models/Autoloader.php';
	
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

	//Vérification strict, que ça soit un string et égal à page
	if ($p === 'home') {
		require '../views/index.php';
	}

	else if ($p === 'contact') {
		require '../views/contact.php';
	}

	$content = ob_get_clean();
	require '../views/template/default.php';
?>