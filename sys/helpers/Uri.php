<?php

	/**
	* Uri
	* 
	* @package   helpers
	* @version 	 1.0
	* @author    Francis Goris Payano <fgpayano@gmail.com>
	*/
	   
	class Uri
	{
		static $protocolRegex = "((http|ftp)(s)?\:\/{2})";

		/**
		* 
		* Validate whether a url is correct
		*
		* @param string $url URI that going to be examined
		* @return boolean
		*/	
		public function isValidFormat ($url = "")
		{
			return filter_var($url, FILTER_VALIDATE_URL) !== false;
		}

		/**
		* 
		* Validate one by one all url from array
		*
		* @param array $arr The URIs to be examined
		* @return boolean
		*/
		public function validAllFormat ($arr = array())
		{
			$ok = false;

			if (count($arr) <= 0) return $ok;

			foreach ($arr as $key => $val)
			{
				$ok = $this->isValidFormat($val);
				
				if (!$ok) break;
			}

			return $ok;
		}

		/**
		* 
		* Check whether a URL has a protocol like http://, https://, ftp:// or ftps://
		*
		* @param string $url The url to be check
		* @return boolean
		*/
		public function hasProtocol ($url = "")
		{
			return preg_match("/^" . self::$protocolRegex . "/", $url);
		}

		/**
		* 
		* Make friendly title from a string
		*
		* @param string $str The string to be convert
		* @param string $character The string used to replace no valid characters
		* @return string
		*/
		public static function makeTitle($str = "", $character = "-")
		{
			$str = strtolower($str); 

			$arrRegex = array(
				"\s" => $character,
				
				"[^\w_-]" => ""
			);

			foreach ($arrRegex as $key => $val) 
			{
				$str = preg_replace("/" . $key . "/", $val, $str);
			}

			return $str;
		}
	}  

?>