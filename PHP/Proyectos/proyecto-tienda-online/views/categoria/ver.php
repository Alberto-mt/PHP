<?php if(isset($categoriaId)): ?>
    <?php foreach($categoriaId as $reg):?>
            <h1 class="titulo-categoria"><?=$reg["nombre"]?></h1>
    <?php endforeach;?>
    <?php if(isset($productosAllCategory) && count($productosAllCategory)==0): ?>
    <?php var_dump($productosAllCategory); ?>
        <h3>No hay productos para mostrar</h3>
    <?php else: ?>

        <section class="row cards destacados">
            <?php if(isset($productosAllCategory)) :?>
                <?php foreach($productosAllCategory as $reg):?>
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

    <?php endif; ?>
<?php else: ?>
    <h1>La categoria no existe :(</h1>
<?php endif; ?>
