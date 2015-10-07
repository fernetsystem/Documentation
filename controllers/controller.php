<?php 
require_once("model/model.php");
class controller{
	private $Mymodel;

	public function __construct(){
		$this->myModel = new model();
	}
	public function Index(){
        require_once 'views/header.inc';	
        require_once 'views/loginUser.php';        
        require_once 'views/footer.inc';
	}

	public function valida(){
		$tipo_de_usuario="";
		$datos = $this->myModel->get_login($_REQUEST['mat'],$_REQUEST['pass']);
		if($datos > 0){
			//Obtener la matricula al logeo y pasarla a variable de sesion
			session_start();
			$_SESSION['matr'] = $_REQUEST['mat'];;
			$getData=$this->myModel->get_matricula($_REQUEST['mat']);
			foreach ($getData as $dato) {
            	$_SESSION['email']=$dato['email'];
            	$tipo_de_usuario=$dato['tipo_user'];
            }
            $_SESSION['email'];
			$_SESSION['matr'];

            switch ($tipo_de_usuario) {
            	case 'ADMIN':
						require_once 'views/headerAdm.inc';				
						require_once 'views/homeAdm.php'; 
						require_once 'views/footerAdm.inc';            		
            		break;
            	case 'ASESOR':
						require_once 'views/headerAsesor.inc';				
						require_once 'views/homeAsesor.php'; 
						require_once 'views/footerAsesor.inc';
            		break;
            	case 'ALUMNO':
						require_once 'views/headerAlumno.inc';				
						require_once 'views/homeAlumno.php';			
						require_once 'views/footerAlumno.inc';
            		break;
            }
		}else{
			echo "ERROR";
		}
	}
	public function registraAlumno(){
		$datos = $this->myModel->get_registro_alumno($_REQUEST['mat'],$_REQUEST['email'],$_REQUEST['pass']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
		$myController = new controller();
		$myController->formAddLogin();
	}
	public function fillDataAlumno(){
		//Tomar la variable de sesion por que los campos desabilitados no responden al request
		session_start();
		$datos =$this->myModel->get_data_alumno($_SESSION['matr'],$_REQUEST['nom'],$_REQUEST['pat'],$_REQUEST['mate'],$_REQUEST['crp'],$_REQUEST['tel']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	#Mandar a llamar el formulario para registrar alumno
	public function formAddAlum(){
        require_once 'views/header.inc';		
        require_once 'views/registrarUser.php';        
        require_once 'views/footer.inc';
	}
	#Mandar a llamar el formulario para logearce
	public function formAddLogin(){
        require_once 'views/header.inc';		
        require_once 'views/loginUser.php';        
        require_once 'views/footer.inc';
	}
	#Mandar a llamar el formulario de los datos del alumno
	public function formDataAlumno(){
		require_once 'views/headerAlumno.inc';		
		require_once 'views/fillDataAlumno.php';        
		require_once 'views/footerAlumno.inc';
	}
	#Mandar a llamar el formulario de todos los documentos de estancia1
	public function formDocumentsEstancias1(){
		session_start();
		$materia="Estancias1";
		$datos = $this->myModel->fill_documents($_SESSION['matr'],$materia);
		
		require_once 'views/headerAlumno.inc';		
		require_once 'views/allDocumentsEstancias1.php';        
		require_once 'views/footerAlumno.inc';
	}
		#Mandar a llamar el formulario de todos los documentos de estancia1
	public function formDocumentsEstancias2(){
		require_once 'views/headerAlumno.inc';		
		require_once 'views/allDocumentsEstancias1.php';        
		require_once 'views/footerAlumno.inc';
	}
	#Método para destruir variables de sesion;
	public function closeSession(){
		session_start();
		session_destroy();
		$myController = new controller();
		$myController->Index();	
	}
	public function fillDataEnterpriseEs1(){
		session_start();
		$materia = "Estancias 1";
		$validaMateria="";
		$getData = $this->myModel->validate_materia_aprobada($_SESSION['matr'],$materia);
		foreach ($getData as $dato) {
            	$validaMateria=$dato['estado'];
        }
        if ($validaMateria=="ACTIVADA") { #cambiar el estado [ASESOR]
			require_once 'views/headerAlumno.inc';		
			require_once 'views/fillDataEnterpriseE1.php';        
			require_once 'views/footerAlumno.inc';
        }else{
        	require_once 'views/headerAlumno.inc';
        	echo "<h3>No esta habilitado este proceso</h3>";
        	require_once 'views/footerAlumno.inc';
		}
	}
	public function fillDataEnterpriseEs2(){
		session_start();
		$materia = "Estancias 2";
		$validaMateria="";
		$getData = $this->myModel->validate_materia_aprobada($_SESSION['matr'],$materia);
		foreach ($getData as $dato) {
            	$validaMateria=$dato['estado'];
        }
        if ($validaMateria=="ACTIVADA") { #cambiar el estado [ASESOR]
			require_once 'views/headerAlumno.inc';		
			require_once 'views/fillDataEnterpriseE2.php';        
			require_once 'views/footerAlumno.inc';
        }else{
        	require_once 'views/headerAlumno.inc';
        	echo "<h3>No esta habilitado este proceso</h3>";
        	require_once 'views/footerAlumno.inc';
		}
	}
	public function fillDataEnterpriseEstadias(){
		session_start();
		$materia = "Estadias";
		$validaMateria="";
		$getData = $this->myModel->validate_materia_aprobada($_SESSION['matr'],$materia);
		foreach ($getData as $dato) {
            	$validaMateria=$dato['estado'];
        }
        if ($validaMateria=="ACTIVADA") { #cambiar el estado [ASESOR]
			require_once 'views/headerAlumno.inc';		
			echo "<h4>Contruyendo formulario</h4>";     
			require_once 'views/footerAlumno.inc';
        }else{
        	require_once 'views/headerAlumno.inc';
        	echo "<h3>No esta habilitado este proceso</h3>";
        	require_once 'views/footerAlumno.inc';
		}
	}
	
	public function registraEnterpriseEs1(){
		$datos = $this->myModel->search_enterprise($_REQUEST['nom_emp']);
		echo "EMPRESAS ENCONTRADAS<br/>";
		foreach ($datos as $dato) {
			echo "->".$dato['empresa']."<br/>";
		}
		//$datos = $this->myModel->insert_enterprise($_REQUEST['nom_emp'],$_REQUEST['tel'],$_REQUEST['email']);
		
	}
	public function viewDocumentComprimiso(){
		require_once 'views/documentCartaCompromiso.php';
	}	
	public function viewDocumentPresentacion(){
		require_once 'views/documentCartaDePresentacion.php';
	}
	public function viewDocumentInformeQuin(){
		require_once 'views/documentCartaInformeQuincenal.php';
	}
	public function printNdoc(){
		$datos = $this->myModel->search_document($_REQUEST['no_documento']);
		echo $_REQUEST['no_documento'];
	}
	#Mandar a llamar el formulario para sugerir empresa
	public function suggestEnterprise(){
		require_once 'views/headerAlumno.inc';		
		require_once 'views/suggest_enterprise.php';        
		require_once 'views/footerAlumno.inc';
	}

}

?>