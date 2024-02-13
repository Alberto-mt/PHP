<?php if(isset($productoId)): ?>
    <?php foreach($productoId as $reg):?>
        <h1 class="titulo-producto"><?=$reg["nombre"]?></h1>
    <?php endforeach;?>
    <?php if(isset($productosAllCategory) && count($productosAllCategory)==0): ?>
        <h3>No hay productos para mostrar</h3>
    <?php else: ?>
        <div class="row cards detalles">
            <div class="col-1" "></div>
            <div class="card col-md-11" ">
                <div class="row g-0">
                    <div class="col-7 imagenDetalles">
                        <img  src="<?=BASE_URL?>/uploads/<?=$reg["imagen"]?>" />
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h2 class="card-title mt-5"><?=$reg["nombre"]?></h2>
                            <p class="card-text mt-3"><?=$reg["descripcion"]?></p>
                            <p class="precio mt-2"><?=$reg["precio"]?> €</p>
                            <a href="<?=BASE_URL?>carrito/add&id=<?=$reg["id"] ?>" class="btn btn-outline-dark mt-2 me-3">Comprar</a>
                            <a href="<?=BASE_URL?>" class="btn btn-outline-dark mt-2"><< Volver</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    <?php endif; ?>
<?php else: ?>
    <h1>El producto no existe :(</h1>
<?php endif; ?>
