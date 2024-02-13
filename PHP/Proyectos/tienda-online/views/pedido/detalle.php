<section class="row">
    <div class="col-1"></div>
    <div class="col-11">
        <h1>Detalle de pedido</h1>
        <!--            Si existe pedido-->
        <?php if(isset($pedidoOne)):?>
            <?php foreach($pedidoOne as $reg):?>
                <h3>Datos de envio:</h3>
                <p>Localidad: <?= $reg["poblacion"] ?></p>
                <p>Direccíón: <?= $reg["direccion"] ?></p>
                <p>Teléfono de contacto: <?= $reg["telefono"] ?></p>

                <h3>Datos de pedido:</h3>
                <p>Número de pedido: <?= $reg["id"] ?> </p>
                <p>Total a pagar: <?= $reg["coste"] ?>€</p>
                <p>Total a pagar: <?= Utils::showStatus($reg["estado"]) ?></p>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">UNIDADES</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($productosDetalle)):?>
                        <?php foreach($productosDetalle as $reg):?>
                            <tr>
                                <td><img  class="carrito-imagen" src="<?=BASE_URL?>/uploads/<?=$reg["imagen"]?>" /></td>
                                <td class="align-middle"><?=$reg["nombre"]?></td>
                                <td class="align-middle"><?=$reg["precio"]?></td>
                                <td class="align-middle"><?=$reg["unidades"]?></td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif;?>
                    </tbody>
                </table>
            <?php endforeach;?>
        <?php endif ?>

    </div>
</section>