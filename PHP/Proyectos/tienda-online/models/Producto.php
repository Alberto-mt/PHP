<?php

/**
 * Class Producto
 */
class Producto
{
    private $db;
    private $productos;
    private $productos2;
    private $productos3;
    private $productos4;
    private $productos5;

    /**
     * Usuario constructor.
     */
    public function __construct()
    {
        require_once 'config/db.php';
        $this->db = Database::connect();
        $this->productos = array();
    }

    /**
     * getAll() - método que carga todos los productos en un vector(getProductos())
     * @return array
     */
    public function getAll(){
        $consulta = $this->db->query("select * from productos order by id desc");
        while ($fila = $consulta->fetch_assoc()) {
            $this->productos[] = $fila;
        }
        return $this->productos;
    }

    /**
     * getOne() - método que carga todos los productos en un vector(getProductos())
     * @return array
     */
    public function getOne($id){
        $consulta = $this->db->query("select * from productos where id = $id");
        while ($fila = $consulta->fetch_assoc()) {
            $this->productos2[] = $fila;
        }
        return $this->productos2;
    }

    /**
     * getRandom($limit) - método que carga en la página principal producto aleatorios con un máximo (6)
     * @param $limit
     * @return mixed
     */
    public function getRandom($limit){
        $consulta = $this->db->query("select * from productos WHERE stock >=1 ORDER BY RAND() LIMIT $limit");
        while ($fila = $consulta->fetch_assoc()) {
            $this->productos3[] = $fila;
        }
        return $this->productos3;
    }

    /**
     * getAllCategory($id) - método que recoge todos los productos de una categoria
     * @param $id
     * @return mixed
     */
    public function getAllCategory($id){
        $sql = "Select p.*, c.nombre AS catNombre from productos p inner join categorias c 
            on p.categoria_id = c.id 
            where p.categoria_id = $id and stock >=1";
        $consulta = $this->db->query($sql);
        while ($fila = $consulta->fetch_assoc()) {
            $this->productos4[] = $fila;
        }
        return $this->productos4;
    }

    /**
     * getOneStock($id) - menu que seleciona stock por id
     * @param $id
     * @return mixed
     */
    public function getOneStock($id){
        $consulta = $this->db->query("select stock from productos where id = $id");
        while ($fila = $consulta->fetch_assoc()) {
            $this->productos5[] = $fila;
        }
        return $this->productos5;
    }

    /**
     * save() - método que inserta en la BBDD los parametros recibidos
     * @param $nombre
     * @param $descripcion
     * @param $precio
     * @param $stock
     * @param $categoria
     * @param $imagen
     * @return bool
     */
    public function save($nombre,$descripcion,$precio,$stock,$categoria,$imagen){
        $stmt = $this->db->prepare("INSERT INTO productos (categoria_id,nombre,descripcion,precio,stock,imagen) 
                VALUES (?,?,?,?,?,?)");
        $stmt->bind_Param("issdis",$categoria,$nombre,$descripcion,$precio,$stock,$imagen);
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
     * edit($id,$nombre,$descripcion,$precio,$stock)- método para actalizar producto
     * @param $id
     * @param $nombre
     * @param $descripcion
     * @param $precio
     * @param $stock
     * @return bool
     */
    public function edit($id,$nombre,$descripcion,$precio,$stock){
        $stmt = $this->db->prepare("UPDATE productos SET nombre = ?,descripcion = ?,precio = ?,stock = ?
            WHERE id = ?");
        $stmt->bind_Param("ssdii",$nombre,$descripcion,$precio,$stock,$id);
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
     * delete($id) - método que elimina de bbdd por id
     * @param $id
     * @return bool
     */
    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM productos WHERE id = (?)");
        $stmt->bind_Param("i",$id);
        $stmt->execute();
        // Si se ejecuta el resultado lo devuelve
        $resultado = false;
        if($stmt){
            $resultado = true;
        }
        $stmt->close();
        return $resultado;
    }

}