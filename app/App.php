<?php
    namespace App;
    class App{
        private $db_instance;
        private static $_instance;

        public static function getInstance(){
            if (is_null(self::$_instance)) {
                self::$_instance = new App();
            }
            return self::$_instance;
        }

        public function getTable($name){
            $class_name = "\\App\\models\\".ucfirst($name);
            return new $class_name($this->getDB());
        }

        public function getController($name){
            $class_name = "\\App\\controllers\\".ucfirst($name);
            return new $class_name($this->getDB());
        }

        public function getClass($name){
            $class_name = "\\App\\".ucfirst($name);
            return new $class_name($this->getDB());
        }

        public function getDB(){
            $config = Config::getInstance();
            if (is_null($this->db_instance)){
                $this->db_instance =  new Database($config->get("db_name"), $config->get("db_user"), $config->get("db_pass"), $config->get("db_host"));
            }
            return $this->db_instance;
        }

        public function logged(){
            if ( !isset($_SERVER['PHP_AUTH_USER'])
                || !isset($_SERVER['PHP_AUTH_PW'])
                || ($_SERVER['PHP_AUTH_USER'] !== "admin" )
                || ($_SERVER['PHP_AUTH_PW'] !== "1") ){
                return true;
            }

            return false;
        }

        public function forbidden(){
            header('HTTP/1.0 403 Forbidden');
            die('Accès interdit');
        }

        public function notFound(){
            header('HTTP/1.0 404 Not found');
            die('Page introuvable');
        }

        public function Unauthorized(){
            header('WWW-Authenticate: Basic realm="Authentifiez vous"');
            header('HTTP/1.0 401 Unauthorized');
            die('Accès restreint !');
            //Redirection ?
        }
    }