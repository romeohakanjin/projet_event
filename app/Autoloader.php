<?php
	//permet de charger automatiquement les différentes classes
	class Autoloader{

		static function register(){
			//Enregistrer et créer l'autoloader en fonction de la fonction autoload
			spl_autoload_register(array(__CLASS__, 'autoload'));
		}
		
		//Prends en charge les namespace
		static function autoload($class){
			if(strpos($class, __NAMESPACE__.'\\') ==0){
				//Récupère la classe en fonction de celle en paramètre en fonction du dossier parent donc 'app'
				$open = 'C:\xampp\htdocs\projet\projet_event/models/'.$class.'.php';
				$open= str_replace('app/', '', $open);
				require $open;
			}
		}

	}

?>