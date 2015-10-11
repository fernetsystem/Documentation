<?php 

class Conectar
{
	public static function conexion(){
		$conexion = new mysqli("localhost","root","","proyect_doc");
		$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	}
	
}

 ?>