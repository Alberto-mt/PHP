<?php
require_once 'models/Comentario.php';

/**
 * Class MenuController
 */
class MenuController{
    /**
     * acerca_de() - método para llamar a opción de menú acerca de
     */
    public function acerca_de(){

        require_once 'views/menu/acerca_de.php';
    }

    /**
     * contacto() - método para llamar a opción de menú contacto
     */
    public function contacto(){

        require_once 'views/menu/contacto.php';
    }

    /**
     * save() - método que crea un comentario
     */
    public function save(){
        Utils::isUser();
        if(isset($_POST["btnEnviarComentario"])) {
            $usuario = isset($_POST["txtId"])? intval($_POST["txtId"]):false;
            $asunto = isset($_POST["txtAsunto"])?$_POST["txtAsunto"]:false;
            $comentario = isset($_POST["txtComentario"])?$_POST["txtComentario"]:false;

            if($usuario && $asunto && $comentario){
                $comentarios = new Comentario;
                $save = $comentarios->save($usuario,$asunto,$comentario);
                if ($save){
                    $_SESSION['saveComentario'] = "complete";
                }else{
                    $_SESSION['saveComentario'] = "failed";
                }
            }else{
                $_SESSION['saveComentario'] = "failed";
            }
        }else{
            $_SESSION['saveComentario'] = "failed";
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'menu/contacto"'.';</script>';
    }

    /**
     * correo() - método que muestra todos los comentarios
     */
    public function correo(){
        Utils::isAdmin();
        $comentarios = new Comentario();
        $allComentarios = $comentarios->getAllComentarios();
        require_once 'views/menu/correo.php';
    }

    /**
     * delete() - método que elimina un comentario
     */
    public function delete(){
        Utils::isAdmin();
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $id = intval($id);
            $comentarios = new Comentario();
            $delete = $comentarios->delete($id);
            if ($delete){
                $_SESSION['deleteComentario'] = "complete";
            }else{
                $_SESSION['deleteProducto'] = "failed";
            }

        }else{
            $_SESSION['deleteProducto'] = "failed";
        }
        echo '<script type="text/javascript">window.location ="'.BASE_URL.'menu/correo"'.';</script>';
    }
}
