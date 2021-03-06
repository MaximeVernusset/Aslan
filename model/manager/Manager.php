<?php
	
	require_once 'db_info.php';
	
	//Hash algorithm used to encrypt password
	define("HASH_ALGORITHM", "sha256");
	
	
	/**
	 * Handles the database connection.
	 */
	abstract class Manager {
		
		/**
		 * Connection to database.
		 */
		protected $dbConnection;
		
		/**
		 * Constructor.
		 * Initiates connection to database.
		 */
		public function __construct() {
			$this->dbConnection = new \PDO(DB_DSN.':host='.DB_HOST.';dbname='.DB_SCHEMA.';charset=utf8', DB_USERNAME, DB_PASSWORD, 
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
	}