<?php 
	require_once("inc/models/empleadomodel.php");
	
	require_once("inc/helpers/View.php");

	class Empleado extends Controller 
	{
		public function index () 
		{
			echo "Controller por defecto";
		}
		
		public function empleadoList() 
		{
			
			$dbEmpleado = new EmpleadoModel();
			
			$data["empleados"] = $dbEmpleado->getAllEmpleados();
			
			View::load("empleados", $data);
			
		}
		
		function sayHello () 
		{
			print_r($v);
		}
	}
?>