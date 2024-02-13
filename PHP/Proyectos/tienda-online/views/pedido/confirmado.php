<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <?php if(isset($_SESSION["savePedido"]) && $_SESSION["savePedido"] =='complete'):?>
            <h1>Tu pedido ha sido realizado</h1>
            <p>Plazo mínimo de entrega: entre 2 y 3 días habiles </p>

<!--            Si existe pedido-->
            <?php if(isset($pedidoOneByUser)):?>
            <?php foreach($pedidoOneByUser as $reg):?>
                <h3>Datos de pedido:</h3>
                <p>Número de pedido: <?= $reg["id"] ?> </p>
                <p>Total a pagar: <?= $reg["coste"] ?>€</p>
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
                        <?php if(isset($productosDelPedido)):?>
                            <?php foreach($productosDelPedido as $reg):?>
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

        <?php elseif(isset($_SESSION["savePedido"]) && $_SESSION["savePedido"] !='complete'):?>
            <h1>Tu pedido NO ha sido realizado :(</h1>
        <?php endif; ?>
    </div>
</section>

