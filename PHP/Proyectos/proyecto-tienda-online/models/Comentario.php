<?php

/**
 * Class Comentario
 */
class Comentario
{
    private $db;
    private $comentarios;
    private $comentarios2;

    /**
     * InfoGeneral constructor.
     */
    public function __construct(){
        require_once 'config/db.php';
        $this->db = Database::connect();
        $this->comentarios = array();
    }

    /**
     * getInfoGeneral() - devuelve
     * @return array
     */
    public function getInfoGeneral(){
        $consulta = $this->db->query("select * from comentarios");
        while ($fila = $consulta->fetch_assoc()) {
            $this->comentarios[] = $fila;
        }
        return $this->comentarios;
    }

    /**
     * save($usuario,$asunto,$comentario) - método que inserta un comentario en BBDD
     * @param $usuario
     * @param $asunto
     * @param $comentario
     * @return bool
     */
    public function save($usuario,$asunto,$comentario){
        $stmt = $this->db->prepare("INSERT INTO comentarios (usuario_id,asunto,comentario)
                VALUES (?,?,?)");
        $stmt->bind_Param("iss",$usuario,$asunto,$comentario);
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
     * getAllComentarios() - método que lee todos los comentarios de BBDD
     * @return mixed
     */
    public function getAllComentarios(){
        $consulta = $this->db->query("select * from comentarios order by id desc");
        while ($fila = $consulta->fetch_assoc()) {
            $this->comentarios2[] = $fila;
        }
        return $this->comentarios2;
    }

    /**
     * delete($id) - método que elimina un comentario por id
     * @param $id
     * @return bool
     */
    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM comentarios WHERE id = (?)");
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
