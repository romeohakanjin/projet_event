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
				$class = str_replace(__NAMESPACE__.'\\','',$class);
				
				$class = str_replace('\\', '/', $class);

				//Récupère la classe en fonction de celle en paramètre en fonction du dossier parent donc 'app'
				require __DIR__.'/'.$class.'.php';
			}
		}

	}

?>