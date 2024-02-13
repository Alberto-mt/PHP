<?php

/**
 * Class Utils
 */
class Utils
{
    /**
     * deleteSession($name) - método que me borra la ultima sesión por nombre
     * @param $name
     * @return mixed
     */
    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    /**
     *  isAdmin() - método que controla accesos
     *  - si el rol existe y es igual a usuario, me lleva  a la página principal
     *  - no, es true
     * @return bool
     */
    public static function isAdmin(){
        if(isset($_SESSION["usuRol"])&& $_SESSION["usuRol"] == 'Usuario'){
            //echo '<script type="text/javascript">history.back();</script>';
            echo '<script type="text/javascript">window.location ="'.BASE_URL.'";</script>';

        }else{
            return true;
        }
    }

    /**
     *  isUser() - método que controla accesos
     *  - si el rol existe y es igual a usuario,es true
     *  - no, me lleva  a la página principal
     * @return bool
     */
    public static function isUser(){
        if(isset($_SESSION["usuRol"])){
            //echo '<script type="text/javascript">history.back();</script>';
            return true;
        }else{
            echo '<script type="text/javascript">window.location ="'.BASE_URL.'";</script>';
        }
    }


    /**
     * showCategorias() - método que me retorna categoriasAll de su modelo (para menú header)
     * @return array|bool|mysqli_result
     */
    public static function showCategorias(){
        require_once 'models/Categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    }

    /**
     * statsCarrito() - método que actualiza el carrito
     */
    public static function statsCarrito(){
        $stats = array(
            'count' => 0,
            'total' => 0
        );
        if(isset($_SESSION['carrito'])){
            // Contador de productos
            $stats['count'] = count($_SESSION['carrito']);
            // Contador de total
            foreach($_SESSION['carrito'] as $producto){
                $stats['total'] += $producto['precio']*$producto['unidades'];
            }
            if($stats['count'] >= 1){
                $stats['total'] = $stats['total'] + ENVIO;
            }

        }
        return $stats;
    }

    /**
     * showCategorias() - método que me retorna categoriasAll de su modelo (para menú header)
     * @return array|bool|mysqli_result
     */
    public static function showProvincias(){
        require_once 'models/Provincia.php';
        $provincia = new Provincia();
        $provincias = $provincia->getAll();
        return $provincias;
    }

    /**
     * showStatus($status) - método que muestra una frase que corresponde al estado
     * @param $status
     * @return string
     */
    public static function showStatus($status){
        $value = 'Pendiente';
        if($status == 'confirm'){
            $value = 'Pendiente';
        }elseif($status == 'preparation'){
            $value = 'En preparación';
        }elseif($status == 'ready'){
            $value = 'Preparado para enviar';
        }elseif($status = 'sended'){
            $value = 'Enviado';
        }
        return $value;
    }

    /**
     * showInfo() - método que muestra la información de la empresa
     * @return array
     */
    public static function showInfo(){
        require_once "models/InfoGeneral.php";
        $infoGeneral = new InfoGeneral();
        $infoAll = $infoGeneral->getInfoGeneral();
        return $infoAll;
    }

    /**
     * showMadrid($provincia) - método que muestra madrid a traves de su id
     * @param $provincia
     * @return string
     */
    public static function showMadrid($provincia){
        $value = '';
        if($provincia == 28){
            $value = 'Madrid';
        }
        return $value;
    }
}