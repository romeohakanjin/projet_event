<?php
	class Connexion{
		//fonction magique
		public function __get($key){
			$method = 'get'.ucfirst($key);
			$this->$key = $this->$method();
			return $this->$key;
		}

	}
?>