<?php

/**
 * Class Salas
 */
class Salas
{
    private $cn;
    private $pases;

    /**
     * Salas constructor.
     */
    public function __construct(){
        require_once "Conectar.php";
        $this->cn = Conectar::connect();
        $this->salas = array();
    }

    /**
     * getSaladePelicula($pid) - devuelve vector de salas asociadas a peliculas por pid
     * @param $pid
     * @return array
     */
    public function getSaladePelicula($pid){
        $consulta = $this->cn->query("SELECT salas.sid FROM `salas` INNER JOIN pelicula_sala 
		ON salas.sid = pelicula_sala.sid
        INNER JOIN peliculas
        on pelicula_sala.pid = peliculas.pid 
        where peliculas.pid = $pid");
        while ($fila = $consulta->fetch_assoc()) {
            $this->salas[] = $fila;
        }
        return $this->salas;
    }
}