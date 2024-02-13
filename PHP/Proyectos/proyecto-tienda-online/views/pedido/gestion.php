<section class="row">
    <div class="col-1"></div>
    <div class="col-11">
        <h1>Gestionar pedidos</h1>
<!--        <h3>Cambiar estado del pedido</h3>-->
<!--        <form action="--><?//=BASE_URL?><!--pedido/estado" method="POST">-->
<!--            <div class="mb-3">-->
<!--                <select name="selEstado" class="form-select" aria-label="Default select example">-->
<!--                    <option >Selecciona estado de pedido</option>-->
<!--                    <option value="confirm">Pendiente</option>-->
<!--                    <option value="preparation">En preparación</option>-->
<!--                    <option value="ready">Preparado para enviar</option>-->
<!--                    <option value="seded">Enviado</option>-->
<!--                </select>-->
<!--            </div>-->
<!--            <input type="submit" value="Cambiar estado" name="btnEstadoPedido" class="btn btn-outline-dark mb-5" />-->
<!--        </form>-->
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nº PEDIDO</th>
                <th scope="col">COSTE</th>
                <th scope="col">FECHA</th>
                <th scope="col">ESTADO</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($pedidosGestion)): ?>
                <?php foreach($pedidosGestion as $reg): ?>
                    <tr>
                        <td><a href="<?=BASE_URL?>pedido/detalle&id=<?=$reg["id"]?>"><?=$reg["id"]?></a></td>
                        <td><?=$reg["coste"]?></td>
                        <td><?=$reg["fecha"]?></td>
                        <td >
                            <form action="<?=BASE_URL?>pedido/estado" method="POST" class="d-flex flex-row justify-content-start">
                                <!-- Recojo el idPedido-->
                                <input type="hidden" value="<?=$reg["id"]?>" name="txtPedidoId"/>
                                <!-- Recojo el estado-->
                                <select name="selEstado" class="form-select" aria-label="Default select example">
                                    <option ><?= Utils::showStatus($reg["estado"]) ?></option>
                                    <option value="confirm">Pendiente</option>
                                    <option value="preparation">En preparación</option>
                                    <option value="ready">Preparado para enviar</option>
                                    <option value="seded">Enviado</option>
                                </select>
                                <input type="submit" value="Cambiar estado" name="btnEstadoPedido" class="btn btn-outline-dark" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach;?>
            <?php endif;?>

            </tbody>
        </table>
    </div>
</section>
