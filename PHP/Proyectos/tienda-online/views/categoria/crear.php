<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <h1>Crear categoria</h1>

        <div class="form-crearCategoria">
            <form action="<?=BASE_URL?>categoria/save" method="POST">
                <div class="form-text">Rellena el campo y pulsa crear</div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" maxlength="30"  required="required" class="form-control"/>
                </div>
                <input type="submit" value="Crear" name="btnCrearCategoria" class="btn btn-outline-dark me-3" />
                <input type="reset" value="Borrar" name="btnResetCrearCategoria" class="btn btn-outline-danger" />
            </form>
            <a href="<?=BASE_URL?>categoria/index" class="btn btn-outline-dark mt-5"><< Volver</a>
        </div>
    </div>
</section>
