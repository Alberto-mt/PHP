<?php

/**
 * Class Pedido
 */
class Pedido{
    private $db;
    private $pedidos;
    private $pedidos2;
    private $pedidos3;
    private $pedidos4;
    private $pedidos5;

    /**
     * Pedido constructor.
     */
    public function __construct()
    {
        require_once 'config/db.php';
        $this->db = Database::connect();
        $this->pedidos = array();
    }

    /**
     * getAll() - método que carga todos los pedidos en un vector(getPedido())
     * @return array
     */
    public function getAll(){
        $consulta = $this->db->query("select * from pedidos order by id desc");
        while ($fila = $consulta->fetch_assoc()) {
            $this->pedidos[] = $fila;
        }
        return $this->pedidos;
    }

    /**
     * getOne() - método que carga un pedido
     * @return array
     */
    public function getOne($id){
        $consulta = $this->db->query("select * from pedidos where id = $id");
        while ($fila = $consulta->fetch_assoc()) {
            $this->pedidos2[] = $fila;
        }
        return $this->pedidos2;
    }

    /**
     * getOneByUser() - método que carga un pedido por id de usuario
     * @return array
     */
    public function getOneByUser($usuario_id){
        $sql = "select p.id, p.coste from pedidos p "
            //."INNER JOIN lineas_pedidos lp on lp.pedido_id = p.id "
        ."where p.usuario_id = $usuario_id ORDER BY id DESC LIMIT 1";

        $consulta = $this->db->query($sql);
        //echo $sql;
        //echo $this->>db->error;
        //die();
        while ($fila = $consulta->fetch_assoc()) {
            $this->pedidos3[] = $fila;
        }
        return $this->pedidos3;
    }

    /**
     * getAllByUser() - método que carga un pedido por id de usuario
     * @return array
     */
    public function getAllByUser($usuario_id){
        $sql = "select p.* from pedidos p "
            //."INNER JOIN lineas_pedidos lp on lp.pedido_id = p.id "
            ."where p.usuario_id = $usuario_id ORDER BY id DESC";

        $consulta = $this->db->query($sql);
        //echo $sql;
        //echo $this->>db->error;
        //die();
        while ($fila = $consulta->fetch_assoc()) {
            $this->pedidos5[] = $fila;
        }
        return $this->pedidos5;
    }

    /**
     * getOneByUser() - método que carga un pedido por id de usuario
     * @return array
     */
    public function getProductosByPedido($id){
        //Sin mostrar cantidad
        //$sql = "SELECT * FROM productos WHERE id IN "
        //    ."(SELECT producto_id FROM lineas_pedidos WHERE pedido_id = $id)";

        // Mostrando cantidad
        $sql = "SELECT pr.*, lp.unidades FROM productos pr "
            . "INNER JOIN lineas_pedidos lp ON pr.id = lp.producto_id "
            . "WHERE lp.pedido_id= $id";

        $consulta = $this->db->query($sql);
        //echo $sql;
        //echo $this->>db->error;
        //die();
        while ($fila = $consulta->fetch_assoc()) {
            $this->pedidos4[] = $fila;
        }
        return $this->pedidos4;
    }

    /**
     * save() - método que inserta en la BBDD los parametros recibidos
     * @param $usuario_id
     * @param $provincia
     * @param $poblacion
     * @param $direccion
     * @param $coste
     * @return bool
     */
    public function save($usuario_id,$provincia,$poblacion,$direccion,$coste,$telefono,$tarjeta,$mesTarjeta,$anoTarjeta){
        $estado = 'confirm';
        $stmt = $this->db->prepare("INSERT INTO pedidos (usuario_id,provincia,poblacion,direccion,telefono,tarjeta,mes,ano,coste,estado) 
                VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_Param("iissssssds",$usuario_id,$provincia,$poblacion,$direccion,$telefono,$tarjeta,
            $mesTarjeta,$anoTarjeta,$coste,$estado);
        //echo $this->db->error;
        //die();
        $stmt->execute();
        // Si se ejecuta el resultado lo devuelve
        $resultado = false;
        if($stmt){
            $resultado = true;
        }
        $stmt->close();
        return $resultado;
    }

    /**
     * save_line() - método que inserta linea de pago al insertar un pedido en BBDD
     * @return bool
     */
    public function save_line(){
        //Recoger el ultimo pedido insertado
        $stmt = $this->db->query("SELECT MAX(id) AS id_ultimo FROM pedidos;");
        $pedido_id = intval($stmt->fetch_object()->id_ultimo);
        //var_dump($pedido_id);

        foreach($_SESSION["carrito"] as $elemento){
            $idProducto = $elemento["id_producto"];
            $unidades = $elemento["unidades"];

             $insert = "INSERT INTO lineas_pedidos (pedido_id, producto_id,unidades) VALUES ($pedido_id,$idProducto,$unidades)";
             $stmt2 =$this->db->query($insert);
            //echo $this->db->error;
            //die();
        }
        // Si se ejecuta el resultado lo devuelve
        $resultado = false;
        if($stmt){
            $resultado = true;
        }
        $stmt->close();
        return $resultado;
    }

    /**
     * update($estado, $id) - método que actualiza el estado por id de pedido
     * @param $estado
     * @param $id
     * @return bool
     */
    public function update($estado, $id){
        $stmt = $this->db->prepare("UPDATE pedidos SET estado = ? WHERE id = ?");
        $stmt->bind_Param("si",$estado,$id);
        $stmt->execute();
        //echo $this->db->error;
        //die();
        // Si se ejecuta el resultado lo devuelve
        $resultado = false;
        if($stmt){
            $resultado = true;
        }
        $stmt->close();
        return $resultado;
    }

    public function updateStock($resta,$id){
        $stmt = $this->db->prepare("UPDATE productos SET stock = ? WHERE id = ?");
        $stmt->bind_Param("ii",$resta,$id);
        $stmt->execute();
        //echo $this->db->error;
        //die();
        // Si se ejecuta el resultado lo devuelve
        $resultado = false;
        if($stmt){
            $resultado = true;
        }
        $stmt->close();
        return $resultado;
    }

}