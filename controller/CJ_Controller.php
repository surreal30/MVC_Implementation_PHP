<?php

class CJ_Controller
{
	public function __construct()
	{
		echo "CJ_Controller created";
	}

	public function loadView($view, $args)
	{
		foreach($args as $viewName => $viewValue)
		{
			$$viewName = $viewValue;
		}

		require_once __DIR__ . "/../view" . $view . ".php";
	}

	public function testGet()
	{
		$this->loadView("home", ["content" => "This content is set from controller"]);
	}
}