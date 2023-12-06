<?php

require_once __DIR__ . '/CJ_Controller.php';

class TestController extends CJ_Controller
{
	public function __construct()
	{
		echo "Class Created" . "<BR>";
	}

	public function helloGet(...$args)
	{
		echo "Hello from GET";
	}

	public function helloPost(...$args)
	{
		echo "Hello from Post";
	}
}