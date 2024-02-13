<!--INICIODETALLESVIEW-->
<!--MAIN-->
    <main class="col-9">
        <form action="index.php" method="get">
            <table class="table">
                <?php
                echo '<a href="index.php" class="link-primary d-grid gap-2 d-md-flex justify-content-md-end"><< VOLVER</a>';
                foreach($vectorPidPelicula as $reg){
                    echo '<tr class="row">';
                        echo '<td colspan="2">';
                                echo '<h2><span id="tituloDetalles">'.$reg['Titulo'].'</span> - '.$reg['Director'].'</h2>';
                        echo '</td>';
                    echo '</tr>';

                    echo '<tr class="row descripcionDetalles">';
                        echo '<td class="d-flex justify-content-center col-6 ">';
                            echo '<img src="uploads/'.$reg["Link_Imagen"].'" alt="" width="300px">';
                        echo '</td>';

                        echo '<td class="d-flex justify-content-center d-flex align-content-center flex-wrap col-6">';
                        echo '<p>';
                            echo '<span class="subTituloDetalles">Título: </span><br>';
                            echo '<span class="contenidoDetalles">'.$reg['Titulo'].'</span><br>';

                            echo '<span class="subTituloDetalles">Director: </span><br>';
                            echo '<span class="contenidoDetalles">'.$reg['Nacionalidad'].'</span><br>';

                            echo '<span class="subTituloDetalles">Actores: </span><br>';
                            echo '<span class="contenidoDetalles">'.$reg['Actores'].'</span><br>';

                            echo '<span class="subTituloDetalles">Nacionalidad: </span><br>';
                            echo '<span class="contenidoDetalles">'.$reg['Titulo'].'</span><br>';

                            echo '<span class="subTituloDetalles">Género: </span><br>';
                            echo '<span class="contenidoDetalles">'.$reg['Genero'].'</span><br>';

                            echo '<span class="subTituloDetalles">Clasificación: </span><br>';
                            echo '<span class="contenidoDetalles">'.$reg['Clasificacion'].'</span><br>';

                            echo '<span class="subTituloDetalles">Descripción: </span><br>';
                            echo '<span class="contenidoDetalles">'.$reg['Descr'].'</span><br>';

                            echo '<span class="subTituloDetalles">Duración: </span><br>';
                            echo '<span class="contenidoDetalles">'.$reg['Duracion'].'</span><br>';

                            echo '<span class="subTituloDetalles">Más información en: </span><br>';
                            echo '<span class="contenidoDetalles"><a href="'.$reg['Link_Exterior'].'" target="_blank">'.$reg['Titulo'].'.com</a></span><br>';

                        echo '<p>';

                        echo '</td>';

                    echo '</tr>';
                }
                ?>
            </table>
            <a href="t" ></a>
        </form>
    </main>

    </section>