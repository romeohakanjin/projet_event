<?php
	class Database{
		//déclaration des variables
		private $db_name;
		private $db_user;
		private $db_pass;
		private $db_host;
		private $pdo;

		public function __construct($db_name = "playdoh", $db_user = 'root', $db_pass ='', $db_host = 'localhost'){
			//initialisation
			$this->db_name = $db_name;
			$this->db_user = $db_user;
			$this->db_pass = $db_pass;
			$this->db_host = $db_host;
		}

		public function getPDO(){
			if($this->pdo === null){
				//Connexion à la BDD
				$pdo = new PDO('mysql:dbname=playdoh;host=localhost;charset=utf8', 'root', '');
				
				//Affichage des erreurs
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->pdo = $pdo;
			}

			return $pdo;
		}

		public function query($statment, $class_name){
			$req = $this->getPDO()->query($statment);
			$datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);

			return $datas;
		}

		public function prepare($statment, $attributes, $class_name, $only_one){
			$req = $this->getPDO()->prepare($statment);
			$req->execute($attributes);

			$req->setFetchMode(PDO::FETCH_CLASS, $class_name);

			if ($only_one) {
				$datas = $req->fetch();
			}
			else{
				$datas = $req->fetchAll();
			}
			return $datas;
		}

	}

	

?>