<?php
	class Utilisateur extends models{
		public function getUtilisateur(){
			return $this->db->query('SELECT * FROM utilisateur');
		}

	}
?>