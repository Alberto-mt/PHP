<?php

/**
 * Class errorController
 */
class ErrorController{
    /**
     * index() - muestra error por defecto al no encontrar página
     */
    public function index(){
        echo "<h1>La página que buscas no existe :(</h1>";
    }
}
