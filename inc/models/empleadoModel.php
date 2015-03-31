<?php 
	class EmpleadoModel extends Model 
	{	
		public function getEmpleado($id = "") 
		{
			return $this->db->get("SELECT * FROM EMPLEADO WHERE ID_EMPLEADO = '{$id}';");
		}

		public function getAllEmpleados($order = "") 
		{
			return $this->db->getAll("SELECT * FROM EMPLEADO;");
		}

		public function insertEmpleado($arrPost = array())
		{
			$this->db->query("INSERT INTO EMPLEADO 
								
							 (NOMBRE, APELLIDO, CEDULA, DIRECCION, TELEFONO)
				
							 VALUES

							 ('Juam Manual', 'Correa', '008-2033-15', 'Av. Albert Thomass', '8096854575');");		
		}

		public function deleteEmpleado($id)
		{
			$this->db->query("DELETE FROM EMPLEADO WHERE ID_EMPLEADO = {$id}");
		}
	
		public function deleteAllEmpleado($arrIds = array())
		{
			//$this->db->query();
		}
	}
?>