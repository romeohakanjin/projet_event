<?php
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
            $class_name = ucfirst($name);
            return new $class_name($this->getDB());
        }

        public function getDB(){
            $config = Config::getInstance();
            if (is_null($this->db_instance)){
                $this->db_instance =  new Database($config->get("db_name"), $config->get("db_user"), $config->get("db_pass"), $config->get("db_host"));
            }
            return $this->db_instance;
        }
	}
?>