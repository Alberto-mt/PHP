<section class="row">
    <div class="col-1"></div>
    <div class="col-11">
        <h1>Carrito de la compra</h1>
        <?php
            if(isset($_SESSION['stockPedido']) && $_SESSION['stockPedido'] == 'failed'){
                echo '<p class="alert_red">Pedido no completado, ha superado el stock de nuestros productos</p>';
            }
        ?>
        <!--Borrar última sesión por nombre-->
        <?php Utils::deleteSession('stockPedido'); ?>

        <?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PRECIO</th>
                <th scope="col">UNIDADES</th>
                <th scope="col">ELIMINAR</th>
            </tr>
            </thead>
            <tbody>
                <?php if(isset($carrito)): ?>
                <?php foreach($carrito as $indice => $elemento): ?>
                    <tr>
                        <td><img  class="carrito-imagen" src="<?=BASE_URL?>/uploads/<?=$elemento["imagen"]?>" /></td>
                        <td class="align-middle"><?=$elemento["nombre"]?></td>
                        <td class="align-middle"><?=$elemento["precio"]?></td>
                        <td class="align-middle">
                            <div class="d-flex justify-content-center mb-2">
                                <div class="mt-3"><?=$elemento["unidades"]?></div>
                                <div class="d-flex flex-column align-middle">
                                    <a href="<?=BASE_URL?>carrito/up&index=<?=$indice?>" class="btn btn-outline-primary
                                        btn-unidades">&#9651;</a>
                                    <a href="<?=BASE_URL?>carrito/down&index=<?=$indice?>" class="btn btn-outline-primary
                                        btn-unidades">&#9661;</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle"><a href="<?=BASE_URL?>carrito/delete&index=<?=$indice?>" class="btn btn-outline-danger">
                                Eliminar</a></td>
                    </tr>
                <?php endforeach;?>
                <?php endif;?>

            </tbody>
        </table>
    </div>
    <div class="mt-5 d-flex flex-row justify-content-end">
        <?php $stats = Utils::statsCarrito(); ?>
        <h3 class="me-3">Precio total: <?= $stats['total']?>€</h3>
        <div><a href="<?=BASE_URL?>pedido/hacer" class="btn btn-outline-dark me-3">Hacer pedido</a></div>
        <div><a href="<?=BASE_URL?>carrito/delete_all" class="btn btn-outline-danger">Vaciar carrito</a></div>
    </div>
    <h6 class="mt-2 d-flex justify-content-end">Precio total más <?= ENVIO?>,00€ de gastos de envío</h6>
    <?php else: ?>
        <p>El carrito está vacio, añade algun producto</p>
    <?php endif; ?>
</section>
