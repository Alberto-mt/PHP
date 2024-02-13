<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <h1>Editar producto</h1>

        <div class="mb-3 foto">
            <?php if(isset($productoId)) :?>
                <?php foreach($productoId as $reg):?>
                    <img src="<?=BASE_URL?>/uploads/<?=$reg["imagen"]?>" class="rounded float-end" alt="">
                <?php endforeach;?>
            <?php endif;?>
        </div>

        <?php if(isset($productoId)) :?>
        <?php foreach($productoId as $reg):?>
        <div class="form-editarProducto">
            <form action="<?=BASE_URL?>producto/update&id=" method="POST">
                <input type="hidden" name="txtId" value="<?=$reg["id"]?>">
                <div class="form-text">Rellena los campos y pulsa actualizar</div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" value="<?=$reg["nombre"]?>" name="txtNombre" maxlength="30"  required="required" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="txtDescripcion" required="required" cols="30" rows="10"
                              class="form-control"><?=$reg["descripcion"]?></textarea>

                </div>

                <div class="mb-3">
                    <label for="precio"  class="form-label">Precio</label>
                    <input type="text" value="<?=$reg["precio"]?>" name="txtPrecio"  required="required" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" value="<?=$reg["stock"]?>" name="txtStock" min="0"  required="required" class="form-control"/>
                </div>
                <?php endforeach;?>
                <?php endif;?>
                <input type="submit" value="Actualizar" name="btnEditarProducto" class="btn btn-outline-dark me-3" />
                <input type="reset" value="Restablecer" name="btnResetEditarProducto" class="btn btn-outline-danger" />
            </form>
            <a href="<?=BASE_URL?>producto/gestion" class="btn btn-outline-dark mt-5"><< Volver</a>
        </div>
    </div>
</section>



