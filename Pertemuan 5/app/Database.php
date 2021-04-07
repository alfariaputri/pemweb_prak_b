<?php 
	
	require_once '_confirg.php';

	class Database {
		private $host = DB_HOST;
		private $username = DB_USERNAME;
		private $password = DB_PASSWORD;
		private $db_name = DB_NAME;

		private $dbh;
		private $stmt;

		public function __construct() {

			$sdsn = 'mysql:host=' .$this =>host.';dbname'.$this=>db_name;

			$option = [
				PDO :: ATR_ERRMODE => PDO ::ERRMODE_EXPECTION
			];

			try {
				$this->dbh = new PDO ($sdsn,)
			}
		}

			}
 ?>