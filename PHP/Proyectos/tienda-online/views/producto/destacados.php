<section class="row">
    <h1 class="col-12 text-center mb-3">Productos destacados</h1>
    <h5 class="col-12 text-center mb-4 mt-2">Realizamos pedidos en España, dentro de la peninsula</h5>
</section>
<section class="row cards destacados">
    <?php if(isset($productosRandom)) :?>
        <?php foreach($productosRandom as $reg):?>
            <div class="col-1"></div>
            <div class="card col-3">
                <img src="<?=BASE_URL?>/uploads/<?=$reg["imagen"]?>" />
                <h4><?=$reg["nombre"]?></h4>
                <a href="<?=BASE_URL?>producto/ver&id=<?=$reg["id"]?>">Más detalles</a>
                <p class="precio"><?=$reg["precio"]?> €</p>
                <a href="<?=BASE_URL?>carrito/add&id=<?=$reg["id"] ?>" class="btn btn-outline-dark">Comprar</a>
            </div>
        <?php endforeach;?>
    <?php endif;?>
</section>
<section class="row"></section>
