<?php

/**
 * Class Peliculas
 */
class Peliculas
{
    private $cn;
    private $peliculas;
    private $peliculas2;
    private $peliculas3;

    /**
     * Peliculas constructor.
     */
    public function __construct(){
        require_once "Conectar.php";
        $this->cn = Conectar::connect();
        $this->peliculas = array();
        $this->peliculas2 = array();
        $this->peliculas3 = array();
    }

    /**
     * getPeliculas() - devuelve vector de peliculas
     * @return array
     */
    public function getPeliculas(){
        $consulta = $this->cn->query("select * from peliculas");
        while ($fila = $consulta->fetch_assoc()) {
            $this->peliculas[] = $fila;
        }
        return $this->peliculas;
    }

    /**
     * getPeliculaPorTitulo() - devuelve vector de peliculas distinto del anterior
     * @return array
     */
    public function getPeliculaPorTitulo(){
        $consulta = $this->cn->query("select * from peliculas");
        while ($fila = $consulta->fetch_assoc()) {
            $this->peliculas2[] = $fila;
        }
        return $this->peliculas2;

    }

    /**
     * getPeliculaPorPid($pid) - devuelve vector de peliculas por id
     * @param $pid
     * @return array
     */
    public function getPeliculaPorPid($pid){
        $consulta = $this->cn->query("select * from peliculas where pid= $pid");
        while ($fila = $consulta->fetch_assoc()) {
            $this->peliculas3[] = $fila;
        }
        return $this->peliculas3;
    }
}