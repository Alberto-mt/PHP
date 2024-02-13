<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <h1>Gestionar categorias</h1>
        <!--
                Mensajes de creado o no creado-->
        <?php
        if(isset($_SESSION['saveCategoria']) && $_SESSION['saveCategoria'] == 'complete'){
            echo '<p class="alert_green">Categoria creada correctamente</p>';
        }

        elseif(isset($_SESSION['saveCategoria']) && $_SESSION['saveCategoria'] == 'failed'){
            echo '<p class="alert_red">La categoria no existe, introduce bien los datos</p>';
        }

        //Mensaje de eliminado o no eliminado
        elseif(isset($_SESSION['deleteCategoria']) && $_SESSION['deleteCategoria'] == 'complete'){
            echo '<p class="alert_green">Categoria eliminada correctamente</p>';
        }

        elseif(isset($_SESSION['deleteCategoria']) && $_SESSION['deleteCategoria'] == 'failed'){
            echo '<p class="alert_red">La categoria no existe, introduce bien los datos</p>';
        }
        ?>
        <!--Borrar última sesión por nombre-->
        <?php Utils::deleteSession('saveCategoria'); ?>
        <?php Utils::deleteSession('deleteCategoria'); ?>


        <a href="<?=BASE_URL?>categoria/crear" class="btn btn-outline-dark mt-3 mb-2">Crear categoria</a>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ELIMINAR</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($categoriasAll)): ?>
            <?php foreach($categoriasAll as $reg):?>
                <tr>
                    <td><?=$reg["id"]?></td>
                    <td><?=$reg["nombre"]?></td>
                    <td><a href="<?=BASE_URL?>categoria/eliminar&id=<?=$reg["id"]?>" class="btn btn-outline-danger mt-3 mb-2">Eliminar categoria</a></td>
                </tr>
            <?php endforeach;?>
            <?php endif;?>
            </tbody>
        </table>
    </div>
</section>
