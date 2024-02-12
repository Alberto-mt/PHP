<?php

/**
 * Class Pases
 */
class Pases
{
    private $cn;
    private $pases;

    /**
     * Pases constructor.
     */
    public function __construct(){
        require_once "Conectar.php";
        $this->cn = Conectar::connect();
        $this->pases = array();
        $this->pases2 = array();
    }

    /**
     * getPases() - devuelve vector de pases disponibles
     * @return array
     */
    public function getPases(){
        $consulta = $this->cn->query("select * from pases");
        while ($fila = $consulta->fetch_assoc()) {
            $this->pases[] = $fila;
        }
        return $this->pases;
    }

    /**
     * getPasePorHora($tid) - devuelve vector pases por id
     * @param $tid
     * @return array
     */
    public function getPasePorHora($tid){
        $consulta = $this->cn->query("select * from pases where tid= $tid");
        while ($fila = $consulta->fetch_assoc()) {
            $this->pases2[] = $fila;
        }
        return $this->pases2;
    }
}