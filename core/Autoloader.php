<?php
    namespace Core;
    //permet de charger automatiquement les différentes classes
    class Autoloader{
        static function register(){
            //Enregistrer et créer l'autoloader en fonction de la fonction autoload
            spl_autoload_register(array(__CLASS__, 'autoload'));
        }

        //Prends en charge les namespace
        static function autoload($class){
            if(strpos($class, __NAMESPACE__.'\\') ==0){
                //Récupère la classe en fonction de celle en paramètre en fonction de la racine/models
               /* $class = str_replace(__NAMESPACE__, '\\', '', $class);
                $class = str_replace('\\', '/', $class);*/
                require dirname(__DIR__).'/'.$class.'.php';
            }
        }
    }
?>