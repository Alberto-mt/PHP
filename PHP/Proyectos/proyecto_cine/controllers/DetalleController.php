<?php
//DETALLECONTROLLER

$peliculas = new Peliculas();
require "views/usuarios/InicioHeaderView.php";
require "views/usuarios/InicioAsideView.php";
$pid = $_GET["pid"];

$vectorPidPelicula = $peliculas->getPeliculaPorPid($pid);
require "views/usuarios/InicioDetallesView.php";