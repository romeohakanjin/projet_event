<?php
	class Utilisateur extends model{
		public function getUtilisateur(){
			return $this->db->query('SELECT * FROM utilisateur');
		}

	}
?>