<?php


class singleton {
	
	private static $db;

	private $conn;

	private function __construct($config) {
try {

	$this->conn = new PDO("mysql:host={$config['dbserver']};dbname={$config['dbname']}", $config['user'], $config['password']);

	$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";

} catch (Exception $e) {
	echo "Connection failed!" . $e->getMessage();
	}
}


public function getInstance($config) {
	if(self::$db == NULL) {
		self::$db = new singleton($config);
		
	}
		return self::$db;
}

public function getConnection() {
	return $this->conn;

	}


	
}




?>
