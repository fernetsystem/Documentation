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
    public function get_registro_alumno($matricula,$email,$pass){
        $consulta=$this->db->query("insert into accounts values($matricula,'$email','$pass','ALUMNO')");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function get_data_alumno($matricula,$nom,$pat,$mat,$curp,$tel){
        $consulta=$this->db->query("insert into data_alumno values($matricula,'$nom','$pat','$mat','$curp','$tel')");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    /*public function fill_table_proceso($matricula,$carrera){//implementar trigger
        $consulta=$this->db->query("insert into procesos values($matricula,'Estancias 1','No aprovado','4° Cuatrimeste','Primer ciclo de formacion','---',null,null,$carrera,'---','---',null)");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }   
    }*/
    public function get_matricula($matricula){
    $consulta=$this->db->query("select * from accounts where matricula=".$matricula."");
        while ($filas=$consulta->fetch_assoc()) {
            $this->users[]=$filas;
        }
        return $this->users;
    }
    public function fill_documents_estancia1($matricula){
        $consulta=$this->db->query("select documento,formato,estado from procesos_documentos where matricula=$matricula and proceso='Estancias1'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->users[]=$filas;
        }
        return $this->users;   
    }
}
	
?>