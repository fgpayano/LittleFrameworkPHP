<?php

	require_once("inc/main.inc.php");

	$method = (isset($_GET["m"]) && ($_GET["m"] != "") ? $_GET["m"] : DEFAULT_HOME_METHOD);

	$controller = (isset($_GET["c"]) && ($_GET["c"] != "") ? $_GET["c"] : DEFAULT_HOME_CONTROLLER);

	$object_loaded = null;
	
	if (@include_once "inc/controllers/{$controller}.php")
	{
		$object_loaded = new $controller();

	}

	if (method_exists($object_loaded, $method))
	{
		die($object_loaded->$method());	
	}
	
?>