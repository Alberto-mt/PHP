<?php
require_once 'models/Producto.php';

/**
 * Class ProductoController - clase del controlador ProductoController
 */
class ProductoController
{
    /**
     * index() - método para comprobar que se carga la página por la url
     *  http://localhost/DWES/Zbodega_online/index.php?controller=producto&action=index
     */
    public function index(){
        // Comprobar carga de la clase
        //echo "Controlador Producto, Acción index";
        $producto = new Producto();
        //6productos aleatorios con un limit de 6
        $productosRandom = $producto->getRandom(6);

        // Renderizar vista
        require_once 'views/producto/destacados.php';
    }

    /**
     * gestion() - método que devuelve todos los productos
     */
    public function gestion(){
        Utils::isAdmin();

        $producto = new Producto();
        $productosAll = $producto->getAll();

        require_once 'views/producto/gestion.php';
    }

    /**
     * crear() - método que lleva a la vista de crear
     */
    public function crear(){
        Utils::isAdmin();
        require_once 'views/producto/crear.php';
    }

    /**
     * save() - método que crea un producto
     */
    public function save(){
        Utils::isAdmin();
        if(isset($_POST["btnCrearProducto"])) {
            $nombre = isset($_POST["txtNombre"])?$_POST["txtNombre"]:false;
            $descripcion = isset($_POST["txtDescripcion"])?$_POST["txtDescripcion"]:false;
            $precio = isset($_POST["txtPrecio"])?$_POST["txtPrecio"]:false;
            $stock = isset($_POST["txtStock"])?$_POST["txtStock"]:false;
            $categoria = isset($_POST["selCategoria"])?$_POST["selCategoria"]:false;
            $imagen = isset($_POST["filImagen"])?$_POST["filImagen"]:false;

            // Parsear valores
            $precio = floatval($precio);
            $stock = intval($stock);
            $categoria = intval($categoria);

            if($nombre && $descripcion && $precio && $stock && $categoria && $imagen){
                $productos = new Producto();
                $save = $productos->save($nombre,$descripcion,$precio,$stock,$categoria,$imagen);
                if ($save){
                    $_SESSION['saveProducto'] = "complete";
                }else{
                    $_SESSION['saveProducto'] = "failed";
                }
            }else{
                $_SESSION['saveProducto'] = "failed";
            }
        }else{
            $_SESSION['saveProducto'] = "failed";
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'producto/gestion"'.';</script>';
    }

    /**
     * editar() - método que recoge el idProducto a eliminar
     */
    public function editar(){
        Utils::isAdmin();
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $id = intval($id);
            $productos = new Producto();
            $productoId = $productos->getOne($id);
        }
        require_once 'views/producto/editar.php';

    }

    /**
     * editar() - método que recoge el idProducto a eliminar
     */
    public function update(){
        Utils::isAdmin();
        if(isset($_POST["btnEditarProducto"])) {
            $id = isset($_POST["txtId"])?$_POST["txtId"]:false;
            $nombre = isset($_POST["txtNombre"])?$_POST["txtNombre"]:false;
            $descripcion = isset($_POST["txtDescripcion"])?$_POST["txtDescripcion"]:false;
            $precio = isset($_POST["txtPrecio"])?$_POST["txtPrecio"]:false;
            $stock = isset($_POST["txtStock"])?$_POST["txtStock"]:false;

            // Parsear valores
            $id = intval($id);
            $precio = floatval($precio);
            $stock = intval($stock);

            if($id && $nombre && $descripcion && $precio && $stock){
                $productos = new Producto();
                $update = $productos->edit($id,$nombre,$descripcion,$precio,$stock);
                if ($update){
                    $_SESSION['updateProducto'] = "complete";
                }else{
                    $_SESSION['updateProducto'] = "failed";
                }
            }else{
                $_SESSION['updateProducto'] = "failed";
            }
        }else{
            $_SESSION['updateProducto'] = "failed";
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'producto/gestion"'.';</script>';
    }

    /**
     * eliminar() - método que lleva a la vista de eliminar
     */
    public function eliminar(){
        Utils::isAdmin();
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $id = intval($id);
            $productos = new Producto();
            $delete = $productos->delete($id);
            if ($delete){
                $_SESSION['deleteProducto'] = "complete";
            }else{
                $_SESSION['deleteProducto'] = "failed";
            }

        }else{
            $_SESSION['deleteProducto'] = "failed";
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'producto/gestion"'.';</script>';
    }

    /**
     * ver() - método para ver producto por id
     */
    public function ver(){
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $id = intval($id);
            $productos = new Producto();
            $productoId = $productos->getOne($id);
        }
        require_once 'views/producto/ver.php';

    }
}