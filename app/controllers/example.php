 <?php

/**
* Example
* 
* @package    controllers
* @version 	 1.0
* @author     Francis Goris Payano <fgpayano@gmail.com>
*/

use helpers\Uri as Uri,
	helpers\View as View; 
	
class Example extends Controller
{
	function index ()
	{
		/* Loading Helpers */
		$uri  = new Uri(); 
		$view = new View();
		$log  = new Log();

		$data["title"] = "Example";
		
		$data["staff"] = array(
				1 => array("name" => "Jenny", "age" => "23", "occupation" => "Developer"), 
				
				2 => array("name" => "James", "age" => "30", "occupation" => "Designer"), 
				
				3 => array("name" => "Jhon", "age" => "22", "occupation" => "Seller"), 
				
				4 => array("name" => "Michael", "age" => "26", "occupation" => "Carpenter")
			);

		/**
		echo $uri->makeTitle("doing some title.");
		//--> Output: doing-some-title
		**/
		
		$view->load("example", $data);
	}	
}

 ?>