<!--         ASIDE-->
<aside id="lateral" class="col-3">
    <div id="aside-carrito">
        <h3>Mi carrito</h3>
        <ul>
            <?php $stats = Utils::statsCarrito()?>
            <li><a href="<?=BASE_URL?>carrito/index">Productos (<?=$stats['count']?>)</a></li>
            <li>
                <a href="<?=BASE_URL?>carrito/index">Total: <?=$stats['total']?>€</a>
                <div class="form-text">Gastos de envío incluidos (<?=ENVIO?>,00€)</div>
            </li>

            <li><a href="<?=BASE_URL?>carrito/index">Ver carrito</a></li>
        </ul>
    </div>
    <div id="login" class="block_aside">
        <!--Login rechazado-->
        <?php if(isset($_SESSION["error_login"])) {
            echo '<p class="alert_red">Usuario no registrado</p>';
        } ?>
        <!--No hay un usuario identificado-->
        <?php if(!isset($_SESSION['usuRol'])): ?>
            <h3>Entrar a la web</h3>
            <form action="<?=BASE_URL?>usuario/login" method="POST">
                <div class="form-text">Introduce tus datos y pulsa enviar</div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="txtEmail" maxlength="50" required="required"
                           class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartas tu correo electrónico</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="txtPassword"minlength="6" maxlength="6" required="required"
                           class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" name="btnLogin" class="btn btn-outline-dark me-3">Enviar</button>
                <a href="<?=BASE_URL?>usuario/registro" class="btn btn-outline-dark">Hazte cliente</a>
            </form>
            <div class="prohibido">
                <img class="rounded mx-auto d-block" src="<?=BASE_URL?>assets/img/prohibido.jpg" alt="prohibido" />
                <p class="alert_red">Prohibida la venta a menores de 18 años</p>
                <p class="fw-bold">¿Eres menor de 18 años?</p>
                <a class="alert_red" href="https://www.google.es/">Pulsa aquí</a>
            </div>
        <!--Hay un usuario identificado-->
        <?php else: ?>
            <h5><?=$_SESSION['usuRol']?></h5>
            <h6><?=$_SESSION['usuNombre']?> <?=$_SESSION['usuApellidos']?></h6>
        <?php endif; ?>
            <ul>
                <?php if(isset($_SESSION['usuRol']) && ($_SESSION['usuRol']=='Administrador')): ?>
                    <li><a href="<?=BASE_URL?>categoria/index">Gestionar categorias</a></li>
                    <li><a href="<?=BASE_URL?>producto/gestion">Gestionar productos</a></li>
                    <li><a href="<?=BASE_URL?>pedido/gestion">Gestionar pedidos</a></li>
                    <li><a href="<?=BASE_URL?>pedido/mis_pedidos">Mis pedidos</a></li>
                    <li><a href="<?=BASE_URL?>menu/correo">Mi correo</a></li>
                    <li><a href="<?=BASE_URL?>usuario/logout">Cerrar sesión</a></li>
                    <img class="mt-3" src="<?=BASE_URL?>assets/img/superAdmin.png" alt="logo" />
                <?php endif; ?>
                <?php if(isset($_SESSION['usuRol']) && ($_SESSION['usuRol']=='Usuario')): ?>
                    <li><a href="<?=BASE_URL?>pedido/mis_pedidos">Mis pedidos</a></li>
                    <li><a href="<?=BASE_URL?>usuario/logout">Cerrar sesión</a></li>
                    <img class="mt-3" src="<?=BASE_URL?>assets/img/user.png" alt="logo" />
                <?php endif; ?>
            </ul>
    </div>
</aside>
<!--         MAIN-->
<main id="central" class="col-9">