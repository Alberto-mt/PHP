<?php

/**
 * Class Butacas
 */
class Butacas
{
    private $cn;
    private $butacas;

    /**
     * Butacas constructor.
     */
    public function __construct(){
        require_once "Conectar.php";
        $this->cn = Conectar::connect();
        $this->butacas = array();
    }

    /**
     * getButacas($pid,$tid) - devuelve vector de butacas de tabla disponible por pid y tid
     * @param $pid
     * @param $tid
     * @return array
     */
    public function getButacas($pid,$tid){
        if(($pid!='') and ($tid!='')){
            $consulta = $this->cn->query("select * from disponible where pid = $pid and tid = $tid");
            while ($fila = $consulta->fetch_assoc()) {
                $this->butacas[] = $fila;
            }
            return $this->butacas;
        }
        else{
            header("location:index.php");
        }
    }
}