<?php
require_once 'models/Usuario.php';

class UsuarioController{
    /**
     * index() - método para comprobar que se carga la página por la url
     *  http://localhost/DWES/tienda_online/index.php?controller=categoria&action=index
     */
	public function index(){
		echo "Controlador Usuarios, Acción index";
	}

    /**
     * registro() - método que me lleva a registro de usuario
     */
	public function registro(){
		require_once 'views/usuario/registro.php';
	}

    /**
     * save() - método que me registra un usuario en la BBDD
     */
	public function save(){
		if(isset($_POST["btnRegistrarse"])) {
		    //Variables que recojo de formulario
            $nombre = isset($_POST["txtNombre"])?$_POST["txtNombre"]:false;
            $apellidos = isset($_POST["txtApellidos"])?$_POST["txtApellidos"]:false;
            $email = isset($_POST["txtEmail"])?$_POST["txtEmail"]:false;
            $password = isset($_POST["txtPassword"])?$_POST["txtPassword"]:false;
            //var_dump($_POST);
            if($nombre && $apellidos && $email && $password){
                $usuario = new Usuario();
                $save = $usuario->save($nombre,$apellidos,$email,$password);
                if ($save){
                    //echo 'Registro realizado';
                    $_SESSION['register'] = "complete";
                }else{
                    //echo 'Registro fallido';
                    $_SESSION['register'] = "failed";
                }
            }else{
                //echo 'Registro fallido';
                $_SESSION['register'] = "failed";
            }
        }else{
            //echo 'Registro fallido';
            $_SESSION['register'] = "failed";
        }
		//Volver a página anterior (soluciona al problema del header()
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'usuario/registro"'.';</script>';

	}

    /**
     * login() - método para loguearse
     */
    public function login(){
        if(isset($_POST["btnLogin"])){
            //Reseteo error_login para que no aparezca
            unset($_SESSION['error_login']);
            // Identificar al usuario
            // Consulta a la base de datos
            $email = isset($_POST["txtEmail"])?$_POST["txtEmail"]:false;
            $password = isset($_POST["txtPassword"])?$_POST["txtPassword"]:false;
            if($email && $password){
                $usuario = new Usuario();
                $identity = $usuario->login($email,$password);
            }else{
                $_SESSION['error_login'] = "failed";
            }
        }
        echo BASE_URL_SCRIPT;
    }

    /**
     * logout() - método de cerrar sesión;
     */
    public function logout(){
        if(isset($_SESSION['usuNombre'])){
            unset($_SESSION['usuNombre']);
        }

        if(isset($_SESSION['usuApellidos'])){
            unset($_SESSION['usuApellidos']);
        }

        if(isset($_SESSION['usuEmail'])){
            unset($_SESSION['usuEmail']);
        }

        if(isset($_SESSION['usuRol'])){
            unset($_SESSION['usuRol']);
        }
        // Elimino carrito
        unset($_SESSION['carrito']);

        echo BASE_URL_SCRIPT;
    }
}
