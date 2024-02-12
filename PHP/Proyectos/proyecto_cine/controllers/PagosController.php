<?php
//PAGOSCONTROLLLER

require_once "models/InfoGeneral.php";
$pid = $_POST["txtPid"];
$titulo = $_POST["txtTitulo"];
$sala = $_POST["txtSala"];
$tid = $_POST["txtTid"];
$paseHora = $_POST["txtPase"];
$entrada1 = $_POST["txtEntrada1"];
$entrada2 = isset($_POST["txtEntrada2"])?$_POST["txtEntrada2"]:'';
$entrada3 = isset($_POST["txtEntrada3"])?$_POST["txtEntrada3"]:'';
$entrada4 = isset($_POST["txtEntrada4"])?$_POST["txtEntrada4"]:'';
$entrada5 = isset($_POST["txtEntrada5"])?$_POST["txtEntrada5"]:'';
$entrada6 = isset($_POST["txtEntrada6"])?$_POST["txtEntrada6"]:'';
$total = $_POST["txtTotal"];

/**
 * Total apagar es igual al numero de butacas por el precio que recojo de infoGeneral
 * así tengo ctualizados los precios
 */
$infoGeneral = new InfoGeneral();
$vectorInfo = $infoGeneral->getInfoGeneral();
foreach($vectorInfo as $reg){
    $precioEntrada = $reg["PrecioEntrada"];
}
$precioEntrada = floatval($precioEntrada);
$totalPagar = floatval($total)*$precioEntrada;
$totalPagar = ''.$totalPagar;

/**
 *  Si al menos compra una entrada realiza pago, si no vuelve a página inicial
 */
if($entrada1 != '' && $entrada1 != null){
    require "views/usuarios/HeaderPagosView.php";
    require "views/usuarios/InicioAsideView.php";
    require "views/usuarios/ReservaLocalidadesView.php";
?>

    <!--MAIN-->
    <main class="col-9">
        <form action="index.php" method="post">
            <table class="table table-hover">
                <?php
                echo '<tr class="row">';
                    echo '<td class="d-flex justify-content-center">';
                        echo '<img src="assets/img/american-express.png" alt="american">';
                        echo '<img src="assets/img/visa.png" alt="visa">';
                        echo '<img src="assets/img/mastercard.png" alt="mastercard">';
                    echo '</td>';
                echo '</tr>';
                echo '<tr class="row">';
                    echo '<td class="d-flex justify-content-center">';
                        echo '<label class="mr">NÚMERO DE TARJETA:</label>';
                        echo '<input type="text" maxlength="10" required="required" name="txtNumTarjeta">';
                    echo '</td>';
                echo '</tr>';
                echo '<tr class="row">';
                    echo '<td class="d-flex justify-content-center">';
                        echo '<label class="mr">FECHA DE CADUCIDAD(MES,AÑO):</label>';
                        echo '<input type="number"  min="1" max="12" value="0" required="required" name="txtMesTarjeta"> , 
                                    <input type="number" min="2021" max="2031" value="0000" required="required" name="txtAnoTarjeta">';
                    echo '</td>';
                echo '</tr>';
                echo '<tr class="row">';
                    echo '<td class="d-flex justify-content-center">';
                        echo '<label class="mr">TELÉFONO DE CONTACTO:</label>';
                        echo '<input type="text" maxlength="15" required="required" name="txtTelTarjeta">';
                    echo '</td>';
                echo '</tr>';
                echo '<tr class="row">';
                    echo '<td colspan="2" class="d-flex justify-content-center">';
                        echo '<label>'.$titulo.' - SALA: '.$sala.' - PASE: '.$paseHora.' - BUTACAS: '.$entrada1.' - '.$entrada2.' - '
                                .$entrada3.' - '.$entrada4.' - '.$entrada5.' - '.$entrada6.'</label>';
                        echo '<input type="hidden" class="datosCompra" readonly="true" name="txtComTarjeta" width"300px" value="'
                                .$titulo.' - SALA: '.$sala.' - HORA: '.$paseHora.' - BUTACAS: '.$entrada1.' - '.$entrada2.' - '
                                    .$entrada3.' - '.$entrada4.' - ' .$entrada5.' - '.$entrada6.'">';

                        // Para hacer butaca ocupada
                        echo '<input type="hidden" name="txtPid" value="'.$pid.'">';
                        echo '<input type="hidden" name="txtSid" value="'.$sala.'">';
                        echo '<input type="hidden" name="txtTid" value="'.$tid.'">';

                        echo '<input type="hidden" name="txtEntrada1" value="'.$entrada1.'">';
                        echo '<input type="hidden" name="txtEntrada2" value="'.$entrada2.'">';
                        echo '<input type="hidden" name="txtEntrada3" value="'.$entrada3.'">';
                        echo '<input type="hidden" name="txtEntrada4" value="'.$entrada4.'">';
                        echo '<input type="hidden" name="txtEntrada5" value="'.$entrada5.'">';
                        echo '<input type="hidden" name="txtEntrada6" value="'.$entrada6.'">';

                echo '</tr>';
                echo '<tr class="row">';
                    echo '<td colspan="2" class="d-flex justify-content-center">';
                    echo '<label class="nota">Esta operación no será anotada en la tarjeta, hasta la confirmación de la
                            compra de las localidades</label>';
                    echo '</td>';
                echo '</tr>';
                echo '<tr class="row">';
                    echo '<td class="d-flex justify-content-center">';
                        echo '<label class="mr">TOTAL A PAGAR(IVA INCLUIDO):</label>';
                        echo '<input class="mr" type="text" readonly="true" name="txtCashTarjeta" value="'.$totalPagar.'">';
                        echo '<label class="mr"> €</label>';
                    echo '</td>';
                echo '</tr>';
                echo '<tr class="row">';
                    echo '<td class="d-flex justify-content-center">';
                        echo '<input type="submit" name="btnAceptPagos" value="ACEPTAR" class="btn btn-outline-primary">';
                        echo '<a href="index.php" class="btn btn-outline-danger">CANCELAR</a>';
                    echo '</td>';
                echo '</tr>';
                ?>
            </table>
        </form>
    </main>

    </section>
<?php
}
else{
    // SE HA DEJADO UN CAMPO SIN SELCCIONAR Y LO DEVUELVE AL INDEX
    header("location:index.php");
}