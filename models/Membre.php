<?php
	class Membre extends models{

		public function getMembre(){
			return $this->db->query('SELECT * FROM membre');
		}

        public function getMembreById($id){
            return $this->db->prepare('SELECT * FROM membre WHERE id = ?', [$id]);
        }

        public function getMembreEtatInscription($etat_inscription){
            return $this->db->prepare('SELECT * FROM membre WHERE id_etat_inscription = ?', [$etat_inscription]);
        }

        
	}
?>