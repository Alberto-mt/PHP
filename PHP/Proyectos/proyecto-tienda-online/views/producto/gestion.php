<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <h1>Gestión de productos</h1>
        <!--
                Mensajes de creado o no creado-->
        <?php
        if(isset($_SESSION['saveProducto']) && $_SESSION['saveProducto'] == 'complete'){
            echo '<p class="alert_green">Producto creado correctamente</p>';
        }

        elseif(isset($_SESSION['saveProducto']) && $_SESSION['saveProducto'] == 'failed'){
            echo '<p class="alert_red">El producto no existe, introduce bien los datos</p>';
        }

//        Mensaje de actualizado o no actualizado
        elseif(isset($_SESSION['updateProducto']) && $_SESSION['updateProducto'] == 'complete'){
            echo '<p class="alert_green">Producto actualizado correctamente</p>';
        }

        elseif(isset($_SESSION['updateProducto']) && $_SESSION['updateProducto'] == 'failed'){
            echo '<p class="alert_red">El producto no ha sido actualizado</p>';
        }

//        Mensaje de eliminado o no eliminado
        elseif(isset($_SESSION['deleteProducto']) && $_SESSION['deleteProducto'] == 'complete'){
            echo '<p class="alert_green">Producto eliminado correctamente</p>';
        }

        elseif(isset($_SESSION['deleteProducto']) && $_SESSION['deleteProducto'] == 'failed'){
            echo '<p class="alert_red">El producto no existe, introduce bien los datos</p>';
        }
        ?>
        <!--Borrar última sesión por nombre-->
        <?php Utils::deleteSession('saveProducto'); ?>
        <?php Utils::deleteSession('updateProducto'); ?>
        <?php Utils::deleteSession('deleteProducto'); ?>

        <a href="<?=BASE_URL?>producto/crear" class="btn btn-outline-dark mt-3 mb-2">Crear producto</a>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <!--        <th scope="col">CATEGORIA ID</th>-->
                <th scope="col">NOMBRE</th>
                <!--        <th scope="col">DESCRIPCIÓN</th>-->
                <th scope="col">PRECIO</th>
                <th scope="col">STOCK</th>
                <!--        <th scope="col">OFERTA</th>-->
                <!--        <th scope="col">FECHA</th>-->
                <!--        <th scope="col">IMAGEN</th>-->
                <th scope="col">ACTUALIZAR</th>
                <th scope="col">ELIMINAR</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($productosAll)):?>
                <?php foreach($productosAll as $reg):?>
                    <tr>
                        <td><?=$reg["id"]?></td>
                        <!--            <td>--><?//=$reg["categoria_id"]?><!--</td>-->
                        <td><?=$reg["nombre"]?></td>
                        <!--            <td>--><?//=$reg["descripcion"]?><!--</td>-->
                        <td><?=$reg["precio"]?></td>
                        <td><?=$reg["stock"]?></td>
                        <!--            <td>--><?//=$reg["oferta"]?><!--</td>-->
                        <!--            <td>--><?//=$reg["fecha"]?><!--</td>-->
                        <!--            <td>--><?//=$reg["imagen"]?><!--</td>-->
                        <td><a href="<?=BASE_URL?>producto/editar&id=<?=$reg["id"]?>" class="btn btn-outline-dark mt-3 mb-2">Editar</a></td>
                        <td><a href="<?=BASE_URL?>producto/eliminar&id=<?=$reg["id"]?>" class="btn btn-outline-danger mt-3 mb-2">Eliminar</a></td>
                    </tr>
                <?php endforeach;?>
            <?php endif;?>
            </tbody>
        </table>
    </div>
</section>

