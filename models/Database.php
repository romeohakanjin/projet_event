<?php
	class Database{
		//déclaration des variables
		private $db_name;
		private $db_user;
		private $db_pass;
		private $db_host;
		private $pdo;

		public function __construct($db_name = "project_event", $db_user = 'root', $db_pass ='', $db_host = 'localhost'){
			//initialisation
			$this->db_name = $db_name;
			$this->db_user = $db_user;
			$this->db_pass = $db_pass;
			$this->db_host = $db_host;
		}

		public function getPDO(){
			if($this->pdo === null){
				//Connexion à la BDD
				$pdo = new PDO('mysql:dbname=project_event;host=localhost;charset=utf8', 'root', '');
				
				//Affichage des erreurs
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->pdo = $pdo;
			}
			return $this->pdo;
		}

		public function query($statement){
			$req = $this->getPDO()->query($statement);
			$datas = $req->fetchAll(PDO::FETCH_OBJ);

			return $datas;
		}

        public function prepare($statment, $attributes, $class_name, $only_one){
            $req = $this->getPDO()->prepare($statment);
            $req->execute($attributes);

            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);

            $datas = $req->fetchAll();

            return $datas;
        }
	}
?>