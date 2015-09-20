<?php
require_once("model/db.php");
require_once("controllers/controller.php");


// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    $controller = new controller;
    $controller->Index();    
} else {
    // Obtenemos el controlador que queremos cargar
    $controller = $_REQUEST['c'];
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    $controller = new controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}