<?php

#[AllowDynamicProperties]

class CJ_Connection
{
	public function __construct()
	{
		require_once __DIR__ . "/../config/database.php";

		$this->dbParams = $dbParams;
	}

	public function getConnection()
	{
		$conn = new mysqli($this->dbParams['servername'], $this->dbParams['username'], $this->dbParams['password'], $this->dbParams['dbName']);

		if($conn->connect_error)
		{
			die("Connection failed");
		}

		return $conn;
	}
}