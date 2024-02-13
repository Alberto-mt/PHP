<?php

/**
 * Class Usuario
 */
class Usuario{
    private $db;
    private $usuarios;

    /**
     * Usuario constructor.
     */
    public function __construct()
    {
        require_once 'config/db.php';
        $this->db = Database::connect();
        $this->usuarios = array();
    }

    /**
     * save($nombre,$apellidos,$email,$password) - método que inserta un usuario
     * @param $nombre
     * @param $apellidos
     * @param $email
     * @param $password
     * @return bool
     */
    public function save($nombre,$apellidos,$email,$password){
        $rol = 2;
        //hash (con protocolo de encriptación BCRYP y cifrado 4 veces
        $hash = password_hash($password, PASSWORD_BCRYPT,['cost'=> 4]);
        $stmt = $this->db->prepare("INSERT INTO usuarios (nombre,apellidos,email,password,rol)
                VALUES (?,?,?,?,?)");
        $stmt->bind_Param("ssssi",$nombre,$apellidos,$email,$hash,$rol);
        $stmt->execute();
        // Si se ejecuta el resultado lo devuelve
        $resultado = false;
        if($stmt){
            $resultado = true;
        }
        $stmt->close();
        return $resultado;
    }

    /**
     * login($email,$password) - método que valida un usuario
     * @param $email
     * @param $password
     * @return bool
     */
    public function login($email,$password){
        // Comprobar si existe el usuario
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_Param("s",$email);
        $stmt->execute();
        // Datos de consulta a guardar en variables de sesión
        $datosUsuario = $stmt->get_result();

        if($datosUsuario->num_rows < 1){
            $_SESSION['error_login'] = 'failed';
        }else{
            while($fila = $datosUsuario->fetch_assoc()){
                $id = $fila["id"];
                $nombre = $fila["nombre"];
                $apellidos = $fila["apellidos"];
                $rol = $fila["rol"];
                $hash = $fila["password"];
            }
            //echo $hash;
            $resultado = false;
            if(password_verify($password,$hash)){
                //echo 'Contraseña correcta';
                $resultado = true;
                $_SESSION["usuId"] = $id ;
                $_SESSION["usuNombre"] = $nombre ;
                $_SESSION["usuApellidos"] = $apellidos ;
                $_SESSION["usuEmail"] = $email ;
                if ($rol==1){
                    $_SESSION["usuRol"] = 'Administrador' ;
                }else if($rol==2){
                    $_SESSION["usuRol"] = 'Usuario' ;
                }
                //echo $_SESSION["usuNombre"].'<br>';
                //echo $_SESSION["usuApellidos"].'<br>';
                //echo $_SESSION["usuEmail"].'<br>';
                //echo $_SESSION["usuRol"].'<br>';
            }else{
                $_SESSION['error_login'] = 'failed';
            }
            return $resultado;
        }
        $stmt->close();
    }
}