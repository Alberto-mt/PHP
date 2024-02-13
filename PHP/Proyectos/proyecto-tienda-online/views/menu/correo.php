<section class="row">
    <div class="col-1"></div>
    <div class="col-11">
        <h1>Comentarios de usuarios</h1>
        <h5>Revisa tu correo electrónico</h5>
        <?php
            if(isset($_SESSION['deleteComentario']) && $_SESSION['deleteComentario'] == 'complete'){
                echo '<p class="alert_green">Comentario eliminado correctamente</p>';
            }

            elseif(isset($_SESSION['deleteComentario']) && $_SESSION['deleteComentario'] == 'failed'){
                echo '<p class="alert_red">Error: comentario no eliminado</p>';
            }
        ?>
        <!--Borrar última sesión por nombre-->
        <?php Utils::deleteSession('deleteComentario'); ?>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">USUARIO</th>
                <th scope="col">ASUNTO</th>
                <th scope="col">FECHA</th>
                <th scope="col">ELIMINAR</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($allComentarios)): ?>
                <?php foreach($allComentarios as $reg): ?>
                    <tr>
                        <td class="align-middle"><?=$reg["usuario_id"]?></td>
                        <td class="align-middle"><?=$reg["asunto"]?></td>
                        <td class="align-middle"><?=$reg["fecha"]?></td>
                        <td class="align-middle"><a href="<?=BASE_URL?>menu/delete&id=<?=$reg["id"]?>" class="btn btn-outline-danger">
                                Eliminar</a></td>
                    </tr>
                <?php endforeach;?>
            <?php endif;?>

            </tbody>
        </table>
    </div>
</section>
