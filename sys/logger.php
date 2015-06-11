<?php

/** Logger Class **/
function __autoload ($path)
{
	$path = str_replace("\\", "/", $path);

	require($path.".php");
}

?>