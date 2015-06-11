<?php 

/**
* Helper
* 
* @package   sys
* @version 	 1.0
* @author    Francis Goris Payano <fgpayano@gmail.com>
*/

namespace helpers;

class Load
{
	public static function helper ($helper = "") 
	{
	  //require_once "sys/helpers/{$helper}.php";
	  
	  return new $helper();
	}
}
?>