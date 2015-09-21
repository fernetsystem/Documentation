<?php 
require_once("model/model.php");
class controller{
	private $Mymodel;

	public function __construct(){
		$this->myModel = new model();
	}
	public function Index(){
        require_once 'views/header.inc';	require_once 'views/loginUser.php';        require_once 'views/footer.inc';
	}

	public function valida(){
		$datos = $this->myModel->get_login($_REQUEST['mat'],$_REQUEST['pass']);
		if($datos > 0){
			//Obtener la matricula al logeo y pasarla a variable de sesion
			session_start();
			$_SESSION['matr'] = $_REQUEST['mat'];;
			$getData=$this->myModel->get_matricula($_REQUEST['mat']);
			foreach ($getData as $dato) {
            	$_SESSION['email']=$dato['email'];
            }
            $_SESSION['email'];
			$_SESSION['matr'];
			require_once 'views/headerAlumno.inc';				require_once 'views/homeAlumno.php';			require_once 'views/footerAlumno.inc';
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
		$datos = $this->myModel->fill_documents_estancia1($_SESSION['matr']);
		
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

}

?>