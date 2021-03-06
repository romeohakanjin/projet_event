<?php
    namespace Core;
    use PDO;
	class Database{
		//déclaration des variables
		private $db_name;
		private $db_user;
		private $db_pass;
		private $db_host;
		private $pdo;

        //Initialiser les attributs de la classe en fonction des données du fichiers config
		public function __construct($db_name, $db_user, $db_pass, $db_host){
			//initialisation
			$this->db_name = $db_name;
			$this->db_user = $db_user;
			$this->db_pass = $db_pass;
			$this->db_host = $db_host;
		}

		//Permet d'avoir une instance de pdo
		public function getPDO(){
			if($this->pdo === null){
				//Connexion à la BDD
				$pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host.';charset=utf8', ''.$this->db_user.'', ''.$this->db_pass.'');

				//Affichage des erreurs
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->pdo = $pdo;
			}
			return $this->pdo;
		}

		//Effectuer un update simple
        public function updateDb($statement){
            $req = $this->getPDO()->query($statement);
            return $req;
        }

        //Effectuer une query
		public function query($statement){
			$req = $this->getPDO()->query($statement);
			$datas = $req->fetchAll(PDO::FETCH_OBJ);

			return $datas;
		}

        //Permet de ADD
        public function add($statement){
            $req = $this->getPDO()->query($statement);

            return $req;
        }

        //Fonction prepare
        public function prepare($statment, $attributes){
            $req = $this->getPDO()->prepare($statment);
            $req->execute($attributes);

            if(strpos($statment, 'UPDATE') === 0 || strpos($statment, 'INSERT') === 0
                || strpos($statment, 'DELETE') === 0){
                return $req;
            }

            $req->setFetchMode(PDO::FETCH_OBJ);
            $datas = $req->fetchAll(PDO::FETCH_OBJ);

            return $datas;
        }

        //Récupérer le dernier ID inséré
        public function lastInsertId(){
            return $this->getPDO()->lastInsertId();
        }
	}
?>