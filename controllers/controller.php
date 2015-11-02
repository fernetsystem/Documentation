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
			$_SESSION['matr'] = $_REQUEST['mat'];
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
            			$myController = new controller();
						$myController->myNumAsesorSession();
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
		$datos = $this->myModel->get_registro_alumno($_REQUEST['mat'],$_REQUEST['pass'],$_REQUEST['nom'],$_REQUEST['pat'],$_REQUEST['mate'],$_REQUEST['email'],$_REQUEST['crp'],$_REQUEST['carr'],$_REQUEST['sex']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
		$myController = new controller();
		$myController->formAddLogin();
	}
	public function registraAsesor(){
		$exitsToken = $this->myModel->validate_token($_REQUEST['token'],$_REQUEST['mat']);
		if ($exitsToken>0) {
			$datos = $this->myModel->get_registro_asesor($_REQUEST['mat'],$_REQUEST['pass'],$_REQUEST['nom'],$_REQUEST['pat'],$_REQUEST['mate'],$_REQUEST['email'],$_REQUEST['crp'],$_REQUEST['carr'],$_REQUEST['sex']);
			if($datos > 0){
				echo "SUCCESS";
			}else{
				echo "ERROR";
			}
			$myController = new controller();
			$myController->formAddLogin();				
		}else{
			echo "TOKEN NO EXISTE";
		}

	}
	public function editData(){#probar editanto matricula
		session_start();
		$datos = $this->myModel->edit_data($_SESSION['matr'],$_REQUEST['mat'],$_REQUEST['pass'],$_REQUEST['nom'],$_REQUEST['pat'],$_REQUEST['mate'],$_REQUEST['email'],$_REQUEST['crp'],$_REQUEST['sex']);
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
		session_start();
		$datos = $this->myModel->get_matricula($_SESSION['matr']);
		require_once 'views/headerAlumno.inc';		
		require_once 'views/dataOfMyAccount.php';        
		require_once 'views/footerAlumno.inc';
	}
	#Mandar a llamar el formulario de los datos del asesor
	public function formDataAsesor(){
		session_start();
		$datos = $this->myModel->get_matricula($_SESSION['matr']);
		require_once 'views/headerAsesor.inc';		
		require_once 'views/dataOfMyAccount.php';        
		require_once 'views/footerAsesor.inc';
	}
	#Mandar a llamar el formulario de todos los documentos de estancia1
	public function formDocumentsEstancias1(){
		$datos = $this->myModel->fill_documents($_SESSION['matr'],1);
		require_once 'views/allDocuments.php';        

	}
	#Mandar a llamar el formulario de todos los documentos de estancia1
	public function formDocumentsEstancias2(){
		$datos = $this->myModel->fill_documents($_SESSION['matr'],2);
		require_once 'views/allDocuments.php';        
	}
	#Mandar a llamar el formulario de todos los documentos de estadias
	public function formDocumentsEstad(){
		$datos = $this->myModel->fill_documents($_SESSION['matr'],3);
		require_once 'views/allDocuments.php';        
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
	#Obtener id del documento
	public function printNdoc(){
		$datos = $this->myModel->search_document($_REQUEST['no_documento']);
		echo $_REQUEST['no_documento'];
	}
	public function fillDataEnterpriseEs1(){
		session_start();
		$validaMateria="";
		$getData = $this->myModel->validate_materia_aprobada($_SESSION['matr'],1);
		foreach ($getData as $dato) {
            	$validaMateria=$dato['estado_pro'];
        }
        if ($validaMateria=="ACTIVADA") { #cambiar el estado [ASESOR]
			require_once 'views/headerAlumno.inc';		
			$datos = $this->myModel->get_list_enterprises();
			require_once 'views/fillDataEnterpriseE1.php';
			require_once 'views/footerAlumno.inc';
        }else if($validaMateria=="VALIDADO"){
        	require_once 'views/headerAlumno.inc';
        	$myController = new controller();
			$myController->formDocumentsEstancias1();				
        	require_once 'views/footerAlumno.inc';
		}else{
			require_once 'views/headerAlumno.inc';
        	echo "<h3>No esta habilitado este proceso</h3>";
        	require_once 'views/footerAlumno.inc';

		}
	}
	
	public function fillDataEnterpriseEs2(){
		session_start();
		$validaMateria="";
		$getData = $this->myModel->validate_materia_aprobada($_SESSION['matr'],2);
		foreach ($getData as $dato) {
            	$validaMateria=$dato['estado_pro'];
        }
        if ($validaMateria=="ACTIVADA") { #cambiar el estado [ASESOR]
			require_once 'views/headerAlumno.inc';		
			require_once 'views/fillDataEnterpriseE2.php';        
			require_once 'views/footerAlumno.inc';
        }else if($validaMateria=="VALIDADO"){
        	require_once 'views/headerAlumno.inc';
        	$myController = new controller();
			$myController->formDocumentsEstancias2();	
        	require_once 'views/footerAlumno.inc';
		}else{
			require_once 'views/headerAlumno.inc';
        	echo "<h3>No esta habilitado este proceso</h3>";
        	require_once 'views/footerAlumno.inc';

		}
	}
	public function fillDataEnterpriseEstadias(){
		session_start();
		$validaMateria="";
		$getData = $this->myModel->validate_materia_aprobada($_SESSION['matr'],3);
		foreach ($getData as $dato) {
            	$validaMateria=$dato['estado_pro'];
        }
        if ($validaMateria=="ACTIVADA") { #cambiar el estado [ASESOR]
			require_once 'views/headerAlumno.inc';		
			require_once 'views/fillDataEnterpriseEstad.php';    
			require_once 'views/footerAlumno.inc';
        }else if($validaMateria=="VALIDADO"){
        	require_once 'views/headerAlumno.inc';
        	$myController = new controller();
			$myController->formDocumentsEstad();	
        	require_once 'views/footerAlumno.inc';
		}else{
			require_once 'views/headerAlumno.inc';
        	echo "<h3>No esta habilitado este proceso</h3>";
        	require_once 'views/footerAlumno.inc';

		}
	}
	public function updateProceesE1(){
		session_start();
		$datos = $this->myModel->update_data_process($_REQUEST['rfc'],$_REQUEST['fi'],$_REQUEST['ft'],$_REQUEST['pro'],$_REQUEST['nomc'],$_REQUEST['pue'],$_REQUEST['tit'],$_SESSION['matr'],1);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	public function updateProceesE2(){
		session_start();
		$datos = $this->myModel->update_data_process($_REQUEST['rfc'],$_REQUEST['fi'],$_REQUEST['ft'],$_REQUEST['pro'],$_REQUEST['nomc'],$_REQUEST['pue'],$_REQUEST['tit'],$_SESSION['matr'],2);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	public function updateProceesEstad(){
		session_start();
		$datos = $this->myModel->update_data_process($_REQUEST['rfc'],$_REQUEST['fi'],$_REQUEST['ft'],$_REQUEST['pro'],$_REQUEST['nomc'],$_REQUEST['pue'],$_REQUEST['tit'],$_SESSION['matr'],3);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	public function viewDataProcess(){
		session_start();
		$datos = $this->myModel->get_all_data_alumno_process($_SESSION['idmater'],$_REQUEST['mat']);
		require_once 'views/headerAsesor.inc';		
		require_once 'views/viewDataProcess.php'; 
		require_once 'views/footerAsesor.inc';
	}
	public function generateDocuments(){
		session_start();
		$datos = $this->myModel->generate_documents($_SESSION['idmater'],$_REQUEST['proc']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	public function formCalif(){
		$matriculaDelAlumno = $_REQUEST['mat']; #variable oculta para reutilizarla
		$nomb = $_REQUEST['nom'];
		$pat = $_REQUEST['pater'];
		$mat = $_REQUEST['mater'];
		$nombreDelAlumno = $nomb." ".$pat." ".$mat;
		require_once 'views/headerAsesor.inc';				
		require_once 'views/formCalif.php'; 
		require_once 'views/footerAsesor.inc';  
	}
	public function updateProcE1Calfc(){
		session_start();	//La session para obtener el id de la materia
		if ($_REQUEST['calf']>=7) { 
			$estadoMat = "APROBADA";
		}else{
			$estadoMat= "REPROBADA";
		}
		$datos = $this->myModel->update_proc_calif($_REQUEST['calf'],$estadoMat,$_REQUEST['mat'],$_SESSION['idmater']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	#Mandar a llamar el formulario para sugerir empresa - Alumno
	public function suggestEnterprise(){
		require_once 'views/headerAlumno.inc';		
		require_once 'views/suggest_enterprise.php';        
		require_once 'views/footerAlumno.inc';
	}
	#Enviar sugerencia de empresa - Alumno
	public function sendSuggestEnterprise(){
		$datos = $this->myModel->suggest_enterprise($_REQUEST['rfc'],$_REQUEST['nom_emp'],$_REQUEST['sec'],$_REQUEST['dir'],$_REQUEST['tel'],$_REQUEST['email']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	public function listEnterprises(){ #View Asesor
		$datos = $this->myModel->get_list_enterprises();
		require_once 'views/headerAsesor.inc';				
		require_once 'views/list_enterprises.php'; 
		require_once 'views/footerAsesor.inc';            		

	}
	public function listEnterprisesSuggest(){ #View Asesor
		$datos = $this->myModel->get_list_enterprises_suggest();
		require_once 'views/headerAsesor.inc';				
		require_once 'views/list_enterprises_suggest.php'; 
		require_once 'views/footerAsesor.inc';            		

	}
	public function updateEstateEnterpriseAlta(){ #Cambiar el estado a 1 que es alta de empresa
		$datos = $this->myModel->alta_enterprise_asesor($_REQUEST['rfc']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	public function deleteSuggesEnterprise(){
		$datos = $this->myModel->delete_enterprise_suggest($_REQUEST['rfc']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}	
	}
	//_______________NO FUNCIONA
	public function countEnterprisesSuggestToMenu(){
		$datos = $this->myModel->count_enterprises_Suggest();
		$n_empresa = $this->myModel->count_enterprises_Suggest();
		foreach ($n_empresa as $num_emp) {
			$num_empresas=$num_emp['n'];
		}	
		#require_once 'views/headerAdm.inc';
		#echo "<h2>".$num_empresas."</h2>";
	}
	public function formTokensAdmin(){
		require_once 'views/headerAdm.inc';				
		require_once 'views/formTokensAdm.php'; 
		$myController = new controller();
		$myController->allTokens();	
		require_once 'views/footerAdm.inc';            				
	}
	public function addTokenAsesor(){
		$datos = $this->myModel->add_token_asesor($_REQUEST['token'],$_REQUEST['matr']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	public function allTokens(){
		$datos = $this->myModel->all_tokens();
				
		require_once 'views/list_tokens.php'; 
		
	}
	#Mandar obtener el numero de asesor
	public function myNumAsesorSession(){
		$getAsesor = $this->myModel->get_no_asesor($_SESSION['matr']);
		foreach ($getAsesor as $asesor) {
			$nAse=$asesor['no_asesor'];
		}
		$_SESSION['numAsesor'] = $nAse;	
	}
	public function myListGroupsE1(){
		session_start();
		$datos = $this->myModel->all_my_groups_E1($_SESSION['numAsesor']);
		require_once 'views/headerAsesor.inc';			
		require_once 'views/myGroupsE1.php'; 
		require_once 'views/footerAsesor.inc';
	}
	public function myListGroupsE2(){
		session_start();
		$datos = $this->myModel->all_my_groups_E2($_SESSION['numAsesor']);
		require_once 'views/headerAsesor.inc';			
		require_once 'views/myGroupsE2.php'; 
		require_once 'views/footerAsesor.inc';	
	}
	public function myListGroupsEstad(){
		session_start();
		$datos = $this->myModel->all_my_groups_Estad($_SESSION['numAsesor']);
		require_once 'views/headerAsesor.inc';			
		require_once 'views/myGroupsEstad.php'; 
		require_once 'views/footerAsesor.inc';	
	}
	public function groupSelect(){
		session_start(); //guardar el idgrupo seleccinado y la idmateria
		$_SESSION['idgroup'] = $_REQUEST['idgroup'];
		$_SESSION['idmater'] = $_REQUEST['idmat'];
		require_once 'views/headerAsesor.inc';
		require_once 'views/insertProcessForAsesor.php'; 
		$myController = new controller();
		$myController->listAlumnosInMyGroup();			//llamar al listado de alumno
		require_once 'views/footerAsesor.inc';	
	}
	//tabla para listar alumno y seguimiento
	public function listAlumnosInMyGroup(){
		
		$datos = $this->myModel->get_list_alumnos_in_my_group($_SESSION['idmater'],$_SESSION['idgroup']);
		require_once 'views/list_alumnos_asesor.php'; 
	}
	//agregar alumno al grupo
	public function addAlumnoToGroup(){ 
		session_start();
		$datos = $this->myModel->add_alumno_to_group($_REQUEST['matr'],$_SESSION['idmater'],$_SESSION['idgroup']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}
	#Mandar a llamar vista para ver grupos
	public function formAddGroup(){
		require_once 'views/headerAsesor.inc';				
		require_once 'views/formAddGroup.php'; 
		require_once 'views/footerAsesor.inc';	
	}
	public function addGroupAsesor(){
		session_start();
		//________VALIDAR QUE NO SE DUPLIQUEN GRUPOS
		
		$datos = $this->myModel->add_group_asesor($_REQUEST['group'],$_REQUEST['per'],$_SESSION['numAsesor']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}	
	#Mandar a llamar el formulario para recuperar contra
	public function formRecoverPass(){
   		require_once 'views/header.inc';	
        require_once 'views/myPassRecover.php';        
        require_once 'views/footer.inc';
	}
	public function recoverPass(){
		$subject = "Sistema estancias y estadias RECOVER PASS";
		$p="";
		$destino = $_REQUEST['emai'];
		$datos = $this->myModel->recover_pass($_REQUEST['emai']);
		foreach ($datos as $dato) {
			$p=$dato['password'];
		}
		$myMsn = "Excelente dia!! Tu contraseña es: ".$p;
		try {
			mail($destino,$subject, $myMsn);
		} catch (Exception $e) {
			echo "Error:".$e;
		}
		$myController = new controller();
		$myController->Index();	
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