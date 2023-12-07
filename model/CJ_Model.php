<?php

require_once __DIR__ . "/CJ_Connection.php";

#[AllowDynamicProperties]
class CJ_Model
{
	public function __construct()
	{
		echo "CJ_Model class created";

		$db = new CJ_Connection();
		$this->connection = $db->getConnection();

	}

	public function create($tableName, $insert)
	{
		// Create table
	}

	public function read($tableName, $args, $whereArgs)
	{
		// read from table
	}

	public function update($tableName, $args, $whereArgs)
	{
		// update in table
	}

	public function delete($tableName, $whereArgs)
	{
		// delete from table
	}

	public function where($sql, $whereArgs)
	{
		// something
	}
}