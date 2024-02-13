<?php
require_once 'models/Pedido.php';

/**
 * Class PedidoController
 */
class PedidoController{

    /**
     * index() - método para comprobar que se carga la página por la url
     */
    //public function index(){
    //    echo "Controlador Pedido, Acción index";

    //}

    /**
     * hacer() - método que llama a vista hacer
     */
    public function hacer(){

        require_once 'views/pedido/hacer.php';
    }

    /**
     * add() - método que añade producto al carrrito
     */
    public function add(){
        Utils::isUser();
        if(isset($_POST["btnHacerPedido"])) {
            //Datos que recibo del formulario
            $provincia = isset($_POST["selProvincia"])?$_POST["selProvincia"]:false;
            $poblacion = isset($_POST["txtLocalidad"])?$_POST["txtLocalidad"]:false;
            $direccion = isset($_POST["txtDireccion"])?$_POST["txtDireccion"]:false;
            $telefono = isset($_POST["txtTelefono"])?$_POST["txtTelefono"]:false;
            $tarjeta = isset($_POST["txtTarjeta"])?$_POST["txtTarjeta"]:false;
            $mesTarjeta = isset($_POST["txtMesTarjeta"])?$_POST["txtMesTarjeta"]:false;
            $anoTarjeta = isset($_POST["txtAnoTarjeta"])?$_POST["txtAnoTarjeta"]:false;
            //Datos que no recibo del formulario
            $usuario_id = $_SESSION["usuId"];
            $stats = Utils::statsCarrito();
            $coste = $stats["total"];

            // Parsear valores
            $provincia = intval($provincia);

            if($provincia && $poblacion && $direccion && $telefono && $tarjeta && $mesTarjeta && $anoTarjeta){
                $pedidos = new Pedido();
                $save = $pedidos->save($usuario_id,$provincia,$poblacion,$direccion,$coste,$telefono,$tarjeta,$mesTarjeta,$anoTarjeta);
                //Guardar linea de pedido
                $save_linea = $pedidos->save_line();

                if ($save && $save_linea){
                    $_SESSION['savePedido'] = "complete";
                }else{
                    $_SESSION['savePedido'] = "failed";
                }
            }else{
                $_SESSION['savePedido'] = "failed";
            }
            echo '<script type="text/javascript">window.location ="'.BASE_URL.'pedido/confirmado"'.';</script>';
        }else{
            $_SESSION['savePedido'] = "failed";
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'"'.';</script>';
    }

    /**
     * confirmado() - método que realiza el pago junto con los datos de envio
     */
    public function confirmado(){
        if(isset($_SESSION["usuId"])){
            $usuario_id = $_SESSION["usuId"];
            //Datos d pedido
            $pedido = new Pedido();
            $pedidoOneByUser = $pedido->getOneByUser($usuario_id);
            foreach($pedidoOneByUser as $reg){
                $id = $reg["id"];
            }
            //productos del pedido
            $pedidoProductos = new Pedido();
            $productosDelPedido = $pedidoProductos->getProductosByPedido($id);

            foreach($productosDelPedido as $reg){
                $idProducto=intval($reg["id"]);
                $stock = intval($reg["stock"]);
                $unidades = intval($reg["unidades"]);
                //Cantidad ha estar en stock
                $resta = $stock - $unidades;
                //No se pueden comprar productos que no hay
                if ($resta >=0){
                    //Actualizo el stock
                    $productosStock = new Pedido();
                    $pedidoProductoStock = $productosStock->updateStock($resta,$idProducto);
                    //Eliminar carrito para hacer una nueva compra
                    unset($_SESSION['carrito']);
                    //$_SESSION['stockPedido'] = "complete";
                }else{
                    $_SESSION['stockPedido'] = "failed";
                    echo '<script type="text/javascript">window.location ="'.BASE_URL.'carrito/index"'.';</script>';
                }
            }

        }
        require_once 'views/pedido/confirmado.php';
    }

    /**
     * mis_pedidos- método que muestra los pedidos de un usuario
     */
    public function mis_pedidos(){
        Utils::isUser();
        if(isset($_SESSION["usuId"])){
            $usuario_id = $_SESSION["usuId"];
            //Sacar los pedidos del usuario
            $pedido = new Pedido();
            $pedidoAllByUser = $pedido->getAllByUser($usuario_id);
        }
        require_once 'views/pedido/mis_pedidos.php';
    }

    /**
     * detalle() - método que muestra el detalle del pedido
     */
    public function detalle(){
        Utils::isUser();
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            //Sacar el pedido
            $pedido = new Pedido();
            $pedidoOne = $pedido->getOne($id);
            foreach($pedidoOne as $reg){
                $id = $reg["id"];
            }
            //Sacar los productos del pedido
            $pedidoProductos = new Pedido();
            $productosDetalle = $pedidoProductos->getProductosByPedido($id);

            require_once 'views/pedido/detalle.php';
        }else{
            echo '<script type="text/javascript">window.location ="'.BASE_URL.'pedido/mis_pedidos'.';</script>';
        }
    }

    /**
     * gestion() - metodo que muestra todos los pedidos
     */
    public function gestion(){
        Utils::isAdmin();

        $pedido = new Pedido();
        $pedidosGestion = $pedido->getAll();

        require_once 'views/pedido/gestion.php';
    }

    /**
     * estado() - método que cambia de estado del pedido por idPedido
     */
    public function estado(){
        Utils::isAdmin();
        if(isset($_POST["btnEstadoPedido"])) {
            //Datos que recibo del formulario
            $id = isset($_POST["txtPedidoId"])?intval($_POST["txtPedidoId"]):false;
            $estado = isset($_POST["selEstado"])?$_POST["selEstado"]:false;

            if($id && $estado){
                // Actualizo el estado del pedido
                $pedidoEstado = new Pedido();
                $updateEstado = $pedidoEstado->update($estado,$id);
            }
            echo '<script type="text/javascript">window.location ="'.BASE_URL.'pedido/gestion"'.';</script>';
        }else{
            echo '<script type="text/javascript">window.location ="'.BASE_URL.''.';</script>';
        }
    }

}