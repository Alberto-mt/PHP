<?php
require_once "config/Configuracion.php";

/**
 * Class Conectar
 */
class Conectar
{
    /**
     * connect() - método que realiza la conexión
     * - si: retorna $db
     * - no: captura Exception
     * @return mysqli - $cn
     */
    public static function connect(){
        try{
            $cn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
            if ($cn->connect_errno){
                echo 'Error: '.$cn->connect_errno;
            }
            $cn->set_charset(CHARSET);
        }catch(Exception $e){
            die("Error: " . $e->getMessage());
        }
        return $cn;
    }
}