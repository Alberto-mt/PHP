<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <h1>Crear producto</h1>
        <div class="form-crearProducto">
            <form action="<?=BASE_URL?>producto/save" method="POST">
                <div class="form-text">Rellena los campos y pulsa crear</div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" maxlength="30"  required="required" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="txtDescripcion" required="required" cols="30" rows="10" class="form-control"></textarea>
                    <!--            <input type="text" name="txtDescripcion" maxlength="30"  required="required" class="form-control"/>-->
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" name="txtPrecio"  required="required" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="txtStock" min="0"  required="required" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select name="selCategoria" class="form-select" aria-label="Default select example">
                        <option>Selecciona categoria</option>
                        <?php $categoriasAll = Utils::showCategorias();?>
                        <?php foreach($categoriasAll as $reg):?>
                            <option value="<?=$reg["id"]?>"><?=$reg["nombre"]?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" name="filImagen"  required="required" class="form-control"/>
                </div>
                <input type="submit" value="Crear" name="btnCrearProducto" class="btn btn-outline-dark me-3" />
                <input type="reset" value="Borrar" name="btnResetCrearProducto" class="btn btn-outline-danger" />
            </form>
            <a href="<?=BASE_URL?>producto/gestion" class="btn btn-outline-dark mt-5"><< Volver</a>
        </div>
    </div>
</section>
