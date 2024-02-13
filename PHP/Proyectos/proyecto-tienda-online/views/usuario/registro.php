<section class="row">
    <div class="col-1"></div>
    <div class="col-9">
        <h1>Registro de usuarios</h1>

        <div class="form-registro">
            <?php
            if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'){
                echo '<p class="alert_green">Registro completado correctamente</p>';
            }

            elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'){
                echo '<p class="alert_red">Registro fallido, introduce bien los datos</p>';
            }
            ?>
            <!--Borrar última sesión por nombre-->
            <?php Utils::deleteSession('register'); ?>

            <form action="<?=BASE_URL?>usuario/save" method="POST">
                <div class="form-text">Rellena los campos y pulsa registrarse</div>
                <!--<form action="index.php?controller=usuario&action=save" method="POST">-->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" maxlength="30"  required="required" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" name="txtApellidos" maxlength="50"  required="required" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="txtEmail" maxlength="50" required="required" class="form-control"/>
                    <div class="form-text">Nunca compartas tu correo electrónico</div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="txtPassword" minlength="6" maxlength="6" required="required" class="form-control"/>
                    <div class="form-text">Nunca utilices la misma contraseña</div>
                </div>
                <div class="form-text mb-3">¿Eres menor de 18 años? <a class="alert_red" href="https://www.google.es/">Pulsa aquí</a></div>
                <input type="submit" value="Registrarse" name="btnRegistrarse" class="btn btn-outline-dark me-3" />
                <input type="reset" value="Borrar" name="btnResetRegistro" class="btn btn-outline-danger" />

            </form>
        </div>
    </div>
</section>


