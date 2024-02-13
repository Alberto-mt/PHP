<?php
/**
 *  controllers_autoload($classname) - Función que autocarga los controladores
 * Se mete en la carpeta de controllers y carga todos los controladores con un include
 * @param $classname - clase del controller
 */
function controllers_autoload($classname){
    include 'controllers/' . $classname . '.php';
}

// Pasar 'controllers_autoload' al spl
spl_autoload_register('controllers_autoload');
