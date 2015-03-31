<?php

	abstract class Model 
	{
		private $conect;
		
		protected $db;

		public function __construct() 
		{
			$this->connect = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST, DB_USER, DB_PASS);
			
			$this->db = $this;
		}

		protected function get($strQuery = "") 
		{
			return $this->connect->query($strQuery)->fetch(PDO::FETCH_ASSOC);
		}
		
		protected function getAll($strQuery = "") 
		{
			return $this->connect->query($strQuery)->fetchAll(PDO::FETCH_ASSOC);
		}
		
		protected function query ($strQuery = "")
		{
			return  $this->connect->query($strQuery);
		}

		public function __destruct() 
		{
			unset($this->connect, $this->db);
		}
	}
	
?>