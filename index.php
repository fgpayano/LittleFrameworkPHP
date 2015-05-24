<?php

	require_once "sys/main.inc.php";

	$method = (isset($_GET["m"]) && ($_GET["m"] != "") ? $_GET["m"] : DEFAULT_HOME_METHOD);

	$controller = (isset($_GET["c"]) && ($_GET["c"] != "") ? $_GET["c"] : DEFAULT_HOME_CONTROLLER);

	$object_loaded = NULL;	

	if (@include_once "app/controllers/{$controller}.php")
	{
		$object_loaded = new $controller();
	}

	if (method_exists($object_loaded, $method))
	{
		die($object_loaded->$method());	
	}
	
?>