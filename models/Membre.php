<?php
	class Membre extends model{

		public function getMembre($ordre){
			return $this->db->query('SELECT * FROM membre ORDER BY date_inscription '.$ordre);
		}

        public function getMembreById($id){
            return $this->db->prepare('SELECT * FROM membre WHERE id = ?', [$id]);
        }

        public function getMembreEtatInscription($etat_inscription, $ordre){
            return $this->db->prepare('SELECT * FROM membre WHERE id_etat_inscription = ? ORDER BY date_inscription '.$ordre, [$etat_inscription]);
        }

	}
?>