<?php
	class Membre{

		public static function getMembre(){
			return app::getDB()->query('SELECT * FROM membre', __CLASS__);
		}

        public static function getMembreEtat($etat){
            return app::getDB()->prepare('SELECT * FROM membre WHERE id_etat = ?', [$etat], __CLASS__, true);
        }
	}
?>