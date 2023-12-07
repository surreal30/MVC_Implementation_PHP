<?php

require_once __DIR__ . "/CJ_Model.php";

class TestModel extends CJ_Model
{
	public function __construct()
	{
		parent::__construct();

		echo "Test Model created";
	}

	public function sayHello($name)
	{
		echo "Hello " . $name;
	}
}