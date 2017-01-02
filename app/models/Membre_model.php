<?php
    namespace App\models;

	class Membre_model extends \core\model\model{

        //Liste des membres par ordre
		public function getMembre($ordre){
			return $this->db->query('SELECT * FROM membre ORDER BY date_inscription '.$ordre);
		}

        //Membre en fonction de son id
        public function getMembreById($id){
            return $this->db->prepare('SELECT * FROM membre WHERE id = ? LIMIT 1', [$id]);
        }

        //Liste des membres par ordre en fonction des limites par page et limite max
        public function getMembrePage($ordre, $limm, $limp){
            return $this->db->query("SELECT * FROM membre ORDER BY date_inscription ".$ordre." LIMIT ".$limm.", ".$limp );
        }

        //Liste des membres par Etat et Page
        public function getMembreEtatPage($etat_inscription, $ordre, $limm, $limp){
            return $this->db->prepare('SELECT * FROM membre WHERE id_etat_inscription = ? ORDER BY date_inscription '.$ordre." LIMIT ".$limm.", ".$limp, [$etat_inscription]);
        }

        //Liste des membres par Etat de l'inscription
        public function getMembreEtatInscription($etat_inscription, $ordre){
            return $this->db->prepare('SELECT * FROM membre WHERE id_etat_inscription = ? ORDER BY date_inscription '.$ordre, [$etat_inscription]);
        }

        //Changer l'etat d'inscription en fonction de son id
        public function changerEtatInscription($etat_inscription, $id){
            return $this->db->updateDb('UPDATE membre SET id_etat_inscription = '.$etat_inscription.' WHERE id = '.$id);
        }
	}
?>