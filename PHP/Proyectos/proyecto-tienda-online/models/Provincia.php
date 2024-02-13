<?php

/**
 * Class Provincia
 */
class Provincia{
    private $db;
    private $provincias;

    /**
     * Usuario constructor.
     */
    public function __construct()
    {
        require_once 'config/db.php';
        $this->db = Database::connect();
        $this->provincias = array();
    }

    /**
     * getAll() - método que carga todas los provincias en un vector(getProvincias())
     * @return array
     */
    public function getAll(){
        $consulta = $this->db->query("select * from provincias where codProvincia != 7 and codProvincia != 35 
            and codProvincia != 38 and codProvincia != 51 and codProvincia != 52");
        while ($fila = $consulta->fetch_assoc()) {
            $this->provincias[] = $fila;
        }
        return $this->provincias;
    }

}