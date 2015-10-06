<?php 
class model{
	private $db;
	private $users=array();
    private $empresas=array();
    private $documentos=array();
	public function __construct(){
		$this->db=Conectar::conexion();
		$this->users=array();
        $this->empresas=array();
        $this->documentos=array();
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
    
    public function get_matricula($matricula){
    $consulta=$this->db->query("select * from accounts where matricula=".$matricula."");
        while ($filas=$consulta->fetch_assoc()) {
            $this->users[]=$filas;
        }
        return $this->users;
    }
    public function fill_documents($matricula,$procesoAconsultar){
        $consulta=$this->db->query("select * from procesos_documentos where matricula=$matricula and proceso='$procesoAconsultar'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->documentos[]=$filas;
        }
        return $this->documentos;   
    }

    public function validate_materia_aprobada($matricula,$procesoAconsultar){
        $consulta=$this->db->query("select proceso,estado from procesos where matricula=$matricula and proceso='$procesoAconsultar'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->documentos[]=$filas;
        }
        return $this->documentos;  
    }
    public function insert_enterprise($nom_emp,$tel,$email){
        $consulta=$this->db->query("insert into empresas (empresa,telefono,correo)values('$nom_emp','$tel','$email')");
    }
    public function search_enterprise($nom_emp){
        $contador=0;
        $consulta=$this->db->query("select * from empresas where empresa like '%$nom_emp%'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->empresas[]=$filas;
            $contador++;
        }
        if($contador>0){
           // return 1;
        }else{
          //  return 0;
        }
        return $this->empresas;   
    }
    public function search_document($no_documento){
        $consulta=$this->db->query("select * from procesos_documentos where no_documento=$no_documento");
        while ($filas=$consulta->fetch_assoc()) {
            $this->documentos[]=$filas;       
        }
        return $this->documentos;
    }
}
	
?>