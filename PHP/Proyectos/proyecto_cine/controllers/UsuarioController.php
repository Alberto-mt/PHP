<?php
//USUARIOCONTROLLER

require_once "models/InfoGeneral.php";
require_once "models/Peliculas.php";
require_once "models/Salas.php";
require_once "models/Pases.php";
require_once "models/Pagos.php";

$infoGeneral = new InfoGeneral();
$vectorInfo = $infoGeneral->getInfoGeneral();

$peliculas = new Peliculas();
$vectorPeliculas = $peliculas->getPeliculas();
$vectorTituloPelicula = $peliculas->getPeliculaPorTitulo();

$pases = new Pases();
$vectorPases = $pases->getPases();

if(isset($_POST["btnAceptPagos"])){
    require_once "TransaccionPagoController.php";
}
elseif(isset($_POST["btnSubAPagos"])){
    require_once "PagosController.php";
}
else if (isset($_POST["btnSeleccion"])){
    require_once "ButacasController.php";
}
else{
    if(isset($_GET["pid"]) > 0 && !is_null($_GET["pid"])){
        require_once "DetalleController.php";
    }

    else if ($_GET["pid"]='' or $_GET["pid"]==0 or !isset($_GET["pid"])){
        require "PrincipalController.php";
    }
}




