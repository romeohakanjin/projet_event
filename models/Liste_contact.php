<?php
	class Liste_contact{
		public static function getContact(){
			return app::getDB()->query('SELECT * FROM liste_contact', __CLASS__);
		}
	}
?>