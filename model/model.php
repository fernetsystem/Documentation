<?php 
class model{
	private $db;
	private $myDataGet=array();
	public function __construct(){
		$this->db=Conectar::conexion();
		$this->myDataGet=array();
	}
	public function get_login($matricula,$pass){
		$contador=0;
		$consulta=$this->db->query("select * from accounts where matricula=".$matricula." and password='".$pass."'");
        while ($filas=$consulta->fetch_assoc()) {
            $contador++;
        }
        if($contador>0){
        	return 1;
        }else{
        	return 0;
        }
	}
    public function get_registro_alumno($mat,$pass,$nom,$pat,$mate,$email,$crp,$carr,$sex){
        $consulta=$this->db->query("insert into accounts values($mat,'$nom','$pat','$mate','$sex','$email','$pass','ALUMNO',$carr,'$crp')");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function validate_token($token,$matricula){
        $contador=0;
        $consulta=$this->db->query("SELECT * FROM asesores WHERE matricula = $matricula and token ='$token'");
        while ($filas=$consulta->fetch_assoc()) {
            $contador++;
        }
        if($contador>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function get_registro_asesor($mat,$pass,$nom,$pat,$mate,$email,$crp,$carr,$sex){
        $consulta=$this->db->query("insert into accounts values($mat,'$nom','$pat','$mate','$sex','$email','$pass','ASESOR',$carr,'$crp')");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function edit_data($sesMat,$mat,$pass,$nom,$pat,$mate,$email,$crp,$sex){
        $consulta=$this->db->query("update accounts set matricula=$mat, password='$pass' ,nombre='$nom', paterno='$pat', materno='$mate', email='$email',curp='$crp',sexo='$sex' where matricula=$sesMat");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    
    public function get_matricula($matricula){
        $consulta=$this->db->query("select * from accounts where matricula=".$matricula."");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function fill_documents($matricula,$procesoAconsultar){
        $consulta=$this->db->query("select * from procesos_documentos where matricula=$matricula and proceso='$procesoAconsultar'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;   
    }
    public function search_document($no_documento){
        $consulta=$this->db->query("select * from procesos_documentos where no_documento=$no_documento");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;
    }
    public function validate_materia_aprobada($matricula,$procesoAconsultar){
        $consulta=$this->db->query("select idmateria,estado_pro from procesos where matricula=$matricula and idmateria=$procesoAconsultar");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;  
    }
    public function suggest_enterprise($rfc,$nom_emp,$sec,$dir,$tel,$email){
        $consulta=$this->db->query("insert into empresas values('$rfc','$nom_emp',$sec,'$dir','$tel','$email',0)");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function get_list_enterprises(){
        $consulta=$this->db->query("select RFC,nombre,direccion,telefono,correo from empresas where estado_emp=1;");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;   
    }
    public function get_list_enterprises_suggest(){
        $consulta=$this->db->query("select RFC,nombre,direccion,telefono,correo from empresas where estado_emp=0;");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;   
    }
    public function alta_enterprise_asesor($rfc){
        $consulta=$this->db->query("update empresas set estado_emp=1 where RFC='$rfc'");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function delete_enterprise_suggest($rfc){
        $consulta=$this->db->query("delete from empresas where RFC='$rfc'");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }   
    }
    public function count_enterprises_Suggest(){
        $consulta=$this->db->query("select count(*) as n from empresas where estado_emp=0;");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;      
    }
    public function add_token_asesor($token,$matricula){
        $consulta=$this->db->query("insert into asesores values(null,'$token',$matricula)");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function all_tokens(){
        $consulta=$this->db->query("select * from asesores");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;
    }
    public function all_my_groups_E1($no_asesor){
        $consulta=$this->db->query("select * from grupos where no_asesor=$no_asesor and grupo like'1104%'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;    
    }
    public function all_my_groups_E2($no_asesor){
        $consulta=$this->db->query("select * from grupos where no_asesor=$no_asesor and grupo like'1107%'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;    
    }
    public function all_my_groups_Estad($no_asesor){
        $consulta=$this->db->query("select * from grupos where no_asesor=$no_asesor and grupo like'1110%'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;    
    }
    public function get_no_asesor($matricula){
        $consulta=$this->db->query("select * from asesores where matricula=$matricula");  
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;   
    }
    public function add_group_asesor($grupo,$periodo,$asesor){
        $consulta=$this->db->query("insert into grupos values(null,'$grupo','$periodo',$asesor)");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function add_alumno_to_group($matricula,$idmateria,$idgrupo){
        $consulta=$this->db->query("insert into procesos values(null,$matricula,$idmateria,
                                                                $idgrupo,'ACTIVADA',360,
                                                                NULL,NULL,NULL,
                                                                0,NULL,NULL,NULL,
                                                                NULL)");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function get_list_alumnos_in_my_group($idmateria,$idgrupo){
        $consulta=$this->db->query("SELECT p.matricula, nombre, paterno, materno, estado_pro,
                                           total_horas, RFC, fecha_i, fecha_t, calificacion,
                                           nom_proyecto, nom_encargado, puesto_encargado, tit_encargado
                                           FROM procesos as p INNER JOIN accounts as c ON p.matricula = c.matricula 
                                           where idmateria=$idmateria and idgrupo=$idgrupo");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;
    }
    public function recover_pass($email){
        $consulta=$this->db->query("select * from accounts where email='$email'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;
    }
}
	
?>