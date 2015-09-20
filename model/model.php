<?php 
class model{
	private $db;
	private $users=array();
	public function __construct(){
		$this->db=Conectar::conexion();
		$this->users=array();
	}
	public function get_login($matricula,$pass){
		$contador=0;
		$consulta=$this->db->query("select * from accounts where matricula='".$matricula."' and password='".$pass."'");
        while ($filas=$consulta->fetch_assoc()) {
            $contador++;
        }
        if($contador>0){
        	return 1;
        }else{
        	return 0;
        }
	}
}
	
?>