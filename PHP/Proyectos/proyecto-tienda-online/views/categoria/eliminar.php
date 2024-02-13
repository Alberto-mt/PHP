<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <h1>Eliminar categoria</h1>

        <div class="form-eliminarCategoria">
            <form action="<?=BASE_URL?>categoria/delete" method="POST">
                <div class="form-text">Rellena el campo y pulsa eliminar</div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" maxlength="30"  required="required" class="form-control"/>
                </div>
                <input type="submit" value="Eliminar" name="btnEliminarCategoria" class="btn btn-outline-danger me-3" />
                <input type="reset" value="Borrar" name="btnResetEliminarCategoria" class="btn btn-outline-dark" />
            </form>
            <a href="<?=BASE_URL?>categoria/index" class="btn btn-outline-dark mt-5"><< Volver</a>
        </div>
    </div>
</section>
