<?php

/**
 * Class Pagos
 */
class Pagos
{
    private $cn;

    /**
     * Pagos constructor.
     */
    public function __construct(){
        require_once "Conectar.php";
        $this->cn = Conectar::connect();
    }

    /**
     *  realizarPago($tarjeta,$mes,$ano,$telefono,$compra,$total) - inserta datos de la compra en la tabla pagos
     * @param $tarjeta
     * @param $mes
     * @param $ano
     * @param $telefono
     * @param $compra
     * @param $total
     */
    public function realizarPago($tarjeta,$mes,$ano,$telefono,$compra,$total){
        if($tarjeta!=''){
            $consulta = $this->cn->prepare("INSERT INTO pagos(tarjeta, mes, ano,tel,compra,total)
                    VALUES (?,?,?,?,?,?)");
            $consulta->bind_Param("ssssss",$tarjeta,$mes,$ano,$telefono,$compra,$total);
            $consulta->execute();
        }
        else{
            header("location:index.php");
        }
    }

    /**
     * realizarTickect1($pid,$sid,$tid,$ent1) - actualiza el estada de la butaca seleccionada como entrada 1
     * @param $pid
     * @param $sid
     * @param $tid
     * @param $ent1
     */
    public function realizarTickect1($pid,$sid,$tid,$ent1){
            $consulta = $this->cn->prepare("UPDATE disponible SET estado='ocupada'
            WHERE pid=? and sid=? and tid=? and butacas = ?");
            $consulta->bind_Param("iiis",$pid,$sid,$tid,$ent1);
            $consulta->execute();
    }

    /**
     * realizarTickect2($pid,$sid,$tid,$ent2) - actualiza el estada de la butaca seleccionada como entrada 2
     * @param $pid
     * @param $sid
     * @param $tid
     * @param $ent2
     */
    public function realizarTickect2($pid,$sid,$tid,$ent2){
        if($ent2!=''){
            $consulta = $this->cn->prepare("UPDATE disponible SET estado='ocupada'
            WHERE pid=? and sid=? and tid=? and butacas = ?");
            $consulta->bind_Param("iiis",$pid,$sid,$tid,$ent2);
            $consulta->execute();
        }
        else{}
    }

    /**
     * realizarTickect3($pid,$sid,$tid,$ent3) - actualiza el estada de la butaca seleccionada como entrada 3
     * @param $pid
     * @param $sid
     * @param $tid
     * @param $ent3
     */
    public function realizarTickect3($pid,$sid,$tid,$ent3){
        if($ent3!=''){
            $consulta = $this->cn->prepare("UPDATE disponible SET estado='ocupada'
            WHERE pid=? and sid=? and tid=? and butacas = ?");
            $consulta->bind_Param("iiis",$pid,$sid,$tid,$ent3);
            $consulta->execute();
        }
        else{}
    }

    /**
     * realizarTickect4($pid,$sid,$tid,$ent4) - actualiza el estada de la butaca seleccionada como entrada 4
     * @param $pid
     * @param $sid
     * @param $tid
     * @param $ent4
     */
    public function realizarTickect4($pid,$sid,$tid,$ent4){
        if($ent4!=''){
            $consulta = $this->cn->prepare("UPDATE disponible SET estado='ocupada'
            WHERE pid=? and sid=? and tid=? and butacas = ?");
            $consulta->bind_Param("iiis",$pid,$sid,$tid,$ent4);
            $consulta->execute();
        }
        else{}
    }

    /**
     * realizarTickect5($pid,$sid,$tid,$ent5) - actualiza el estada de la butaca seleccionada como entrada 5
     * @param $pid
     * @param $sid
     * @param $tid
     * @param $ent5
     */
    public function realizarTickect5($pid,$sid,$tid,$ent5){
        if($ent5!=''){
            $consulta = $this->cn->prepare("UPDATE disponible SET estado='ocupada'
            WHERE pid=? and sid=? and tid=? and butacas = ?");
            $consulta->bind_Param("iiis",$pid,$sid,$tid,$ent5);
            $consulta->execute();
        }
        else{}
    }

    /**
     * realizarTickect6($pid,$sid,$tid,$ent6) - actualiza el estada de la butaca seleccionada como entrada 6
     * @param $pid
     * @param $sid
     * @param $tid
     * @param $ent6
     */
    public function realizarTickect6($pid,$sid,$tid,$ent6){
        if($ent6!=''){
            $consulta = $this->cn->prepare("UPDATE disponible SET estado='ocupada'
            WHERE pid=? and sid=? and tid=? and butacas = ?");
            $consulta->bind_Param("iiis",$pid,$sid,$tid,$ent6);
            $consulta->execute();
        }
        else{}
    }
}