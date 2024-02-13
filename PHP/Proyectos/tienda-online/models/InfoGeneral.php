<?php

/**
 * Class InfoGeneral
 */
class InfoGeneral
{
    private $db;
    private $infoGeneral;

    /**
     * InfoGeneral constructor.
     */
    public function __construct(){
        require_once 'config/db.php';
        $this->db = Database::connect();
        $this->infoGeneral = array();
    }

    /**
     * getInfoGeneral() - método que devuelve toda la información de la empresa
     * @return array
     */
    public function getInfoGeneral(){
        $consulta = $this->db->query("select * from infogeneral");
        while ($fila = $consulta->fetch_assoc()) {
            $this->infoGeneral[] = $fila;
        }
        return $this->infoGeneral;
    }
}