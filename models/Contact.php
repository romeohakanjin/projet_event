<?php
	class Contact{
		//fonction magique
		public function __get($key){
			$method = 'get'.ucfirst($key);
			$this->$key = $this->$method();
			return $this->$key;
		}

		public static function getContact(){
			return app::getDB()->query('SELECT * FROM liste_contact', __CLASS__);
		}

		 public function getUrl(){
		 	return 'index.php?p=DetailContact&id='.$this->id;
		 }

		 public function getInfoUser(){
		 	return app::getDB()->prepare('SELECT * FROM liste_contact WHERE id = ?', [$_GET['id']], __CLASS__, true);
		 }

	}
?>