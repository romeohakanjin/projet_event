<?php
	//On fait l'import de l'autoloader qui va s'occuper de charger les classes en fonction des besoins
	require 'app/Autoloader.php';
	Autoloader::register();


	//on commence à enregistrer ce qui est afficher
	ob_start();



	//Récupération du contenu
	$content = ob_get_clean();

	//On demande l'affichage de fond
	require 'views/templates/default.php';
	
?>