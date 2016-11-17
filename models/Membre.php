<?php
	class Membre{
		public static function getMembre(){
			return app::getDB()->query('SELECT * FROM membre', __CLASS__);
		}
	}
?>