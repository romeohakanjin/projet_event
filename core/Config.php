<?php
    //Définir une configuration par défaut
    namespace Core;
    class Config{
        private $settings = [];
        private static $_instance;

        //On récupère dès le call de la class, le fichier config.php
        public function __construct($file){
            $this->settings = require($file);
        }

        //On crée une instance de la classe
        public static function getInstance($file){
            if (is_null(self::$_instance)){
                self::$_instance = new Config($file);
            }
            return self::$_instance;
        }

        //Permet de récupérer un élément du fichier config en fonction de la clée, si elle existe
        public function get($key){
            if (!isset($this->settings[$key])){
                return null;
            }
            return $this->settings[$key];
        }
    }
?>