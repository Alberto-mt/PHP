<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
<!--        Si es existe un rol, está logueado y puede realizar la compra-->
        <?php if(isset($_SESSION['usuRol'])):?>
            <h1>Hacer pedido</h1>
            <a href="<?=BASE_URL?>carrito/index" class="btn btn-outline-dark "><< Volver </a>

            <h3>Pago de pedido</h3>
            <form action="<?=BASE_URL?>pedido/add" method="POST">
                <div class="form-text">Rellena los campos y pulsa confirmar</div>
                <div class="form-text">Solo realizamos pedidos en España dentro de la peninsula</div>
                <div class="mt-3 mb-3">
                    <label for="provincia" class="form-label">Provincia</label>
                    <select name="selProvincia"  class="form-select" aria-label="Default select example">
                        <option>Selecciona provincia</option>
                        <?php $provinciasAll = Utils::showProvincias();?>
                        <?php foreach($provinciasAll as $reg):?>
                            <option value="<?=$reg["codProvincia"]?>"><?=$reg["provincia"]?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="localidad" class="form-label">Localidad</label>
                    <input type="text" name="txtLocalidad" maxlength="100"  required="required" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" name="txtDireccion" maxlength="100"  required="required" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" name="txtTelefono" maxlength="15"  required="required" class="form-control"/>
                </div>
                <div class="mb-3 d-flex justify-content-around">
                    <img class="tarjeta" src="<?=BASE_URL?>assets/img/american-express.png" alt="tarjeta" />
                    <img class="tarjeta" src="<?=BASE_URL?>assets/img/visa.png" alt="tarjeta" />
                    <img class="tarjeta" src="<?=BASE_URL?>assets/img/mastercard.png" alt="tarjeta" />
                </div>
                <div class="mb-3">
                    <label for="tarjeta" class="form-label">Número de tarjeta</label>
                    <input type="text" name="txtTarjeta" maxlength="10"  required="required" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="mes" class="form-label">Fecha de caducidad(Mes y Año)</label>
                    <input type="number"  min="1" max="12" value="0" required="required" name="txtMesTarjeta">
                    <input type="number" min="2021" max="2031" value="0000" required="required" name="txtAnoTarjeta">
                </div>


                <input type="submit" value="Confirmar" name="btnHacerPedido" class="btn btn-outline-dark me-3" />
                <input type="reset" value="Borrar" name="btnResetHacerPedido" class="btn btn-outline-danger" />
            </form>
        <?php else:?>
            <h1>Necesitas estar identificado</h1>
            <p class="alert_red">Necesitas estar logueado para poder realizar tu pedido</p>
        <?php endif; ?>
    </div>
</section>
