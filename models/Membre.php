<?php
	class Membre extends models{

		public function getMembre(){
			return $this->db->query('SELECT * FROM membre');
		}

        public function getMembreEtat($etat){
            return $this->db->prepare('SELECT * FROM membre WHERE id_etat = ?', [$etat]);
        }
	}
?>