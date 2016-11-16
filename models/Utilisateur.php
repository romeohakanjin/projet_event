<?php
	class Utilisateur{
		public static function getUtilisateur(){
			return app::getDB()->query('SELECT * FROM utilisateur', __CLASS__);
		}
	}
?>