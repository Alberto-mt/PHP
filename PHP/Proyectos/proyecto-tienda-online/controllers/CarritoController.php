<?php
require_once 'models/producto.php';

/**
 * Class CarritoController
 */
class CarritoController{

    /**
     * index() - método que comprueba carrito de la compra
     */
    public function index(){
        //echo 'Controlador carrito, Acción index <br>';
        if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1){
            $carrito = $_SESSION['carrito'];
        }else{
            $carrito = array();
        }
        require_once 'views/carrito/index.php';
    }

    /**
     * add() - método que añade productos al carrito
     */
    public function add(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $id = intval($id);
        }else{
            echo '<script type="text/javascript">window.location ="'.BASE_URL.';</script>';
        }
        if(isset($_SESSION['carrito'])){
            //Si añado un elemento al carrito, que ya está, solo incremento su cantidad
            $counter = 0;
            foreach($_SESSION['carrito'] as $indice => $elemento){
                if($elemento['id_producto'] == $id){
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }
        }
        if(!isset($counter) || $counter == 0) {
            //Conseguir producto
            $productos = new Producto();
            $productoId = $productos->getOne($id);

            foreach ($productoId as $reg) {
                $id_producto = intval($reg["id"]);
                $nombre_producto = $reg["nombre"];
                $precio_producto = floatval($reg["precio"]);
                $imagen_producto = $reg["imagen"];
                $unidades = 1;
            }

            //Anadir a carrito
            $_SESSION['carrito'][] = array(
                "id_producto" => $id_producto,
                "nombre" => $nombre_producto,
                "precio" => $precio_producto,
                "imagen" => $imagen_producto,
                "unidades" => $unidades
            );
            //die();
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'carrito/index"'.';</script>';
    }

    /**
     * remove() - método que elimina productos del carrito por su index (array-asociativo)
     */
    public function delete(){
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            unset($_SESSION['carrito'][$index]);
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'carrito/index"'.';</script>';
    }

    /**
     * deleteAll() - método que elimina carrito
     */
    public function delete_all(){
        unset($_SESSION['carrito']);
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'carrito/index"'.';</script>';
    }

    /**
     * up() - método que incrementa carrito de 1 en 1
     */
    public function up(){
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            $_SESSION['carrito'][$index]['unidades']++;
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'carrito/index"'.';</script>';
    }

    /**
     * down() - método que decrementa carrito de 1 en 1
     */
    public function down(){
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            $_SESSION['carrito'][$index]['unidades']--;

            if($_SESSION['carrito'][$index]['unidades'] == 0){
                unset($_SESSION['carrito'][$index]);
            }
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'carrito/index"'.';</script>';
    }
}