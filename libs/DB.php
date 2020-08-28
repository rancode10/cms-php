<?php

class DB extends PDO {
	private $hostname = 'localhost';
	private $database = 'cms';
	private $username = 'root';
	private $password = '';
	private $pdo;
	private $sQuery;
	private $bConnected = false;
	private $parameters;

	public function __construct() {
		$dsn = 'mysql:dbname='.$this->database.';host='.$this->hostname;
		parent::__construct($dsn, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}

	private function connection() {
		$dsn = 'mysql:dbname='.$this->database.';host='.$this->hostname;
		try {
			$this->pdo = new PDO($dsn, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
			#$this->bConnected = true;
			return $this->pdo;
		} catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}
	}

	
}
?>

