<?php
require_once "models/Categoria.php";
require_once "models/Producto.php";

/**
 * Class CategoriaController
 */
class CategoriaController{
    /**
     * index() - método que carga todas las categorias
     */
	public function index(){
        //echo "Controlador Categoria, Acción index";
        Utils::isAdmin();
        $categorias = new Categoria();
        $categoriasAll = $categorias->getAll();
        require_once 'views/categoria/index.php';
	}

    /**
     * crear() - método que lleva a la vista de crear
     */
    public function crear(){
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    /**
     * save() - método que crea una categoria
     */
    public function save(){
        Utils::isAdmin();
        if(isset($_POST["btnCrearCategoria"])) {
            $nombre = isset($_POST["txtNombre"])?$_POST["txtNombre"]:false;
            if($nombre){
                $categorias = new Categoria();
                $save = $categorias->save($nombre);
                if ($save){
                    $_SESSION['saveCategoria'] = "complete";
                }else{
                    $_SESSION['saveCategoria'] = "failed";
                }
            }else{
                $_SESSION['saveCategoria'] = "failed";
            }
        }else{
            $_SESSION['saveCategoria'] = "failed";
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'categoria/index"'.';</script>';
    }

    /**
     * eliminar() - método que lleva a la vista de eliminar
     */
    public function eliminar(){
        Utils::isAdmin();
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $id = intval($id);
            $categorias = new Categoria();
            $delete = $categorias->delete($id);
            if ($delete){
                $_SESSION['deleteCategoria'] = "complete";
            }else{
                $_SESSION['deleteCategoria'] = "failed";
            }

        }else{
            $_SESSION['deleteCategoria'] = "failed";
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'categoria/index"'.';</script>';

    }

    public function ver(){

        if(isset($_GET['id'])){

            //Conseguir categoria
            $id = $_GET["id"];
            $id = intval($id);
            $categorias = new Categoria();
            $categoriaId = $categorias->getOne($id);

            //Conseguir productos
            $productos = new Producto();
            $productosAllCategory = $productos->getAllCategory($id);

        }
        require_once 'views/categoria/ver.php';

    }
}
