<?php
	class Membre{
		//fonction magique
		public function __get($key){
			$method = 'get'.ucfirst($key);
			$this->$key = $this->$method();
			return $this->$key;
		}

		public function InsertMembre($mail, $pass, $nom, $prenom){
		 	app::getDB()->query('INSERT INTO membre(mail, password, nom, prenom, etat_membre) VALUES($mail, $pass, $nom, $prenom, "Inscrit")');
		 }

		 public function VerifMailExist($mail){
		 	if (app::getDB()->prepare('SELECT * FROM membre WHERE mail = ?', [$mail], __CLASS__, true) == null) {
		 		$res = true;
		 	}
		 	else {
		 		$res = false;
		 	}
		 	return $res;
		 }
	}
?>