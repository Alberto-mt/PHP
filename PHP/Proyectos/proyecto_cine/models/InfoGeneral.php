<?php

/**
 * Class InfoGeneral
 */
class InfoGeneral
{
    private $cn;
    private $infoGeneral;

    /**
     * InfoGeneral constructor.
     */
    public function __construct(){
        require_once "Conectar.php";
        $this->cn = Conectar::connect();
        $this->infoGeneral = array();
    }

    /**
     * getInfoGeneral() - devuelve
     * @return array
     */
    public function getInfoGeneral(){
        $consulta = $this->cn->query("select * from infoGeneral");
        while ($fila = $consulta->fetch_assoc()) {
            $this->infoGeneral[] = $fila;
        }
        return $this->infoGeneral;
    }
}