<?php
//TRANSACCIONCONTROLLER

require "views/usuarios/InicioHeaderView.php";
require "views/usuarios/InicioAsideView.php";

$pago = new Pagos();

$tarjeta = isset($_POST["txtNumTarjeta"])?$_POST["txtNumTarjeta"]:'';
$mes = isset($_POST["txtMesTarjeta"])?$_POST["txtMesTarjeta"]:'';
$ano = isset($_POST["txtAnoTarjeta"])?$_POST["txtAnoTarjeta"]:'';
$telefono = isset($_POST["txtTelTarjeta"])?$_POST["txtTelTarjeta"]:'';
$compra = isset($_POST["txtComTarjeta"])?$_POST["txtComTarjeta"]:'';
$total = isset($_POST["txtCashTarjeta"])?$_POST["txtCashTarjeta"]:'';
$pid = $_POST["txtPid"];
$sid = $_POST["txtSid"];
$tid = $_POST["txtTid"];
$ent1 = isset($_POST["txtEntrada1"])?$_POST["txtEntrada1"]:'';;
$ent2 = isset($_POST["txtEntrada2"])?$_POST["txtEntrada2"]:'';;
$ent3 = isset($_POST["txtEntrada3"])?$_POST["txtEntrada3"]:'';;
$ent4 = isset($_POST["txtEntrada4"])?$_POST["txtEntrada4"]:'';;
$ent5 = isset($_POST["txtEntrada5"])?$_POST["txtEntrada5"]:'';;
$ent6 = isset($_POST["txtEntrada6"])?$_POST["txtEntrada6"]:'';;

/**
 *  SI ha rellanado todos los campos  -> PagoOK
 */
if(($tarjeta != '')||($mes != '')||($ano != '')||($telefono != '')||($compra != '')||($total != '')){

    $tickect1 = $pago->realizarTickect1($pid,$sid,$tid,$ent1);
    $tickect2 = $pago->realizarTickect2($pid,$sid,$tid,$ent2);
    $tickect3 = $pago->realizarTickect3($pid,$sid,$tid,$ent3);
    $tickect4 = $pago->realizarTickect4($pid,$sid,$tid,$ent4);
    $tickect5 = $pago->realizarTickect5($pid,$sid,$tid,$ent5);
    $tickect6 = $pago->realizarTickect6($pid,$sid,$tid,$ent6);
    $ingreso = $pago->realizarPago($tarjeta,$mes,$ano,$telefono,$compra,$total);

    echo '<main class="col-9">';
        echo '<div class="pagoExito">';
            echo '<h2 class="d-flex justify-content-center">PAGO REALIZADO CON EXITO</h2>';
            echo '<h3 class="d-flex justify-content-center">'.$compra.'</h3>';
            echo '<h5 class="d-flex justify-content-center">Nota: Acuda a ver la pelicula 15 minutos antes del inicio de sesión!!</h5>';
            echo'<a href="index.php" class="btn btn-outline-primary d-flex justify-content-center">ACEPTAR</a>';
        echo '</div>';
    echo '</main>';
    echo '</section> ';

    require "views/usuarios/PagoOKView.php";
}

