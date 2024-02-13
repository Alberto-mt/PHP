<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <!--        Si es existe un rol, está logueado y puede realizar el comentario-->
        <?php if(isset($_SESSION['usuRol'])):?>
            <h1 class="mb-5 text-center">En que te podemos ayudar</h1>
            <?php
            if(isset($_SESSION['saveComentario']) && $_SESSION['saveComentario'] == 'complete'){
                echo '<p class="alert_green">Comentario enviado correctamente</p>';
            }

            elseif(isset($_SESSION['saveComentario']) && $_SESSION['saveComentario'] == 'failed'){
                echo '<p class="alert_red">Comentario fallido, introduce bien los datos</p>';
            }
            ?>
            <!--Borrar última sesión por nombre-->
            <?php Utils::deleteSession('saveComentario'); ?>

            <div class="form-crearProducto">
                <form action="<?=BASE_URL?>menu/save" method="POST">
                    <div class="form-text">Rellena los campos y pulsa enviar</div>

                    <input type="hidden" name="txtId" value="<?=$_SESSION["usuId"]?>"  class="form-control"/>
                    <div class="mb-3">
                        <label for="asunto" class="form-label">Asunto</label>
                        <input type="text" name="txtAsunto" maxlength="50"  required="required" class="form-control"/>
                    </div>

                    <div class="mb-2">
                        <label for="comentario" class="form-label">Comentario</label>
                        <textarea name="txtComentario" maxlength="250" required="required" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-text mb-3">Recibiras contestación a traves de tu correo electrónico</div>

                    <input type="submit" value="Enviar" name="btnEnviarComentario" class="btn btn-outline-dark me-3" />
                    <input type="reset" value="Borrar" name="btnResetComentario" class="btn btn-outline-danger" />
                </form>
            </div>
        <?php else:?>
            <h1>Necesitas estar identificado :(</h1>
            <p class="alert_red">Necesitas estar logueado para poder enviar un comentario desde la web.</p>
            <p>Tambien puedes contactar con nosotros a traves de las redes sociales</p>
            <a class="btn btn-outline-dark me-3" href="<?=BASE_URL?>menu/acerca_de">IR >></a>
        <?php endif; ?>
    </div>
</section>