<?php
  
  /**
   * Model
   * 
   * @package    models
   * @version 	 1.0
   * @author     Francis Goris Payano <fgpayano@gmail.com>
   */
   
	abstract class Model 
	{
		private $conect;
		
		protected $db;
	   
	   /**
		* 
		* Initializes the database connection
		*
		* @param none
		* @return none
		*/
		public function __construct() 
		{
			$this->connect = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST, DB_USER, DB_PASS);
			
			$this->db = $this;
		}
		
	   /**
		* 
		* Get one row from the database
		*
		* @param string $strQuery  Query to get data
		* @return array
		*/
		protected function get($strQuery = "") 
		{
			return $this->connect->query($strQuery)->fetch(PDO::FETCH_ASSOC);
		}
		
	   /**
		* 
		* Get more than one row from the database
		*
		* @param string $strQuery  Query to get data
		* @return array
		*/
		protected function getAll($strQuery = "") 
		{
			return $this->connect->query($strQuery)->fetchAll(PDO::FETCH_ASSOC);
		}
		
	   /**
		* 
		* Execute database Query
		*
		* @param string $strQuery  Query to get data
		* @return object PDOStatement
		*/
		protected function query ($strQuery = "")
		{
			return  $this->connect->query($strQuery);
		}

	   /**
		* 
		* Destruct the database connection
		*
		* @param none
		* @return none
		*/
		public function __destruct() 
		{
			unset($this->connect, $this->db);
		}
	}
	
?>