<?php
session_start();
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'helpers/Utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

/**
 *  Función que llama a show_error()
 */
function show_error(){
    $error = new ErrorController();
    $error->index();
}

/**
 *  Comprobar que llega el controlador por la url
 *  - si llega: genero una variable - $nombre_controlador
 *  - no llega: corto la ejecución
 */
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}
elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    // Si no tengo cargado un controlador(controller) cargo ProductoController
    $nombre_controlador = CONTROLLER_DEFAULT;

}
else{
    //echo 'ERROR - La página que buscas no existe';
    show_error();
    exit();
}

/**
 *  Comprobar si existe el controlador
 *  - si existe: creo objeto
 *  - no existe: corto la ejecución
 */
if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();
    //Comprobar accion y que el método existe y llamo al método
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }
    elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        // Si no tengo cargado un controlador(controller) y su método(antion), muestra página principal(index)
        $action_default = ACTION_DEFAULT;
        $controlador->$action_default();
    }
    else{
        //echo 'ERROR - La página que buscas no existe';
        show_error();
    }
}else{
    //echo 'ERROR - La página que buscas no existe';
    show_error();
}

require_once 'views/layout/footer.php';

