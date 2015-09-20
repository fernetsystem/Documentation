<?php 
require_once("model/model.php");
class controller{
	private $Mymodel;

	public function __construct(){
		$this->myModel = new model();
	}
	public function Index(){
        require_once 'header.inc';
		require_once 'views/loginUser.php';
        #require_once 'views/registrarUser.php';
        require_once 'footer.inc';
	}

	public function valida(){
		$datos = $this->myModel->get_login($_REQUEST['mat'],$_REQUEST['pass']);
		if($datos > 0){
			echo "SUCCESS";
		}else{
			echo "ERROR";
		}
	}

}

?>