<?php

/**
 * Class Categoria
 */
class Categoria{
    private $db;
    private $categorias;
    private $categorias2;

    /**
     * Usuario constructor.
     */
    public function __construct()
    {
        require_once 'config/db.php';
        $this->db = Database::connect();
        $this->categorias = array();
    }

    /**
     * getAll() - método que carga todas las categorias en un vector(getCategorias())
     * @return array
     */
    public function getAll(){
        $consulta = $this->db->query("select * from categorias ");
        while ($fila = $consulta->fetch_assoc()) {
            $this->categorias[] = $fila;
        }
        return $this->categorias;
    }

    /**
     * getOne($id) - método que carga una categoria por su id
     * @param $id
     * @return mixed
     */
    public function getOne($id){
        $consulta = $this->db->query("select * from categorias where id = $id");
        while ($fila = $consulta->fetch_assoc()) {
            $this->categorias2[] = $fila;
        }
        return $this->categorias2;
    }

    /**
     * save($nombre) - método que inserta una categoria en BBDD
     * @param $nombre
     * @return bool
     */
    public function save($nombre){
        $stmt = $this->db->prepare("INSERT INTO categorias (nombre) VALUES (?)");
        $stmt->bind_Param("s",$nombre);
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
        $stmt = $this->db->prepare("DELETE FROM categorias WHERE id = (?)");
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
