<?php
	class App{
		const DB_NAME = 'playdoh';
		const DB_USER = 'root';
		const DB_PASS = '';
		const DB_HOST = 'localhost';	

		private static $database;

		public static function getDB(){
			if (self::$database === null) {
				self::$database = new database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
			}
			return self::$database;
		}

	}
?>