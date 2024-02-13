<section class="row">
    <div class="col-1"></div>
    <div class="col-11">
        <h1>Mis pedidos</h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nº PEDIDO</th>
                <th scope="col">COSTE</th>
                <th scope="col">FECHA</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($pedidoAllByUser)): ?>
                <?php foreach($pedidoAllByUser as $reg): ?>
                    <tr>
                        <td><a href="<?=BASE_URL?>pedido/detalle&id=<?=$reg["id"]?>"><?=$reg["id"]?></a></td>
                        <td><?=$reg["coste"]?></td>
                        <td><?=$reg["fecha"]?></td>
                    </tr>
                <?php endforeach;?>
            <?php endif;?>

            </tbody>
        </table>
    </div>
</section>