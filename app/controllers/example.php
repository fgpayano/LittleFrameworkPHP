 <?php

  /**
   * Example
   * 
   * @package    controllers
   * @version 	 1.0
   * @author     Francis Goris Payano <fgpayano@gmail.com>
   */

 	class Example extends Controller 
 	{
 		function index ()
 		{	
 			$data["title"] = "Example";
 			
 			$data["staff"] = array(
	 				1 => array("name" => "Jenny", "age" => "23", "occupation" => "Developer"), 
	 				
	 				2 => array("name" => "James", "age" => "30", "occupation" => "Designer"), 
	 				
	 				3 => array("name" => "Jhon", "age" => "22", "occupation" => "Seller"), 
	 				
	 				4 => array("name" => "Michael", "age" => "26", "occupation" => "Carpenter")
 				);

 			Load::helper("View")->load("example", $data);
 		}
 	}

 ?>