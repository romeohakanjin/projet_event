<?php
	class Membre extends model{

		public function getMembre($ordre){
			return $this->db->query('SELECT * FROM membre ORDER BY date_inscription '.$ordre);
		}

        public function getMembreById($id){
            return $this->db->prepare('SELECT * FROM membre WHERE id = ?', [$id]);
        }

        /*public function existeEtude($etude){
            $req = $this->db->prepare('SELECT * FROM membre WHERE niveau_etude = ? LIMIT 1', [$etude]);
        }

        public function existeCivilite($civilite){
            $req = $this->db->prepare('SELECT * FROM membre WHERE civilite = ? LIMIT 1', [$civilite]);
        }*/

        public function getMembreEtatInscription($etat_inscription, $ordre){
            return $this->db->prepare('SELECT * FROM membre WHERE id_etat_inscription = ? ORDER BY date_inscription '.$ordre, [$etat_inscription]);
        }

        public function changerEtatInscription($etat_inscription, $id){
            return $this->db->updateDb('UPDATE membre SET id_etat_inscription = '.$etat_inscription.' WHERE id = '.$id);
        }
	}
?>