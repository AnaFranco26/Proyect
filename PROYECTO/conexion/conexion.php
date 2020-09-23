


<?php 

class conexion
{
	
	public function get_conexion()
	{
		$conexion=new PDO("mysql:dbname=proyecto;host=localhost",'root','');
		return $conexion;
	}
}


 ?>