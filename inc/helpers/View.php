<?php

	class View 
	{
		protected $load;
		
		public function __construct()
		{
			
		}
		
		public static function load($name = "", $data = null)
		{
			include_once("inc/views/{$name}.php");
		}
	}

?>