<?php
class Database{

    /**
     * connect() - método que realiza la conexión
     * - si: retorna $db
     * - no: captura Exception
     * @return mysqli - $db
     */
    public static function connect(){
        try{
            $db = new mysqli(HOST, USERNAME, PASSWORD, DB_NAME);
            if ($db->connect_errno){
                echo 'Error: '.$db->connect_errno;
            }
            $db->set_charset(CHARSET);
        }catch(Exception $e){
            die("Error: " . $e->getMessage());
        }
        return $db;
    }
}