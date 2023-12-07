<?php

require_once __DIR__ . '/CJ_Controller.php';
require_once __DIR__ . '/../model/TestModel.php';

class TestController extends CJ_Controller
{
	public function __construct()
	{
		echo "Class Created" . "<BR>";

		$this->testModel = new testModel();
	}

	public function helloGet(...$args)
	{
		$this->testModel->sayHello('CJ_MODEL');
	}

	public function helloPost(...$args)
	{
		echo "Hello from Post";
	}
}