<?php
    //Définir une configuration par défaut
    class Config{
        private $settings = [];
        private static $_instance;

        //On crée une instance de la classe
        public static function getInstance(){
            if (is_null(self::$_instance)){
                self::$_instance = new Config();
            }
            return self::$_instance;
        }

        //On récupère dès le call de la class, le fichier config.php
        public function __construct(){
            $this->settings = require dirname(__DIR__) . '/config/config.php';
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