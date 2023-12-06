<?php

require_once __DIR__ . "/controller/TestController.php";

function getArgumentStart($uri)
{
	foreach($uri as $key => $value)
	{
		if($value === 'index.php')
		{
			if($key === count($uri) - 1)
			{
				return -1;
			}

			return $key + 1;
		}
	}
}

$uri = parse_url($_SERVER['REQUEST_URI']);

$params = explode("/", $uri['path']);

$start = getArgumentStart($params);

if($start !== -1)
{
	$controllerName = $params[$start];

	$functionName = $params[$start + 1] .  ucfirst(strtolower($_SERVER['REQUEST_METHOD']));

	$args = [];

	$start += 2;

	for(; $start < count($params); $start++)
	{
		array_push($args, $params[$start]);
	}

	call_user_func_array([new $controllerName, $functionName], $args);
}

else
{
	echo "404 page not found";
}